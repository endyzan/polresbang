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
            <p>SPKT bertugas memberikan pelayanan kepolisian secara terpadu terhadap laporan/pengaduan masyarakat, memberikan bantuan dan pertolongan, serta memberikan pelayanan informasi.</p>

            <p><strong>SPKT menyelenggarakan fungsi:</strong></p>
            <ul>
            <li>Pelayanan kepolisian kepada masyarakat secara terpadu, antara lain dalam bentuk:
                <ul>
                <li>Laporan Polisi (LP)</li>
                <li>Surat Tanda Terima Laporan Polisi (STTLP)</li>
                <li>Surat Pemberitahuan Perkembangan Hasil Penyidikan (SP2HP)</li>
                <li>Surat Keterangan Tanda Lapor Kehilangan (SKTLK)</li>
                <li>Surat Keterangan Catatan Kepolisian (SKCK)</li>
                <li>Surat Tanda Terima Pemberitahuan (STTP)</li>
                <li>Surat Keterangan Lapor Diri (SKLD)</li>
                <li>Surat Izin Keramaian dan Kegiatan Masyarakat Lainnya</li>
                <li>Surat Izin Mengemudi (SIM)</li>
                <li>Surat Tanda Nomor Kendaraan Bermotor (STNK)</li>
                </ul>
            </li>
            <li>Pengkoordinasian dan pemberian bantuan serta pertolongan, antara lain:
                <ul>
                <li>Tindakan Pertama di Tempat Kejadian Perkara (TPTKP)</li>
                <li>Turjawali</li>
                <li>Pengamanan kegiatan masyarakat dan instansi pemerintah</li>
                </ul>
            </li>
            <li>Pelayanan masyarakat melalui surat dan alat komunikasi, antara lain:
                <ul>
                <li>Telepon</li>
                <li>Pesan singkat</li>
                <li>Faksimile</li>
                <li>Jejaring sosial (internet)</li>
                </ul>
            </li>
            <li>Pelayanan informasi yang berkaitan dengan kepentingan masyarakat sesuai dengan ketentuan peraturan perundang-undangan</li>
            <li>Penyiapan registrasi pelaporan, penyusunan dan penyampaian laporan harian kepada Kapolres melalui Bagops</li>
            </ul>

            </div>
        </div>
    </div>
</div>
@endsection