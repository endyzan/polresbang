<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Satfung;
use Illuminate\Support\Facades\Storage;


class SatfungController extends Controller
{
    public function index()
    {
        $satfung = Satfung::all();
        return view('admin.satfung.index', compact('satfung'));
    }

    public function create()
    {
        return view('admin.satfung.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_satfung' => 'required|string|max:255',
            'logo_satfung' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_satfung' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logosatfungPath = $request->file('logo_satfung')->store('satfung', 'public');
        $fotoPath = $request->file('foto')->store('satfung', 'public');

        Satfung::create([
            'nama_satfung' => $request->nama_satfung,
            'logo_satfung' => $logosatfungPath,
            'deskripsi_satfung' => $request->deskripsi_satfung,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('admin.satfung.index')->with('success', 'Satfung berhasil ditambahkan.');
    }



    public function show($id)
    {
        // Ambil data satfung berdasarkan ID
        $satfung = Satfung::findOrFail($id);
        
        // Kirim data ke view
        return view('admin.satfung.show', compact('satfung'));
    }


    public function edit(Satfung $satfung)
    {
        return view('admin.satfung.edit', compact('satfung'));
    }

    public function update(Request $request, Satfung $satfung)
    {
        $request->validate([
            'nama_satfung' => 'required|string|max:255',
            'logo_satfung' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_satfung' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('logo_satfung')) {
            Storage::disk('public')->delete($satfung->logo_satfung);
            $logosatfungPath = $request->file('logo_satfung')->store('satfung', 'public');
            $satfung->logo_satfung = $logosatfungPath;
        }

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($satfung->foto);
            $fotoPath = $request->file('foto')->store('satfung', 'public');
            $satfung->foto = $fotoPath;
        }

        $satfung->nama_satfung = $request->nama_satfung;
        $satfung->deskripsi_satfung = $request->deskripsi_satfung;
        $satfung->save();

        return redirect()->route('admin.satfung.index')->with('success', 'Satfung berhasil diperbarui.');
    }

    public function destroy(Satfung $satfung)
    {
        Storage::disk('public')->delete([$satfung->logo_satfung, $satfung->foto]);
        $satfung->delete();
        return redirect()->route('admin.satfung.index')->with('success', 'Satfung berhasil dihapus.');
    }
}