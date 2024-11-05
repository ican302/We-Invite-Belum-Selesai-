<?php

namespace App\Http\Controllers;

use App\Models\KadoDigital;
use App\Models\Invitation;
use Illuminate\Http\Request;

class KadoDigitalController extends Controller
{
    public function store(Request $request, Invitation $invitation)
    {
        $request->validate([
            'penerima' => 'required',
            'nama_bank' => 'required',
            'no_rekening' => 'required',
        ]);

        KadoDigital::create([
            'penerima' => $request->penerima,
            'nama_bank' => $request->nama_bank,
            'no_rekening' => $request->no_rekening,
            'invitation_id' => $invitation->id,
        ]);

        return back()->with('success', 'Kado Digital berhasil ditambahkan')->withFragment('kado-digital');
    }

    public function update(Request $request, KadoDigital $kadodigital)
    {
        $request->validate([
            'penerima' => 'required',
            'nama_bank' => 'required',
            'no_rekening' => 'required',
        ]);

        $kadodigital->update($request->all());

        return back()->with('success', 'Kado Digital berhasil diubah')->withFragment('kado-digital');
    }

    public function destroy(KadoDigital $kadodigital)
    {
        $kadodigital->delete();

        return back()->with('success', 'Kado Digital berhasil dihapus')->withFragment('kado-digital');
    }
}
