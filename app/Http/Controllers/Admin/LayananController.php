<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class LayananController extends Controller {
    public function index() {
        $layanans = Layanan::all();
        return view('admin.layanan.index', compact('layanans'));
    }

    public function create() {
        return view('admin.layanan.create');
    }

    public function store(Request $request) {
        $request->validate([
            'foto_sarana' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $path = $request->file('foto_sarana')->store('layanans', 'public');

        Layanan::create(['foto_sarana' => $path]);

        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function destroy(Layanan $layanan) {
        if ($layanan->foto_sarana) {
            Storage::delete('public/' . $layanan->foto_sarana);
        }

        $layanan->delete();
        return redirect()->route('admin.layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
