@extends('layouts.apps')

@section('title', 'Si Pengawas')
@section('meta_description', 'Tugas Si Pengawas Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="header-user">
        <h1>SI PENGAWAS</h1>
    </div>
    <div class="content-user-gabung">
        <div class="divider"></div>
            <div class="text-user">
            <p>Siwas adalah unsur pengawas dan pembantu pimpinan Polres yang berada dibawah Kapolres.</p>
            <p>Siwas bertugas menyelenggarakan monitoring dan pengawasan umum baik secara rutin maupun insidentil terhadap pelaksanaan kebijakan pimpinan oleh semua unit kerja khususnya dalam proses perencanaan, pelaksanaan dan pencapaian rencana kerja, termauk bidang material, fasilitas dan jasa serta memberikan saran tindak terhadap penyimpangan yang ditemukan;</p>
            <p>Siwas dipimpin oleh Kasiwas yang bertanggung jawab kepada Kapolres dan dalam pelaksanaan tugasnya sehari-hari dibawah kendali Wakapolres;</p>
            <p>Siwas dalam melakasanakan tugasnya dibantu oleh :</p>
            <ul>
                <li>Kepala sub seksi Bidang Operasional disingkat (Kasub sibidops)</li>
                <li>Kepala sub seksi Bidang Pembinaan disingkat (Kasub sibin)</li>
            </ul>
                <h3>PENYERAPAN ANGGARAN</h3>
                <div class="photo-container">
                <img src="{{ asset('assets/img/user/SIPENGAWAS/ANGGARAN.jpg') }}" alt="Photo" class="photo" id="photo">
            </div>
            <div class="fullscreen-overlay-satintelkam" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="{{ asset('assets/img/user/SIPENGAWAS/ANGGARAN.jpg') }}" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
    
        </div>
    </div>
</div>

@endsection
