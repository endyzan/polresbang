<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

use App\Models\Spktkegiatan;
use App\Models\Skcksarana;


class PageController extends Controller
{
    // sim
    public function pelayananSim()
    {
        return view('pages.pelayanan-sim');
    }
    public function sistemAntrian()
    {
        return view('pages.sistem-antrian');
    }
    public function saranaPrasarana()
    {
        $layanans = Layanan::all();
        return view('pages.sarana-prasarana', compact('layanans'));

    }


    // skck
    public function pelayananSkck()
    {
        return view('pages.pelayanan-skck');
    }
    public function sistemAntrianSkck()
    {
        return view('pages.sistem-antrian-skck');
    }
    public function saranaPrasaranaSkck()
    {
        $skcksarana = Skcksarana::all();
        return view('pages.sarana-prasarana-skck', compact('skcksarana'));
    }


    // spkt
    public function pelayananSpkt()
    {
        return view('pages.pelayanan-spkt');
    }
    public function sistemAntrianSpkt()
    {
        $spktkegiatan = Spktkegiatan::all();
        return view('pages.sistem-antrian-spkt', compact('spktkegiatan'));
    }
    public function saranaPrasaranaSpkt()
    {
        return view('pages.sarana-prasarana-spkt');
    }
}