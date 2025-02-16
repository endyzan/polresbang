@extends('layouts.apps')

@section('title', 'Bagian Operasi')
@section('meta_description', 'Tugas Bagian Operasi Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="header-user">
        <h1>SATUAN TAHTI</h1>
    </div>
    <div class="content-user-gabung">
        <img src="{{ asset('assets/img/user/sattahti/logo.jpg') }}" alt="">
        <div class="divider"></div>
        <div class="text-user">
            <p>Tugas Pokok dan Fungsi Sat Tahti</p>
            <ol>
                <li>Sat Tahti adalah unsur pelaksana tugas pokok Polres yang berada dibawah Kapolres.</li>
                <li>Sat Tahti bertugas menyelenggarakan pelayanan perawatan dan kesehatan tahanan, termasuk pembinaan jasmani dan rohani, serta menerima, menyimpan dan memelihara barang bukti, yang didukung dengan dengan penyelenggaraan administrasi umum yang terkait sesuai bidang tugasnya.</li>
                <li>Sat Tahti dipimpin Kasat Tahti yang bertanggung jawab kepada Kapolres dan dalam pelaksanaan tugasnya sehari-hari dibawah kendali Wakapolres.</li>
                <li>Kasat Tahti dalam melaksanakan tugas kewajibannya dibantu oleh :</li>
            </ol>
            <ul>
                <li>Kepala Urusan Administrasi dan Ketatausahaan disingkat (Kaur Mintu) yang bertugas menyelenggarakan kegiatan administrasi dan ketatausahaan umum terkait dengan tahanan dan barang bukti.</li>
                <li>Kepala Unit Perawatan Tahanan disingkat (Kanit Wattah) yang bertugas melakukan pembinaan dan pemberian petunjuk tata tertib penahanan, pelayanan kesehatan, perawatan, pembinaan jasmani dan rohani tahanan, pengelolaan barang titipan milik tahanan.</li>
                <li>Kepala Unit Barang Bukti disingkat (Kanit Barbuk) yang bertugas melaksanakan pengamanan dan pengelolaan barang bukti beserta administrasinya.</li>  
            </ul>
        </div>
    </div>
</div>

@endsection
