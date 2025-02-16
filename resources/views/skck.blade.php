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


    <div class="main-content">
        <div class="header-user">
            <h1>Surat Keterangan Catatan Kepolisian (SKCK)</h1>
        </div>
        <div class="content-user-gabung">
            <div class="divider"></div>
            <div class="text-user">
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
            </div>
        </div>
    </div>
</div>
@endsection