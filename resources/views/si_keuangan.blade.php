@extends('layouts.apps')

@section('title', 'Si Keuangan')
@section('meta_description', 'Tugas Si Keuangan Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="header-user">
        <h1>SIE KEUANGAN</h1>
    </div>
    <div class="content-user-gabung">
        <div class="divider"></div>
            <div class="text-user">
            <ol>
                
                <li>Sikeu (Seksi Keuangan) adalah unsur pengawas dan pembantu pimpinan yang berada di bawah Kapolres Bengkayang.
                <li>Kasikeu bertugas melaksanakan pelayanan fungsi keuangan yang meliputi pembiayaan, pengendalian, akutansi dan verifikasi serta pelaporan pertanggungjawaban keuangan.</li>
                <li>Sikeu dipimpin oleh Kepala Seksi Keuangan yang bertanggung jawab kepada Kapolres Bengkayang dan dalam pelaksanaan tugas sehari-hari dibawah kendali Waka Polres Bengkayang.</li>
                <li>Kasikeu dalam melaksanakan tugas dibantu oleh :</li>
            </ol>
            <ul>
                <li>Subsimin</li>
                <li>Subsigaji</li>
                <li>Subsiakunver</li>
                <li>Subsidata</li>
            </ul>
            <h3>PENYERAPAN ANGGARAN</h3>
            <div class="photo-container">
                <img src="{{ asset('assets/img/user/satnarkoba/anggaran.jpg')" alt="Photo" class="photo" id="photo">
            </div>
            <div class="fullscreen-overlay-satintelkam" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="/assets/img/user/satnarkoba/anggaran.jpg" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
        </div>
    </div>
</div>

@endsection
