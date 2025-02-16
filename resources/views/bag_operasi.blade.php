@extends('layouts.apps')

@section('title', 'Bagian Operasi')
@section('meta_description', 'Tugas Bagian Operasi Polres Bangkalan')

@section('content')
<div class="container-sambutankap">
    <div class="header-user">
        <h1>BAGIAN OPERASI</h1>
    </div>
    <div class="content-user-gabung">
        <img src="{{ asset('assets/img/user/bagops/logo.png') }}" alt="Logo Bagian Operasi Polres Bangkalan">
        <div class="divider"></div>
        <div class="text-user">
            <p>Tugas Bagops bertugas merencanakan dan mengendalikan administrasi operasi kepolisian, pengamanan kegiatan masyarakat dan/atau instansi pemerintah, menyajikan informasi dan dokumentasi kegiatan Polres serta mengendalikan pengamanan markas.</p>
            <p>Fungsi :</p>
            <ol>
                <li>Penyiapan administrasi dan pelaksanaan operasi kepolisian;</li>
                <li>Perencanaan pelaksanaan pelatihan praoperasi, termasuk kerja sama dan pelatihan dalam rangka operasi kepolisian;</li>
                <li>Perencanaan dan pengendalian operasi kepolisian, termasuk pengumpulan, pengolahan dan penyajian serta pelaporan data operasi dan pengamanan kegiatan masyarakat dan/atau instansi pemerintah;</li>
                <li>Pembinaan manajemen operasional meliputi rencana operasi, perintah pelaksanaan operasi, pengendalian dan administrasi operasi kepolisian serta tindakan kontinjensi;</li>
                <li>Pengkoordinasian dan pengendalian pelaksanaan pengamanan markas di lingkungan Polres; dan</li>
                <li>Pengelolaan informasi dan dokumentasi kegiatan Polres.
            </ol>
            <p>Kegiatan:</p>
            <p>a) Subbagian Pembinaan Operasi (Subbagbinops), yang bertugas:</p>
            <ul>
                <li>Menyusun perencanaan operasi dan pelatihan praoperasi serta menyelenggarakan administrasi operasi;</li>
                <li>Melaksanakan koordinasi antar fungsi dan instansi/lembaga terkait dalam rangka pelaksanaan pengamanan kegiatan masyarakat dan atau pemerintah; dan</li>
                <li>Membuat laporan rutin dan insidentil, pengelolaan admnistrasi fungsi, Rencana kegiatan, penetapan dan kontrak kinerja fungsi dan melaksanakan tugas dinas Kepolisian lainnya.</li>
            </ul>
            <p>b) Subbagian Pengendalian Operasi (Subbagdalops), yang bertugas:</p>
            <ul>
                <li>Melaksanakan pengendalian operasi dan pengamanan kepolisian;</li>
                <li>Mengumpulkan, mengolah dan menyajikan data dan pelaporan operasi kepolisian serta kegiatan pengamanan;</li>
                <li>Mengendalikan pelaksanaan pengamanan markas di lingkungan Polres dan</li>
                <li>Melaksanakan tugas dinas Kepolisian lainnya.</li>
            </ul>
            <p>c) Subbagian Hubungan Masyarakat (Subbaghumas), yang bertugas:</p>
            <ul>
                <li>Mengumpulkan dan mengolah data, serta menyajikan informasi dan dokumentasi kegiatan kepolisian yang berkaitan dengan penyampaian berita di lingkungan Polres;</li>
                <li>Meliput, memantau, memproduksi, dan mendokumentasikan informasi yang berkaitan dengan tugas Polres; dan</li>
                <li>Melaksanakan tugas dinas Kepolisian lainnya.</li>
            </ul>
            <h3>Penyerapan Anggaran</h3>
            <div class="photo-container">
                <img src="/assets/img/user/bagops/anggaran.jpg" alt="Photo" class="photo" id="photo">
            </div>
        
            <div class="fullscreen-overlay-bagops" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="/assets/img/user/bagops/anggaran.jpg" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
        </div>
    </div>
</div>
@endsection
