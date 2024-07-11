<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkmController extends Controller
{
    public function kegiatan()
    {
        return view('ukm.kegiatan');
        // $kegiatans = Kegiatan::all();
        // return view('ukm.kegiatan', compact('kegiatan'));
    }

    public function add_kegiatan()
    {
        return view('ukm.add_kegiatan');
    }

    public function proposal()
    {
        return view('ukm.proposal');
    }

    public function add_proposal()
    {
        return view('ukm.add_proposal');
    }

    public function lpj()
    {
        return view('ukm.lpj');
    }

    public function add_lpj()
    {
        return view('ukm.add_lpj');
    }
    // public function updateStatus(Request $request, $id)
    // {
    //     $request->validate([
    //         'status' => 'required|in:terkirim,diterima,ditolak,perlu revisi',
    //     ]);

    //     $kegiatan = Kegiatan::findOrFail($id);

    //     // Perbarui status kegiatan
    //     $kegiatan->status_kegiatan = $request->status;
    //     $kegiatan->save();

    //     return redirect()->back()->with('success', 'Status kegiatan berhasil diperbarui');
    // }
}
