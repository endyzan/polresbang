<!-- Navbar Atas -->
<nav class="navbar navbar-dark bg-dark py-2">
    <div class="container d-flex justify-content-between">
        <!-- Ikon Media Sosial -->
        <div>
            <a href="#" target="_blank" class="text-white me-3">
                <i class="fab fa-instagram fa-lg"></i>
            </a>
            <a href="https://wa.me/6281234567890" target="_blank" class="text-white me-3">
                <i class="fab fa-whatsapp fa-lg"></i>
            </a>
            <a href="#" target="_blank" class="text-white">
                <i class="fab fa-twitter fa-lg"></i>
            </a>
        </div>

        <!-- Call Center -->
        <div>
            <a href="tel:110" class="text-white">
                <i class="fas fa-phone-alt fa-lg"></i> 110 (Call Center)
            </a>
        </div>
    </div>
</nav>

<!-- Navbar Utama -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('assets/img/logos/logo_polri.png') }}" alt="..." />
        </a>
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('assets/img/logos/logo_polres.png') }}" alt="..." />
        </a>
        <a class="navbar-brand" href="{{ route('index') }}">POLRES BANGKALAN</a>
        <!-- (button) navbar pada tampilan mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PROFILE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a class="dropdown-item" href="{{ route('sambutan') }}">Sambutan Kapolres</a></li>
                        <li><a class="dropdown-item" href="{{ route('lambang') }}">Lambang</a></li>
                        <li><a class="dropdown-item" href="{{ route('visi_misi') }}">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('struktur_organisasi') }}">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SATFUNG
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                        <li><a class="dropdown-item" href="{{ route('sat_binmas') }}">Sat Binmas</a></li>
                        <li><a class="dropdown-item" href="{{ route('bag_perencanaan') }}">Bagian Perencanaan</a></li>
                        <li><a class="dropdown-item" href="{{ route('bag_sumda') }}">Bagian Sumda</a></li>
                        <li><a class="dropdown-item" href="{{ route('bag_operasi') }}">Bagian Operasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('sat_intelkam') }}">Sat Intelkam</a></li>
                        <li><a class="dropdown-item" href="{{ route('sat_lantas') }}">Sat Lantas</a></li>
                        <li><a class="dropdown-item" href="{{ route('sat_narkoba') }}">Sat Narkoba</a></li>
                        <li><a class="dropdown-item" href="{{ route('sat_reskrim') }}">Sat Reskrim</a></li>
                        <li><a class="dropdown-item" href="{{ route('sat_sabhara') }}">Sat Sabhara</a></li>
                        <li><a class="dropdown-item" href="{{ route('sat_tahti') }}">Sat Tahti</a></li>
                        <li><a class="dropdown-item" href="{{ route('si_keuangan') }}">Si Keuangan</a></li>
                        <li><a class="dropdown-item" href="{{ route('si_pengawas') }}">Si Pengawas</a></li>
                        <li><a class="dropdown-item" href="{{ route('si_propam') }}">Si Propam</a></li>
                        <li><a class="dropdown-item" href="{{ route('sie_tik') }}">SIE TIK</a></li>
                        <li><a class="dropdown-item" href="{{ route('sie_umum') }}">SIE Umum</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="layananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LAYANAN
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="layananDropdown">
                        <li><a class="dropdown-item" href="{{ route('sim') }}">SIM</a></li>
                        <li><a class="dropdown-item" href="{{ route('spkt') }}">SPKT</a></li>
                        <li><a class="dropdown-item" href="{{ route('skck') }}">SKCK</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="hubungiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        HUBUNGI
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="hubungiDropdown">
                        <li><a class="dropdown-item" href="{{ route('call_center') }}">Call Center</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="fiturDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        POLSEK
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="fiturDropdown">
                        @foreach(\App\Models\Polsek::all() as $polsek)
                            <li><a class="dropdown-item" href="{{ route('polsek.show', $polsek->id) }}">{{ $polsek->nama_polsek }}</a></li>
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Tambahkan FontAwesome jika belum ada -->
<script src="https://kit.fontawesome.com/YOUR_FA_KIT.js" crossorigin="anonymous"></script>
