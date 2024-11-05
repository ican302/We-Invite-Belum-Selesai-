<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Invitation;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function store(Request $request, $invitationId)
    {
        $request->validate(['nama_tamu' => 'required|string|max:255']);

        Tamu::create([
            'nama_tamu' => $request->nama_tamu,
            'invitation_id' => $invitationId,
        ]);

        return back()->with('success', 'Tamu berhasil ditambahkan')->withFragment('tamu');
    }

    public function update(Request $request, Tamu $tamu)
    {
        $request->validate(['nama_tamu' => 'required|string|max:255']);

        $tamu->update(['nama_tamu' => $request->nama_tamu]);

        return back()->with('success', 'Tamu berhasil diperbarui')->withFragment('tamu');
    }

    public function destroy(Tamu $tamu)
    {
        $tamu->delete();

        return back()->with('success', 'Tamu berhasil dihapus')->withFragment('tamu');
    }
}
