@extends('layouts.apps')

@section('title', 'Struktur Organisasi')
@section('meta_description', 'Struktur Organisasi Polres Bangkalan')

@section('content')
<div class="container-sambutankap">
    <div class="header-user">
        <h1>Struktur Organisasi</h1>
    </div>
    <div class="photo-container">
        <img src="{{ asset('assets/img/logos/STRUKTUR-ORGANISASI-POLRES.png') }}" alt="Photo" class="photo" id="photo">
    </div>

    <div class="fullscreen-overlay-satintelkam" id="fullscreenOverlay">
        <button class="close-button" id="closeButton">&times;</button>
        <img src="{{ asset('assets/img/logos/STRUKTUR-ORGANISASI-POLRES.png') }}" alt="Fullscreen Photo" id="fullscreenPhoto">
    </div>
</div>
@endsection
