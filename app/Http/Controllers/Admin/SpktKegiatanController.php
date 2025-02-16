<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Spktkegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpktKegiatanController extends Controller {
    public function index() {
        $spktkegiatan = Spktkegiatan::all();
        return view('admin.spktkegiatan.index', compact('spktkegiatan'));
    }

    public function create() {
        return view('admin.spktkegiatan.create');
    }

    public function store(Request $request) {
        $request->validate([
            'foto_spktkegiatan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $path = $request->file('foto_spktkegiatan')->store('spktkegiatan', 'public');

        Spktkegiatan::create(['foto_spktkegiatan' => $path]);

        return redirect()->route('admin.spktkegiatan.index')->with('success', 'Spktkegiatan berhasil ditambahkan.');
    }

    public function destroy(Spktkegiatan $spktkegiatan) {
        if ($spktkegiatan->foto_spktkegiatan) {
            Storage::delete('public/' . $spktkegiatan->foto_spktkegiatan);
        }

        $spktkegiatan->delete();
        return redirect()->route('admin.spktkegiatan.index')->with('success', 'Spktkegiatan berhasil dihapus.');
    }
}