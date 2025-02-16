@extends('layouts.apps')

@section('title', 'POLRES BANGKALAN')
@section('meta_description', 'Polres Bangkalan')

@section('content')

    <!-- Masthead-->
    <header class="masthead">
      <div class="container">
        <div class="masthead-subheading">Website Resmi</div>
        <div class="masthead-heading">
          <span class="highlight">Kepolisian Resor Bangkalan</span>
        </div>
        <div class="masthead-description text-uppercase">MELINDUNGI</div>
        <div class="masthead-description text-uppercase">MENGAYOMI DAN</div>
        <div class="masthead-description text-uppercase">MELAYANI MASYARAKAT</div>
      </div>
    </header>


    <div class="py-5">
      <div class="container">
        <!-- Section background wrapper -->
        <div class="p-4">
          <div class="row d-flex justify-content align-items-center">
            <div class="col-md-3 col-sm-6 my-3 text-center">
              <a href="https://penerimaan.polri.go.id/">
                <img
                  class="img-fluid img-brand d-block mx-auto"
                  src="{{ asset('assets/Client/penerimaan_polri (1).png') }}"
                  alt="..."
                  style="filter: invert(100%) brightness(200%);"
                />
              </a>
              <p class="mt-2">PENERIMAAN POLRI</p>
            </div>
            <div class="col-md-3 col-sm-6 my-3 text-center">
              <a href="https://skck.polri.go.id/">
                <img
                  class="img-fluid img-brand d-block mx-auto"
                  src="{{ asset('assets/Client/icon-skck (1).png') }}"
                  alt="..."
                  style="filter: invert(100%) brightness(200%);"
                />
              </a>
              <p class="mt-2">SKCK ONLINE</p>
            </div>
            <div class="col-md-3 col-sm-6 my-3 text-center">
              <a href="https://korlantas.polri.go.id/category/sim-stnk-keliling/">
                <img
                  class="img-fluid img-brand d-block mx-auto"
                  src="{{ asset('assets/Client/icon-sim2 (1).png') }}"
                  alt="..."
                  style="filter: invert(100%) brightness(200%);"
                />
              </a>
              <p class="mt-2">LOKASI SIM KELILING</p>
            </div>
            <div class="col-md-3 col-sm-6 my-3 text-center">
              <a href="https://dumaspresisi.polri.go.id/">
                <img
                  class="img-fluid img-brand d-block mx-auto"
                  src="{{ asset('assets/Client/icon-humas (1).png') }}"
                  alt="..."
                  style="filter: invert(100%) brightness(200%);"
                />
              </a>
              <p class="mt-2">KELUHAN LAYANAN POLRI</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="page-section" id="portfolio">
      <div class="container">
        <div class="container-portfolio">
          <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
              <!-- Portfolio item 1-->
              <div class="portfolio-item">
                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="{{ asset('/assets/img/fitur/fiturpegaduan.jpg') }}" alt="..." />
                </a>
                <div class="portfolio-caption">
                  <div class="portfolio-caption-heading">Pengaduan Masyarakat</div>
                  <div class="portfolio-caption-subheading text-muted">Pengaduan Masyarakat</div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <!-- Portfolio item 2-->
              <div class="portfolio-item">
                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="{{ asset('/assets/img/fitur/fiturskck.jpeg') }}" alt="..." />
                </a>
                <div class="portfolio-caption">
                  <div class="portfolio-caption-heading">SKCK Online</div>
                  <div class="portfolio-caption-subheading text-muted">SKCK Online</div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <!-- Portfolio item 3-->
              <div class="portfolio-item">
                <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="{{ asset('/assets/img/fitur/fitur110.jpeg') }}" alt="..." />
                </a>
                <div class="portfolio-caption">
                  <div class="portfolio-caption-heading">Call Center 110</div>
                  <div class="portfolio-caption-subheading text-muted">Call Center 110</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <h3>Pengaduan Masyarakat</h3>
                  <img class="img-fluid d-block mx-auto" src="{{ asset('/assets/img/fitur/fiturpegaduan.jpg') }}" alt="..." />
                  <p>Aplikasi Pengaduan Masyarakat Terintegrasi merupakan bentuk penerapan pengawasan yang disampaikan oleh masyarakat, instansi pemerintah, atau pihak lain kepada Polri berupa sumbangan pikiran, saran, gagasan, atau keluhan/pengaduan yang bersifat membangun</p>
                  <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                    <i class="fas fa-xmark me-1"></i>
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h3>Surat Keterangan Catatan Kepolisian (SKCK)</h3>
                  <p>
                    Surat Keterangan Catatan Kepolisian (disingkat SKCK), sebelumnya dikenal sebagai Surat Keterangan Kelakuan Baik (disingkat SKKB) adalah surat keterangan yang diterbitkan oleh Polri yang berisikan catatan kejahatan seseorang. Dahulu, sewaktu bernama SKKB, surat ini hanya dapat diberikan yang tidak/belum pernah tercatat melakukan tindakan kejahatan hingga tanggal dikeluarkannya SKKB tersebut. <br>

                    Surat Keterangan Catatan Kepolisian atau SKCK adalah surat keterangan resmi yang diterbitkan oleh POLRI melalui fungsi Intelkam kepada seseorang pemohon/warga masyarakat untuk memenuhi permohonan dari yang bersangkutan atau suatu keperluan karena adanya ketentuan yang mempersyaratkan, berdasarkan hasil penelitian biodata dan catatan Kepolisian yang ada tentang orang tersebut. (Vide Peraturan Kapolri Nomor 18 Tahun 2014) <br>

                    SKCK memiliki masa berlaku sampai dengan 6 (enam) bulan sejak tanggal diterbitkan. Jika telah melewati masa berlaku dan bila dirasa perlu, SKCK dapat diperpanjang oleh yang bersangkutan. <br>

                    <strong>Tata cara mendapatkan SKCK</strong>  <br>
                    <strong> Membuat SKCK Baru </strong><br>
                    1. Membawa Surat Pengantar dari Kantor Kelurahan tempat domisili pemohon.<br>
                    2. Membawa fotocopy KTP/SIM sesuai dengan domisili yang tertera di surat pengantar dari Kantor Kelurahan.<br>
                    3. Membawa fotocopy Kartu Keluarga.<br>
                    4. Membawa fotocopy Akta Kelahiran/Kenal Lahir.<br>
                    5. Membawa Pas Foto terbaru dan berwarna ukuran 4×6 sebanyak 6 lembar.<br>
                    6. Mengisi Formulir Daftar Riwayat Hidup yang telah disediakan di kantor Polisi dengan jelas dan benar.<br>
                    7.Pengambilan Sidik Jari oleh petugas.<br>
                    <strong>  Memperpanjang masa berlaku SKCK </strong><br>
                    1. Membawa lembar SKCK lama yang asli/legalisir (maksimal telah habis masanya selama 1 tahun)<br>
                    2. Membawa fotocopy KTP/SIM.<br>
                    3. Membawa fotocopy Kartu Keluarga.<br>
                    4. Membawa fotocopy Akta Kelahiran/Kenal Lahir.<br>
                    5. Membawa Pas Foto terbaru yang berwarna ukuran 4×6 sebanyak 3 lembar.<br>
                    6. Mengisi formulir perpanjangan SKCK yang disediakan di kantor Polisi.<br>
                    <strong> Catatan : </strong><br>
                    1. Polsek tidak menerbitkan SKCK untuk keperluan :<br>
                    - Melamar / melengkapi administrasi PNS / CPNS.<br>
                    - Pembuatan visa / keperluan lain yang bersifat antar-negara.<br>
                    2. Polsek/Polres penerbit SKCK harus sesuai dengan alamat KTP/SIM pemohon.<br>
                    <strong> SKCK On-line </strong><br>
                    Dalam rangka pelayanan yang lebih baik, Polri telah menyediakan fasilitas pendaftaran permohonan SKCK secara online,dengan cara mengunggah (upload) dokumen yang dipersyaratkan serta mengisi form yang tersedia sesuai dengan urutan.<br>

                    Informasi lebih lanjut silahkan klik di :<br>
                    <a href="https://skck.polri.go.id/" target="_blank" class="button-link">Klik Disini</a><br>
                    
                    <strong> Biaya Pembuatan SKCK </strong> <br>
                    Dasar :<br>
                    1. UU RI No.20 Tahun 1997 tentang Penerimaan Bukan Pajak (PNBP)<br>
                    2. UU RI No.2 Tahun 2002 tentang Kepolisian Negara Republik Indonesia<br>
                    3. PP RI No.50 Tahun 2010 tentang Tarif atas Jenis Penerimaan Bukan Pajak yang berlaku pada instansi Polri<br>
                    4. Surat Telegram Kapolri Nomor : ST/1928/VI/2010 tanggal 23 Juni 2010 tentang Pemberlakuan PP RI No.50 Tahun 2010<br>
                    5. Peraturan Pemerintah Republik Indonesia Nomor 60 Tahun 2016 tentang Jenis dan Tarif atas Jenis Penerimaan Negara Bukan Pajak yang Berlaku pada Kepolisian Negara Republik Indonesia<br>
                    Biaya pembuatan SKCK adalah Rp. 30.000 (sepuluh ribu rupiah).<br>
                    Biaya tersebut disetorkan kepada petugas Polri ditempat.<br>
                  </p>
                  <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                    <i class="fas fa-xmark me-1"></i>
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h3>Call Center 110</h3>
                  <p>
                    Dalam rangka lebih cepat memberikan pelayanan kepada masyarakat, Polri telah bekerjasama dengan PT Telekomunikasi Indonesia (Telkom) untuk melaksanakan Layanan Contact Center 110.<br>

                    Kehadiran Layanan Contact Center 110 POLRI ditujukan untuk memenuhi harapan dan kebutuhan masyarakat terhadap terselenggaranya layanan keamanan publik. Dalam penyelenggaraan layanan contact center, telah disiapkan sebuah sistem aplikasi yang dapat memungkinkan pencatatan /perekaman setiap interaksi Polri & masyarakat, sehingga dimungkinkan pengendalian response kebutuhan masyarakat terhadap Polri.<br>

                    Sistem tersebut direncanakan akan membuka saluran via : telepon, sms, email, fax dan media sosial yang didukung oleh jaringan Telkom Group di Indonesia.<br>

                    Masyarakat yang nantinya melakukan panggilan ke nomor akses 110 akan langsung terhubung ke agen yang akan memberikan layanan berupa informasi, pelaporan (kecelakaan, bencana, kerusuhan, dll) dan pengaduan (penghinaan, ancaman, tindak kekerasan dll).<br>

                    Masyarakat bisa menggunakan layanan Contact Center 110 secara gratis. Namun demikian, Polri menghimbau agar layanan 110 ini tidak dibuat main-main, karena jika nantinya terjadi seperti itu, pihak Polri tentu akan melacak masyarakat yang membuat laporan bohong.<br>
                  </p>
                  <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/fitur/fitur110.jpeg') }}" alt="..." />
                  <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                    <i class="fas fa-xmark me-1"></i>
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="page-section" id="contact">
      <div class="container">
        <div class="contact-container">
          <div class="contact-box">
            <h3 class="contact-title">Kontak Resmi Polres</h3>
            <p><strong>Kepolisian Resor Bangkalan</strong> <br>
              Telpon: (031) 3095266 <br>
              Alamat: Jl. Soekarno Hatta No.1, Mlajah, Kec. Bangkalan,<br>
              Kabupaten Bangkalan, Jawa Timur 69116
            </p>
          </div>
          <div class="map-box">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.658177365277!2d112.73286569241368!3d-7.049393073607016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd805c7678fa8a5%3A0xab48a3cccf957359!2sPolres%20Bangkalan!5e0!3m2!1sid!2sid!4v1736490627211!5m2!1sid!2sid"
              width="100%"
              height="350"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </section>

@endsection
