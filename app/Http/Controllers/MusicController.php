<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Invitation;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function store(Request $request, $invitationId)
    {
        $request->validate([
            'music_link' => 'required|url',
        ]);

        $invitation = Invitation::findOrFail($invitationId);

        Music::create([
            'invitation_id' => $invitation->id,
            'file_path' => $request->music_link,
        ]);

        return redirect()->back()->with('success', 'Musik berhasil diunggah')->withFragment('musik');
    }

    public function destroy($id)
    {
        $music = Music::findOrFail($id);

        $music->delete();

        return redirect()->back()->with('success', 'Musik berhasil dihapus')->withFragment('musik');
    }
}
