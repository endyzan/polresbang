@extends('layouts.apps')

@section('title', 'Bagian Sumda')
@section('meta_description', 'Bag Sumda Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="header-user">
        <h1>BAGIAN SUMDA</h1>
    </div>
    <div class="content-user-gabung">
        <img src="{{ asset('assets/img/user/bagsumda/logo.jpg') }}" alt="">
        <div class="divider"></div>
            <div class="text-user">
            <p>Tugas Bagian Sumber daya (Bag sumda) bertugas melaksanakan pembinaan administrasi personel, sarana dan prasarana, pelatihan fungsi, pelayanan kesehatan, bantuan dan penerapan hukum.</p>

            <div class="photo-container">
                <img src="{{ asset('assets/img/user/bagsumda/laporankeuangan.jpg') }}" alt="Photo" class="photo" id="photo">
            </div>
        
            <div class="fullscreen-overlay" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="{{ asset('assets/img/user/bagsumda/laporankeuangan.jpg') }}" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
        </div>
    </div>
</div>

@endsection
