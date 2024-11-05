<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Acara;
use App\Models\Music;
use App\Models\Quote;
use App\Models\Theme;
use App\Models\Cerita;
use App\Models\Galeri;
use App\Models\Comment;
use App\Models\Mempelai;
use App\Models\Streaming;
use App\Models\Invitation;
use App\Models\KadoDigital;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function storeInvitation(Request $request)
    {
        $request->validate([
            'theme_id' => 'required|exists:themes,id',
            'title' => 'required|string|max:255',
        ]);

        try {
            Invitation::create([
                'user_id' => Auth::id(),
                'theme_id' => $request->theme_id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
            ]);

            return redirect()->route('user.undangan')
                ->with('success', 'Undangan berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat membuat undangan: ' . $e->getMessage());
        }
    }

    public function editInvitation(Invitation $invitation)
    {
        try {
            $themes = Theme::all();
            $mempelai = Mempelai::where('invitation_id', $invitation->id)->first();
            $acara = Acara::where('invitation_id', $invitation->id)->get();
            $streaming = Streaming::where('invitation_id', $invitation->id)->first();
            $galeri = Galeri::where('invitation_id', $invitation->id)->first();
            $cerita = Cerita::where('invitation_id', $invitation->id)->get();
            $quote = Quote::where('invitation_id', $invitation->id)->first();
            $kadodigital = KadoDigital::where('invitation_id', $invitation->id)->get();
            $music = Music::where('invitation_id', $invitation->id)->first();
            $tamu = Tamu::where('invitation_id', $invitation->id)->get();
            $comment = Comment::where('invitation_id', $invitation->id)->get();

            return view('user.edit-invitation', compact('invitation', 'themes', 'mempelai', 'acara', 'streaming', 'galeri', 'cerita', 'quote', 'kadodigital', 'music', 'tamu', 'comment'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data undangan: ' . $e->getMessage());
        }
    }

    public function updateInvitation(Request $request, Invitation $invitation)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        try {
            $invitation->update($request->only('title'));

            return redirect()->back()->with('success', 'Undangan berhasil diperbarui')->withFragment('tema');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui undangan: ' . $e->getMessage())->withFragment('tema');
        }
    }

    public function destroyInvitation(Invitation $invitation)
    {
        try {
            $invitation->delete();

            return redirect()->route('user.undangan')->with('success', 'Undangan berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus undangan: ' . $e->getMessage());
        }
    }

    public function demo($slug)
    {
        try {
            $theme = Theme::where('slug', $slug)->firstOrFail();
            return view('demo.' . $theme->view_file);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat demo: ' . $e->getMessage());
        }
    }

    public function show($slug)
    {
        try {
            $invitation = Invitation::with(['mempelai', 'acara', 'streaming', 'galeri', 'cerita', 'quote', 'kadodigital', 'music'])
                ->where('slug', $slug)
                ->firstOrFail();
            $theme = Theme::findOrFail($invitation->theme_id);
            $comments = Comment::where('invitation_id', $invitation->id)
                ->where('active', true)
                ->latest()
                ->get();

            return view('tema.' . $theme->view_file, [
                'invitation' => $invitation,
                'theme' => $theme,
                'comments' => $comments,
                'commentsEnabled' => $invitation->comments_enabled,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat undangan: ' . $e->getMessage());
        }
    }

    public function showForGuest($slug, $guestName)
    {
        try {
            $invitation = Invitation::with(['mempelai', 'acara', 'streaming', 'galeri', 'cerita', 'quote', 'kadodigital', 'music'])
                ->where('slug', $slug)
                ->firstOrFail();

            $guestData = Tamu::where('nama_tamu', $guestName)->firstOrFail();

            $theme = Theme::findOrFail($invitation->theme_id);
            $comments = Comment::where('invitation_id', $invitation->id)
                ->where('active', true)
                ->latest()
                ->get();

            return view('tema.' . $theme->view_file, [
                'invitation' => $invitation,
                'theme' => $theme,
                'comments' => $comments,
                'commentsEnabled' => $invitation->comments_enabled,
                'guestData' => $guestData,
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat undangan: ' . $e->getMessage());
        }
    }
}
