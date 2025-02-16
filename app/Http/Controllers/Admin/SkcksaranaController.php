<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skcksarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkcksaranaController extends Controller {
    public function index() {
        $skcksarana = Skcksarana::all();
        return view('admin.skcksarana.index', compact('skcksarana'));
    }
    

    public function create() {
        return view('admin.skcksarana.create');
    }

    public function store(Request $request) {
        $request->validate([
            'foto_skcksarana' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $path = $request->file('foto_skcksarana')->store('skcksarana', 'public');

        Skcksarana::create(['foto_skcksarana' => $path]);

        return redirect()->route('admin.skcksarana.index')->with('success', 'Skcksarana berhasil ditambahkan.');
    }

    public function destroy(Skcksarana $skcksarana) {
        if ($skcksarana->foto_skcksarana) {
            Storage::delete('public/' . $skcksarana->foto_skcksarana);
        }

        $skcksarana->delete();
        return redirect()->route('admin.skcksarana.index')->with('success', 'Skcksarana berhasil dihapus.');
    }
}