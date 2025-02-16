@extends('layouts.app')

@section('title', 'Polsek Socha')
@section('meta_description', 'Polsek Socha Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="header-user">
        <h1>Polsek Socha</h1>
    </div>
    <div class="content-user-gabung">
        <div class="divider"></div>
            <div class="text-user">
            <p>Polsek Bengkayang terletak di Kecamatan Bengkayang, Kabupaten Bengkayang, Wilayah Kecamatan Bengkayang Sebelah Utara Berbatasan Dengan Kecamatan Lumar, Sebelah Selatan Berbatasan Dengan Kecamatan Suti Semarang, Sebelah Timur Berbatasan Dengan Kecamatan Teriak Dan Sebelah Barat Berbatasan Dengan Kecamatan Sungai Betung.</p>

            <p>Jumlah Penduduk Kecamatan Bengkayang = 18.919 Jiwa, Menurut Jenis Kelamin .Laki-Laki = 10 . 309 Jiwa. Perempuan = 8.610 Jiwa ,Menurut Suku  = Dayak 65,5 %, Melayu 13 %, Cina 8,8  %, Jawa 2,3 %, Lain-Lain 10,5 %,Menurut Agama = Islam 36 %, Khatlik 50 %, Protestan 10 %, Budha 3 %, Lain-Lain 1 %</p>

            <p>Secara Keseluruhan Luas Wilayah Kecamatan Bengkayang Luas Daerah Kecamatan Bengkayang +16.746 Km²  Yang Meliputi Daratan Hutan , Perkerbunan, Sawah/Ladang, Pemukiman , Perkarangan Dan Lain-Lain Dan Terbagi Menjadi 4 Desa Dan 2 Kelurahan Yaitu : Desa Bhakti Mulya, Desa Tirta Kencana, Desa Setia Budi, Desa Bani Amas, Kelurahan Sebalo Dan Kelurahan Bumi Emas. Wilayah Kecamatan Bengkayang Beriklim Tropis Dengan Suhu 22,9 “ S/D 31 “ Dn Musim Hujan Pada Bulan September S.D Desember</p>

            <p>Pada Tahun 1979 Didirikan Mapolsek Bengkayang Yang Terletak Di Kelurahan Sebalo Kecamatan Bengkayang Kabupaten Bengkayang.</p>
            
            <div class="photo-container">
                <img src="{{ asset('assets/img/polsek/polsek/kamal.jpg') }}" alt="Photo" class="photo" id="photo">
            </div>
        
            <div class="fullscreen-overlay" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="{{ asset('assets/img/polsek/polsek/kamal.jpg') }}" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
        </div>
    </div>
</div>

@endsection
