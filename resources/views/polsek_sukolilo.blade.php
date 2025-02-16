@extends('layouts.app')

@section('title', 'Polsek Sukolilo')
@section('meta_description', 'Bag Sumda Polres Bangkalan')

@section('content')

<div class="container-sambutankap">
    <div class="header-user">
        <h1>Polsek Sukolilo</h1>
    </div>
    <div class="content-user-gabung">
        <div class="divider"></div>
            <div class="text-user">
            <p>Tugas Bagian Sumber daya (Bag sumda) bertugas melaksanakan pembinaan administrasi personel, sarana dan prasarana, pelatihan fungsi, pelayanan kesehatan, bantuan dan penerapan hukum.</p>
            <p>Fungsi :</p>
            <p>a) pembinaan dan administrasi personel, meliputi :</p>
            <ul>
                <li>pembinaan karier personel Polres antara lain Usulan Kenaikan Pangkat (UKP), Kenaikan Gaji Berkala (KGB), mutasi, pengangkatan, dan pemberhentian dalam jabatan yang menjadi lingkup kewenangan Polres;</li>
                <li>perawatan personel antara lain pembinaan kesejahteraan rohani, mental, jasmani, moril dan materiil, mengusulkan tanda kehormatan;</li>
                <li>pembinaan psikologi personel, antara lain kesehatan jiwa personel dan pemeriksaan psikologi bagi pemegang senjata api;</li>
                <li>pelatihan fungsi, antara lain fungsi teknis kepolisian, keterpaduan antar fungsi teknis kepolisian dan fungsi pendukung; dan</li>
                <li>pelayanan kesehatan bagi anggota Polri dan PNS Polri beserta keluarganya;</li>
            </ul>
            <p>b) pembinaan administrasi sarana dan prasarana (sarpras), antara lain:</p>
            <ul>
                <li>menginventarisir, merawat, dan menyalurkan perbekalan umum, peralatan khusus, senjata api, dan angkutan;</li>
                <li>melaksanakan Sistem Informasi Manajemen Akuntansi Barang Milik Negara (SIMAK BMN); dan</li>
                <li>memelihara fasilitas jasa dan konstruksi, listrik, air, dan telepon;</li>
            </ul>  
            <p>c) pelayanan bantuan dan penerapan hukum, antara lain:</p>
            <ul>
                <li>memberikan pelayanan bantuan hukum kepada institusi dan personel Polres beserta keluarganya;</li>
                <li>memberikan pendapat dan saran hukum;</li>
                <li>melaksanakan penyuluhan hukum kepada personel Polres beserta keluarga dan masyarakat;</li>
                <li>menganalisis sistem dan metoda terkait dengan ketentuan peraturan perundang-undangan di lingkungan Polres; dan</li>
                <li>berperan serta dalam pembinaan hukum yang berkaitan dengan penyusunan Peraturan Daerah.</li>
            </ul>
            <p>Kegiatan:</p>
            <p>a) Paurmin</p>
            <ul>
                <li>membuat laporan rutin dan insidentil, pengelolaan admnistrasi fungsi , Rencana kegiatan, penetapan dan kontrak kinerja fungsi; dan</li>
                <li>melaksanakan tugas dinas Kepolisian lainnya</li>
            </ul>
            <p>b) Subbagian Personel (Subbagpers),</p>
            <ul>
                <li>melaksanakan pembinaan karier personel, perawatan personel, psikologi personel, pelatihan fungsi, dan pelayanan kesehatan personel Polri di lingkungan Polres; dan</li>
                <li>melaksanakan tugas dinas Kepolisian lainnya</li>
            </ul>
            <p>c) Subbagian Sarana dan Prasarana (Subbagsarpras),</p>
            <ul>
                <li>melaksanakan inventarisasi, SIMAK BMN, penyaluran perbekalan umum, perawatan alat khusus, senjata api, amunisi dan angkutan, serta memelihara fasilitas jasa dan konstruksi, listrik, air, dan telepon; dan</li>
                <li>melaksanakan tugas dinas Kepolisian lainnya.</li>
            </ul>
            <p>d) Subbagian Hukum (Subbagkum),</p>
            <ul>
                <li>melaksanakan pelayanan bantuan hukum, memberikan pendapat dan saran hukum, penyuluhan hukum, dan pembinaan hukum serta analisis sistem dan metoda terkait dengan ketentuan peraturan perundang-undangan di lingkungan Polres; dan</li>
                <li>melaksanakan tugas Kepolisian lainnya.</li>
            </ul>
            <div class="photo-container">
                <img src="{{ asset('assets/img/polsek/polsek/kamal.jpg') }}" alt="Photo" class="photo" id="photo">
            </div>
        
            <div class="fullscreen-overlay" id="fullscreenOverlay">
                <button class="close-button" id="closeButton">&times;</button>
                <img src="{{ asset('assets/img/polsek/polsek/kamal.jpg') }}" alt="Fullscreen Photo" id="fullscreenPhoto">
            </div>
        </div>
    </div>
</div>

@endsection
