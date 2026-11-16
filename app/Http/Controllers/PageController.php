<?php

namespace App\Http\Controllers;
use App\Models\PaketInternet;
use App\Models\artikel;
use App\Models\galeri;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $pakets = PaketInternet::where('status', true)->latest()->get();
        $galeris = galeri::latest()->take(6)->get();
        $artikels = artikel::latest()->take(3)->get();

        return view('pages.home', compact('pakets', 'galeris', 'artikels'));
    }

    public function order(Request $request)
    {
        $validated = $request->validate([
            'paket_internet_id' => 'required|exists:paket_internets,id',
            'nama_pelanggan' => 'required|string|max:255',
            'no_telp' => 'required|string|max:12',
            'alamat' => 'required|string',
        ]);

        pelanggan::create([
            'nama_pelanggan' => $validated['nama_pelanggan'],
            'paket_internet_id' => $validated['paket_internet_id'],
            'no_telp' => $validated['no_telp'],
            'alamat' => $validated['alamat'],
        ]);

        return redirect()->back()->with('sukses', 'Pesanan berhasil dikirim.');
    }

}
