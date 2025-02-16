@extends('layouts.app')

@section('title', $polsek->nama_polsek)
@section('meta_description', $polsek->nama_polsek)

@section('content')
<div class="container-sambutankap">
    <div class="header-user">
        <h1>{{ $polsek->nama_polsek }}</h1>
    </div>
    <div class="content-user-gabung">
        <img src="{{ Storage::url($polsek->foto_kapolsek) }}" alt="kapolri">

        <div class="divider"></div>
        <div class="text-user">
            <p>{{ $polsek->deskripsi_kapolsek }}</p>
            <div class="photo-container">
                <img src="{{ asset('storage/' . $polsek->foto_bangunan) }}" alt="Photo" class="photo" id="photo">
            </div>
            <div class="fullscreen-overlay" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="{{ asset('storage/' . $polsek->foto_bangunan) }}" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
        </div>
    </div>
</div>
@endsection