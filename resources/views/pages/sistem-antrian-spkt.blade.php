@extends('layouts.apps')

@section('title', 'SKCK')
@section('meta_description', 'SKCK Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="sidebar">
        <ul>
            <li>
                <a 
                    href="{{ route('pelayanan.spkt') }}" 
                    class="{{ request()->routeIs('pelayanan.spkt') ? 'active' : '' }}"
                >
                    Pelayanan SPKT
                </a>
            </li>
            <li>
                <a 
                    href="{{ route('sarana.prasarana.spkt') }}" 
                    class="{{ request()->routeIs('sarana.prasarana.spkt') ? 'active' : '' }}"
                >
                    Persyaratan Dokumen Laporan Kehilangan
                </a>
            </li>
            <li>
                <a 
                    href="{{ route('sistem.antrian.spkt') }}" 
                    class="{{ request()->routeIs('sistem.antrian.spkt') ? 'active' : '' }}"
                >
                    DOKUMENTASI KEGIATAN SPKT
                </a>
            </li>
        </ul>
    </div>

    <div class="container-gambar-pages">
        <div class="main-content">
            <div class="header-user">
                <h1>Gambar Utama</h1>
            </div>
            <div class="content-gambar" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 16px;">
                @foreach ($spktkegiatan as $index => $spkt)
                    <div class="photo-container-pages">
                        <img src="{{ asset('storage/' . $spkt->foto_spktkegiatan) }}" 
                            alt="Gambar {{ $index + 1 }}" 
                            class="photo-pages" 
                            style="width: 100%; height: auto; border-radius: 12px;" 
                            onclick="openFullscreen('{{ asset('storage/' . $spkt->foto_spktkegiatan) }}')">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Fullscreen Overlay -->
<div class="fullscreen-overlay" id="fullscreenOverlay" style="display: none;">
    <button class="close-button" id="closeButton">&times;</button>
    <img src="" alt="Fullscreen Photo" id="fullscreenPhoto">
</div>

<!-- JavaScript -->
<script>
    function openFullscreen(imageSrc) {
        const overlay = document.getElementById("fullscreenOverlay");
        const fullscreenPhoto = document.getElementById("fullscreenPhoto");
        fullscreenPhoto.src = imageSrc;
        overlay.style.display = "flex";
    }

    document.getElementById("closeButton").addEventListener("click", function() {
        document.getElementById("fullscreenOverlay").style.display = "none";
    });
</script>

@endsection
