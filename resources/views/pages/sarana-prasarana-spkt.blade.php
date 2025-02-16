@extends('layouts.apps')

@section('title', 'SKCK')
@section('meta_description', 'SKCK Polres Bangkalan')

@section('content')


<div class="container-sambutankap">
    <div class="sidebar">
        <ul>
            <li>
                <a 
                    href="{{ route('pelayanan.spkt') }}" 
                    class="{{ request()->routeIs('pelayanan.spkt') ? 'active' : '' }}"
                >
                    Pelayanan SPKT
                </a>
            </li>
            <li>
                <a 
                    href="{{ route('sarana.prasarana.spkt') }}" 
                    class="{{ request()->routeIs('sarana.prasarana.spkt') ? 'active' : '' }}"
                >
                    Persyaratan Dokumen Laporan Kehilangan
                </a>
            </li>
            <li>
                <a 
                    href="{{ route('sistem.antrian.spkt') }}" 
                    class="{{ request()->routeIs('sistem.antrian.spkt') ? 'active' : '' }}"
                >
                    DOKUMENTASI KEGIATAN SPKT
                </a>
            </li>
        </ul>
    </div>


    <div class="main-content">
        <div class="header-user">
            <h1>TUPOKSI SENTRA PELAYANAN KEPOLISIAN TERPADU  (SPKT)</h1>
        </div>
        <div class="content-user-gabung">
            <div class="divider"></div>
            <div class="text-user">
            <p><strong>STNK</strong></p>
            <ul>
            <li>Fotokopi KTP</li>
            <li>Fotokopi STNK / BPKB</li>
            </ul>

            <p><strong>BPKB</strong></p>
            <ul>
            <li>Fotokopi KTP</li>
            <li>Fotokopi STNK / BPKB</li>
            <li>Membawa Materai 6000</li>
            </ul>

            <p><strong>SIM</strong></p>
            <ul>
            <li>Fotokopi KTP</li>
            </ul>

            <p><strong>KTP</strong></p>
            <ul>
            <li>Fotokopi KTP</li>
            <li>Kartu Keluarga (KK)</li>
            <li>Surat keterangan pengantar dari desa</li>
            </ul>

            <p><strong>KARTU ATM</strong></p>
            <ul>
            <li>Fotokopi KTP</li>
            <li>Fotokopi Buku Tabungan</li>
            </ul>

            <p><strong>JAMSOSTEK/BPJS</strong></p>
            <ul>
            <li>Fotokopi KTP</li>
            <li>Fotokopi JAMSOSTEK, BPJS / Nomor JAMSOSTEK, BPJS</li>
            </ul>

            <p><strong>KARTU TANDA MAHASISWA</strong></p>
            <ul>
            <li>Fotokopi KTP</li>
            <li>Nomor Induk Mahasiswa (NIM)</li>
            </ul>


            </div>
        </div>
    </div>
</div>
@endsection