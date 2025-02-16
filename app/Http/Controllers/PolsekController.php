<?php

namespace App\Http\Controllers;

use App\Models\Polsek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PolsekController extends Controller
{
    // Menampilkan daftar Polsek
    public function index()
    {
        $polseks = Polsek::all();
        return view('admin.polsek.index', compact('polseks'));
    }

    // Menampilkan form tambah Polsek
    public function create()
    {
        return view('admin.polsek.create');
    }

    // Menyimpan Polsek baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_polsek' => 'required|string|max:255',
            'foto_kapolsek' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_kapolsek' => 'required|string',
            'foto_bangunan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan foto kapolsek
        $fotoKapolsekPath = $request->file('foto_kapolsek')->store('polseks', 'public');

        // Simpan foto bangunan
        $fotoBangunanPath = $request->file('foto_bangunan')->store('polseks', 'public');

        // Simpan data ke database
        Polsek::create([
            'nama_polsek' => $request->nama_polsek,
            'foto_kapolsek' => $fotoKapolsekPath,
            'deskripsi_kapolsek' => $request->deskripsi_kapolsek,
            'foto_bangunan' => $fotoBangunanPath,
        ]);

        return redirect()->route('admin.polsek.index')->with('success', 'Polsek berhasil ditambahkan.');
    }

    // Menampilkan detail Polsek
    public function show(Polsek $polsek)
    {
        return view('admin.polsek.show', compact('polsek'));
    }

    // Menampilkan form edit Polsek
    public function edit(Polsek $polsek)
    {
        return view('admin.polsek.edit', compact('polsek'));
    }

    // Mengupdate Polsek
    public function update(Request $request, Polsek $polsek)
    {
        $request->validate([
            'nama_polsek' => 'required|string|max:255',
            'foto_kapolsek' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_kapolsek' => 'required|string',
            'foto_bangunan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update foto kapolsek jika ada
        if ($request->hasFile('foto_kapolsek')) {
            Storage::disk('public')->delete($polsek->foto_kapolsek);
            $fotoKapolsekPath = $request->file('foto_kapolsek')->store('polseks', 'public');
            $polsek->foto_kapolsek = $fotoKapolsekPath;
        }

        // Update foto bangunan jika ada
        if ($request->hasFile('foto_bangunan')) {
            Storage::disk('public')->delete($polsek->foto_bangunan);
            $fotoBangunanPath = $request->file('foto_bangunan')->store('polseks', 'public');
            $polsek->foto_bangunan = $fotoBangunanPath;
        }

        // Update data lainnya
        $polsek->nama_polsek = $request->nama_polsek;
        $polsek->deskripsi_kapolsek = $request->deskripsi_kapolsek;
        $polsek->save();

        return redirect()->route('admin.polsek.index')->with('success', 'Polsek berhasil diperbarui.');
    }

    // Menghapus Polsek
    public function destroy(Polsek $polsek)
    {
        // Hapus file foto dari storage
        Storage::disk('public')->delete([$polsek->foto_kapolsek, $polsek->foto_bangunan]);

        // Hapus data dari database
        $polsek->delete();

        return redirect()->route('admin.polsek.index')->with('success', 'Polsek berhasil dihapus.');
    }
}