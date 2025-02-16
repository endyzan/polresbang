@extends('layouts.apps')

@section('title', $polsek->nama_polsek)
@section('meta_description', $polsek->nama_polsek)

@section('content')
<div class="container">
    <div class="container-sambutankap">
        <div class="header-user">
            <h1>{{ $polsek->nama_polsek }}</h1>
        </div>
        <div class="content-user-polsek">
            <img src="{{ asset('storage/' . $polsek->foto_kapolsek) }}" width="200" class="foto"><br>

            <div class="divider"></div>
                <div class="text-user">
                    <div class="photo-container">
                        <img src="{{ asset('storage/' . $polsek->foto_bangunan) }}" alt="Photo" class="photo" id="photo">
                    </div>
                    <div class="fullscreen-overlay" id="fullscreenOverlay"> 
                        <button class="close-button" id="closeButton">&times;</button>
                        <img src="{{ asset('storage/' . $polsek->foto_bangunan) }}" alt="Fullscreen Photo" id="fullscreenPhoto">
                    </div>
                    {!! $polsek->deskripsi_kapolsek !!}
                    <!-- <a href="{{ route('admin.polsek.index') }}" class="btn btn-primary">Kembali</a> -->
                </div>
        </div>
    </div>

</div>
@endsection