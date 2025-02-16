<?php

namespace App\Http\Controllers;
use App\Models\Polsek;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sambutan()
    {
        return view('sambutan');
    }

    public function lambang()
    {
        return view('lambang');
    }

    public function visiMisi()
    {
        return view('visi_misi');
    }

    public function strukturOrganisasi()
    {
        return view('struktur_organisasi');
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function satBinmas()
    {
        return view('sat_binmas');
    }

    public function bagPerencanaan()
    {
        return view('bag_perencanaan');
    }

    public function bagSumda()
    {
        return view('bag_sumda');
    }

    public function bagOperasi()
    {
        return view('bag_operasi');
    }

    public function satIntelkam()
    {
        return view('sat_intelkam');
    }

    public function satLantas()
    {
        return view('sat_lantas');
    }

    public function satNarkoba()
    {
        return view('sat_narkoba');
    }

    public function satReskrim()
    {
        return view('sat_reskrim');
    }

    public function satSabahara()
    {
        return view('sat_sabahara');
    }

    public function satTahti()
    {
        return view('sat_tahti');
    }

    public function siKeuangan()
    {
        return view('si_keuangan');
    }

    public function siPengawas()
    {
        return view('si_pengawas');
    }

    public function siPropam()
    {
        return view('si_propam');
    }

    public function sieTik()
    {
        return view('sie_tik');
    }

    public function sieUmum()
    {
        return view('sie_umum');
    }

    public function sim()
    {
        return view('sim');
    }

    public function spkt()
    {
        return view('spkt');
    }

    public function skck()
    {
        return view('skck');
    }
    
    public function callCenter()
    {
        return view('call_center');
    }

    public function polsekKamal()
    {
        return view('polsek_kamal');
    }

    public function polsekSocha()
    {
        return view('polsek_socha');
    }

    public function polsekSukolilo()
    {
        return view('polsek_sukolilo');
    }

    public function polsekBurneh()
    {
        return view('polsek_burneh');
    }

    public function polsekTanahMerah()
    {
        return view('polsek_tanah_merah');
    }

    public function polsekKwanyar()
    {
        return view('polsek_kwanyar');
    }

    public function polsekGalis()
    {
        return view('polsek_galis');
    }

    public function polsekTragah()
    {
        return view('polsek_tragah');
    }

    public function polsekBlega()
    {
        return view('polsek_blega');
    }

    public function polsekModung()
    {
        return view('polsek_modung');
    }

    public function polsekKonang()
    {
        return view('polsek_konang');
    }

    public function polsekArosbaya()
    {
        return view('polsek_arosbaya');
    }

    public function polsekKlampis()
    {
        return view('polsek_klampis');
    }

    public function polsekGeger()
    {
        return view('polsek_geger');
    }

    public function polsekTanjungBumi()
    {
        return view('polsek_tanjung_bumi');
    }

    public function polsekSepulu()
    {
        return view('polsek_sepulu');
    }

    public function polsekKokop()
    {
        return view('polsek_kokop');
    }




    public function showPolsek($id)
    {
        $polsek = Polsek::findOrFail($id);
        return view('polsek.show', compact('polsek'));
    }
}

