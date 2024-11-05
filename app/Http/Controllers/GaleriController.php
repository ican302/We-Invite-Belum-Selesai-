<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Invitation;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'foto_sampul' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $foto_sampul_path = 'D:/Herd/undangan/public/tema/tema-1/images/photos-videos/' . $request->file('foto_sampul')->getClientOriginalName();

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();

            if ($galeri) {
                if (file_exists($galeri->foto_sampul)) {
                    unlink($galeri->foto_sampul);
                }
                $request->file('foto_sampul')->move('D:/Herd/undangan/public/tema/tema-1/images/photos-videos', $request->file('foto_sampul')->getClientOriginalName());
                $galeri->update(['foto_sampul' => $foto_sampul_path]);
            } else {
                Galeri::create([
                    'invitation_id' => $invitation->id,
                    'foto_sampul' => $foto_sampul_path,
                    'foto_galeri' => json_encode([]),
                ]);
            }

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Foto sampul berhasil disimpan')->withFragment('foto-video');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan foto sampul: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function storeMultiple(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'foto_galeri.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $foto_galeri_paths = [];

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan! Silakan unggah foto sampul terlebih dahulu');
            }

            $existingPhotos = json_decode($galeri->foto_galeri, true);
            if (is_array($existingPhotos)) {
                $foto_galeri_paths = $existingPhotos;
            }

            foreach ($request->file('foto_galeri') as $foto) {
                $fotoName = $foto->getClientOriginalName();
                $foto->move('D:/Herd/undangan/public/tema/tema-1/images/photos-videos', $fotoName);
                $foto_galeri_paths[] = 'D:/Herd/undangan/public/tema/tema-1/images/photos-videos/' . $fotoName;
            }

            $galeri->update(['foto_galeri' => json_encode($foto_galeri_paths)]);

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Foto galeri berhasil disimpan')->withFragment('foto-video');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan foto galeri: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function storeVideo(Request $request, Invitation $invitation)
    {
        try {
            $request->validate([
                'video_galeri' => 'required|url',
            ]);

            $galeri = Galeri::where('invitation_id', $invitation->id)->first();

            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan! Silakan unggah foto sampul terlebih dahulu');
            }

            $galeri->update(['video_galeri' => $request->input('video_galeri')]);

            return redirect()->route('user.invitation.edit', $invitation->id)
                ->with('success', 'Video galeri berhasil disimpan.')->withFragment('foto-video');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan video galeri: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyCoverPhoto(Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            if ($galeri->foto_sampul && file_exists(public_path($galeri->foto_sampul))) {
                unlink(public_path($galeri->foto_sampul));
            }

            $galeri->update(['foto_sampul' => null]);

            return redirect()->back()->with('success', 'Foto sampul berhasil dihapus')->withFragment('foto-video');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus foto sampul: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyGalleryPhoto(Request $request, Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            $index = $request->input('index');
            $foto_galeri = json_decode($galeri->foto_galeri);

            if (isset($foto_galeri[$index])) {
                if (file_exists($foto_galeri[$index])) {
                    unlink($foto_galeri[$index]);
                }

                unset($foto_galeri[$index]);
                $galeri->update(['foto_galeri' => json_encode(array_values($foto_galeri))]);

                return redirect()->back()->with('success', 'Foto galeri berhasil dihapus');
            }

            return redirect()->back()->with('error', 'Foto galeri tidak ditemukan!')->withFragment('foto-video');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus foto galeri: ' . $e->getMessage())->withFragment('foto-video');
        }
    }

    public function destroyVideo(Galeri $galeri)
    {
        try {
            if (!$galeri) {
                return redirect()->back()->with('error', 'Galeri tidak ditemukan!');
            }

            if (file_exists(public_path($galeri->video_galeri))) {
                unlink(public_path($galeri->video_galeri));
            }

            $galeri->update(['video_galeri' => null]);

            return redirect()->back()->with('success', 'Video galeri berhasil dihapus')->withFragment('foto-video');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus video galeri: ' . $e->getMessage())->withFragment('foto-video');
        }
    }
}
