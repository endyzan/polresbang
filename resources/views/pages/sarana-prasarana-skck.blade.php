@extends('layouts.apps')

@section('title', 'SKCK')
@section('meta_description', 'SKCK Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="sidebar">
        <ul>
            <li>
                <a 
                    href="{{ route('pelayanan.skck') }}" 
                    class="{{ request()->routeIs('pelayanan.skck') ? 'active' : '' }}"
                >
                    Pelayanan SKCK
                </a>
            </li>
            <li>
                <a 
                    href="{{ route('sarana.prasarana.skck') }}" 
                    class="{{ request()->routeIs('sarana.prasarana.skck') ? 'active' : '' }}"
                >
                    Sarana dan Prasarana
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
                @foreach ($skcksarana as $index => $skck)
                    <div class="photo-container-pages">
                        <img src="{{ asset('storage/' . $skck->foto_skcksarana) }}" 
                            alt="Gambar {{ $index + 1 }}" 
                            class="photo-pages" 
                            style="width: 100%; height: auto; border-radius: 12px;" 
                            onclick="openFullscreen('{{ asset('storage/' . $skck->foto_skcksarana) }}')">
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
