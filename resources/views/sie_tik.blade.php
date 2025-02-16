@extends('layouts.apps')

@section('title', 'Sie TIK')
@section('meta_description', 'Tugas Sie TIK Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="header-user">
        <h1>SITIPOL</h1>
    </div>
    <div class="content-user-gabung">
        <div class="divider"></div>
            <div class="text-user">
            <p>Seksi Teknologi Informasi Polri yang selanjutnya disingkat Sitipol adalah unsur pendukung di bidang pelayanan teknologi dan informasi Polri pada tingkat Polres yang berada di bawah Kapolres. Sitipol bertugas menyelenggarakan pelayanan teknologi komunikasi dan informasi, meliputi kegiatan komunikasi kepolisian, pengumpulan dan pengolahan serta penyajian data, termasuk informasi kriminal dan pelayanan multimedia.</p>
            <p>Dalam melaksanakan tugas, Sitipol menyelenggarakan fungsi:</p>
            <ol>
                <li>pemeliharaan jaringan komunikasi kepolisian dan data, serta pelayanan telekomunikasi;</li>
                <li>penyelenggaraan sistem informasi kriminal, yang meliputi penyiapan dan penyajian data dan statistik kriminal; dan</li>
                <li>penyelenggaraan koordinasi dalam penggunaan teknologi komunikasi dan informasi dengan satuan fungsi di lingkungan Polres.</li>
            </ol>
            <p>Sitipol dalam melaksanakan tugas dibantu oleh:</p>
            <ol>
                <li>Subseksi Teknologi Komunikasi (Subsitekkom), yang bertugas melaksanakan pemeliharaan jaringan komunikasi kepolisian dan data, serta pelayanan telekomunikasi; dan</li>
                <li>Subseksi Teknologi Informasi (Subsitekinfo), yang bertugas menyelenggarakan sistem informasi meliputi pengumpulan dan pengolahan data Polres serta sistem informasi kriminal.</li>
            </ol>
                <h3>PENYERAPAN ANGGARAN</h3>
                <div class="photo-container">
                <img src="{{ asset('assets/img/user/SIPENGAWAS/ANGGARAN.jpg') }}" alt="Photo" class="photo" id="photo">
            </div>
            <div class="fullscreen-overlay-satintelkam" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="{{ asset('assets/img/user/SIPENGAWAS/ANGGARAN.jpg') }}" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
    
        </div>
    </div>
</div>

@endsection
