@extends('layouts.apps')

@section('title', $satfung->nama_satfung)
@section('meta_description', $satfung->nama_satfung)

@section('content')
<div class="container">
    <div class="container-sambutankap">
        <div class="header-user">
            <h1>{{ $satfung->nama_satfung }}</h1>
        </div>
        <div class="content-user-gabung">
            <img src="{{ asset('storage/' . $satfung->logo_satfung) }}" width="200" class="foto"><br>
            {!! $satfung->deskripsi_satfung !!}

            <div class="divider"></div>
                <div class="text-user">
                    <div class="photo-container">
                        <img src="{{ asset('storage/' . $satfung->foto) }}" alt="Photo" class="photo" id="photo">
                    </div>
                    <div class="fullscreen-overlay" id="fullscreenOverlay"> 
                        <button class="close-button" id="closeButton">&times;</button>
                        <img src="{{ asset('storage/' . $satfung->foto) }}" alt="Fullscreen Photo" id="fullscreenPhoto">
                    </div>
                    <!-- <a href="{{ route('admin.polsek.index') }}" class="btn btn-primary">Kembali</a> -->
                </div>
        </div>
    </div>

</div>
@endsection