@extends('layouts.apps')

@section('title', 'Sie Umum')
@section('meta_description', 'Tugas Sie Umum Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="header-user">
        <h1>SIE UMUM</h1>
    </div>
    <div class="content-user-gabung">
        <div class="divider"></div>
            <div class="text-user">
            <p>Sium adalah unsur pembantu pimpinan Polres yang berada dibawah Kapolres. </p>
            <p>Sium bertugas menyelenggarakan terjaminnya pelayanan administrasi dan kelancaran tugas-tugas pimpinan yang mencakup fungsi kesekretariatan, kearsipan dan amdiministrasi umum lainnya serta pelayanan markas dilingkungan Polres. </p>
            <p>Sium dipimpin oleh Kasium yang bertanggung jawab kepada Kapolres dan dalam pelaksanaan tugasnya sehari-hari dibawah kendali Wakapolres</p>
            <p>Kasium dalam melakasanakan tugasnya dibantu oleh :</p>
            <ol>
                <li>Kepala Sub Seksi Administrasi dan Ketatausahaan disingkat (Kasub simintu) </li>
                <li>Kepala Sub Seksi Pelayanan Markas disingkat (Kasub siyanma)</li>
            </ol>
            <h3>PENYERAPAN ANGGARAN</h3>
            <div class="photo-container">
                <img src="{{ asset('assets/img/user/satlantas/anggaran.jpg') }}" alt="Photo" class="photo" id="photo">
            </div>
        
            <div class="fullscreen-overlay-satintelkam" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="{{ asset('assets/img/user/satlantas/anggaran.jpg') }}" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
    
        </div>
    </div>
</div>

@endsection
