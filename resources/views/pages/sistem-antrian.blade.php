@extends('layouts.apps')

@section('title', 'SKCK')
@section('meta_description', 'SKCK Polres Bangkalan')

@section('content')


<div class="container-sambutankap">
    <div class="sidebar">
        <ul>
            <li>
                <a 
                    href="{{ route('pelayanan.sim') }}" 
                    class="{{ request()->routeIs('pelayanan.sim') ? 'active' : '' }}"
                >
                    Pelayanan SIM
                </a>
            </li>
            <li>
                <a 
                    href="{{ route('sarana.prasarana') }}" 
                    class="{{ request()->routeIs('sarana.prasarana') ? 'active' : '' }}"
                >
                    Sarana dan Prasarana
                </a>
            </li>
            <li>
                <a 
                    href="{{ route('sistem.antrian') }}" 
                    class="{{ request()->routeIs('sistem.antrian') ? 'active' : '' }}"
                >
                    Sistem Antrian
                </a>
            </li>
        </ul>
    </div>


    <div class="container-gambar">
        <div class="main-content">
            <div class="header-user">
                <h1>Gambar Utama</h1>
            </div>
            <div class="content-gambar" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 16px;">
                <div class="photo-container">
                    <img src="{{ asset('assets/img/layanan/sistem-antrian.jpg') }}" alt="Gambar 1" class="photo" style="width: 100%; height: auto; border-radius: 12px;">
                </div>
                <div class="photo-container">
                    <img src="{{ asset('assets/img/layanan/sistem-antrian2.jpg') }}" alt="Gambar 2" class="photo" style="width: 100%; height: auto; border-radius: 12px;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection