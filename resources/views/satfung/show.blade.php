@extends('layouts.app')

@section('title', $satfung->nama_satfung)
@section('meta_description', $satfung->nama_satfung)

@section('content')
<div class="container-sambutankap">
    <div class="header-user">
        <h1>{{ $satfung->nama_satfung }}</h1>
    </div>
    <div class="content-user-gabung">
        <img src="{{ Storage::url($satfung->logo_satfung) }}" alt="kapolri">

        <div class="divider"></div>
        <div class="text-user">
            <p>{{ $satfung->deskripsi_satfung }}</p>
            <div class="photo-container">
                <img src="{{ asset('storage/' . $satfung->foto) }}" alt="Photo" class="photo" id="photo">
            </div>
            <div class="fullscreen-overlay" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="{{ asset('storage/' . $satfung->foto) }}" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
        </div>
    </div>
</div>
@endsection