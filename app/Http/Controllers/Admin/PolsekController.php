<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Polsek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PolsekController extends Controller
{
    public function index()
    {
        $polseks = Polsek::all();
        return view('admin.polsek.index', compact('polseks'));
    }

    public function create()
    {
        return view('admin.polsek.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_polsek' => 'required|string|max:255',
            'foto_kapolsek' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_kapolsek' => 'required|string',
            'foto_bangunan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoKapolsekPath = $request->file('foto_kapolsek')->store('polseks', 'public');
        $fotoBangunanPath = $request->file('foto_bangunan')->store('polseks', 'public');

        Polsek::create([
            'nama_polsek' => $request->nama_polsek,
            'foto_kapolsek' => $fotoKapolsekPath,
            'deskripsi_kapolsek' => $request->deskripsi_kapolsek,
            'foto_bangunan' => $fotoBangunanPath,
        ]);

        return redirect()->route('admin.polsek.index')->with('success', 'Polsek berhasil ditambahkan.');
    }



    public function show($id)
    {
        // Ambil data polsek berdasarkan ID
        $polsek = Polsek::findOrFail($id);
        
        // Kirim data ke view
        return view('admin.polsek.show', compact('polsek'));
    }


    public function edit(Polsek $polsek)
    {
        return view('admin.polsek.edit', compact('polsek'));
    }

    public function update(Request $request, Polsek $polsek)
    {
        $request->validate([
            'nama_polsek' => 'required|string|max:255',
            'foto_kapolsek' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_kapolsek' => 'required|string',
            'foto_bangunan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto_kapolsek')) {
            Storage::disk('public')->delete($polsek->foto_kapolsek);
            $fotoKapolsekPath = $request->file('foto_kapolsek')->store('polseks', 'public');
            $polsek->foto_kapolsek = $fotoKapolsekPath;
        }

        if ($request->hasFile('foto_bangunan')) {
            Storage::disk('public')->delete($polsek->foto_bangunan);
            $fotoBangunanPath = $request->file('foto_bangunan')->store('polseks', 'public');
            $polsek->foto_bangunan = $fotoBangunanPath;
        }

        $polsek->nama_polsek = $request->nama_polsek;
        $polsek->deskripsi_kapolsek = $request->deskripsi_kapolsek;
        $polsek->save();

        return redirect()->route('admin.polsek.index')->with('success', 'Polsek berhasil diperbarui.');
    }

    public function destroy(Polsek $polsek)
    {
        Storage::disk('public')->delete([$polsek->foto_kapolsek, $polsek->foto_bangunan]);
        $polsek->delete();
        return redirect()->route('admin.polsek.index')->with('success', 'Polsek berhasil dihapus.');
    }
}