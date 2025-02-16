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
        </ul>
    </div>


    <div class="main-content">
        <div class="header-user">
            <h1>Surat Izin Mengemudi (SIM)</h1>
        </div>
        <div class="content-user-gabung">
            <div class="divider"></div>
            <div class="text-user">
            <p><strong>I. PERSYARATAN</strong></p>
            <p><strong>Usia :</strong></p>
            <ul>
            <li>SIM A pemohon usia 17 tahun</li>
            <li>SIM B I dan B II pemohon 20 tahun</li>
            <li>SIM C dan D pemohon 16 tahun</li>
            <li>SIM Umum pemohon usia 21 tahun</li>
            </ul>
            <p><strong>Pas Photo</strong></p>
            <p>Foto copy KTP</p>

            <p><strong>II. TATA CARA</strong></p>
            <ul>
            <li>Mengisi formulir permohonan disertai foto copy KTP dan pas photo</li>
            <li>Mengikuti ujian Teori</li>
            <li>Bila lulus ujian teori, maka berhak untuk mengikuti ujian praktek sesuai dengan jenis SIM yang dikehendaki</li>
            <li>Bila lulus dalam ujian teori dan praktek, maka pemohon akan dipanggil untuk pembuatan SIM</li>
            </ul>

            <p><strong>III. PERSYARATAN UNTUK SIM UMUM</strong></p>
            <ul>
            <li>Memiliki SIM</li>
            <ul>
                <li>Golongan A untuk A Umum</li>
                <li>Golongan A Umum untuk B I dan B I Umum</li>
                <li>Golongan B I Umum untuk B II Umum</li>
            </ul>
            <li>Pengalaman mengemudi minimal 12 bulan pada golongan SIM yang dimiliki</li>
            <li>KTP / jati diri</li>
            <li>Lulus ujian teori dan Praktek I dan Praktek II</li>
            <li>Diwajibkan mengikuti klinik mengemudi</li>
            </ul>

            <p><strong>IV. SIM YANG DINYATAKAN SUDAH TIDAK BERLAKU</strong></p>
            <ul>
            <li>Habis masa berlakunya 5 tahun</li>
            <li>SIM rusak</li>
            <li>Digunakan orang lain</li>
            <li>Diperoleh dengan cara tidak sah</li>
            <li>Data yang ada pada SIM dirubah</li>
            </ul>

            <p><strong>V. ADMINISTRASI SIM</strong></p>
            <p>Sesuai PP No. 50 tahun 2010 tentang PNBP pada Polri untuk:</p>
            <ul>
            <li>Biaya SIM A Baru sebesar Rp.120.000,-</li>
            <li>Biaya SIM A Perpanjangan sebesar Rp.80.000,-</li>
            <li>Biaya SIM B I Baru sebesar Rp.120.000,-</li>
            <li>Biaya SIM B I Perpanjangan sebesar Rp.80.000,-</li>
            <li>Biaya SIM B II Baru sebesar Rp.120.000,-</li>
            <li>Biaya SIM B II Perpanjangan sebesar Rp.80.000,-</li>
            <li>Biaya SIM C Baru sebesar Rp.100.000,-</li>
            <li>Biaya SIM C Perpanjangan sebesar Rp.75.000,-</li>
            <li>Biaya SKUKP sebesar Rp.50.000,-</li>
            </ul>

            <p><strong>VI. PROSEDUR PENERBITAN SURAT IJIN MENGEMUDI BARU</strong></p>
            <p>(PASAL 38 PERKAP SIM)</p>
            <p><strong>Persyaratan PEMOHON SIM:</strong></p>
            <ul>
            <li>KTP yang sah</li>
            <li>Fotocopy KTP</li>
            <li>Surat Keterangan Dokter sehat jasmani</li>
            <li>Surat keterangan sehat rohani (Psikologi)</li>
            <li>BIT SIM dilengkapi hasil uji simulator</li>
            </ul>

            <p><strong>Tahap-tahap:</strong></p>
            <ul>
            <li>Melakukan pembayaran bisa melalui ATM, mini ATM, Teller bank</li>
            <li>Melaksanakan registrasi/pendaftaran dengan:
                <ul>
                <li>Mengisi formulir</li>
                <li>Melampirkan persyaratan</li>
                <li>10 sidik jari</li>
                <li>Tanda tangan</li>
                <li>Foto peserta uji</li>
                </ul>
            </li>
            <li>Melakukan uji teori avis</li>
            <li>Jika Lulus: melanjutkan uji keterampilan</li>
            <li>Jika tidak lulus: mengulang tenggang 7 hari, 14 hari, setelah 30 hari</li>
            <li>Uji keterampilan pengemudi</li>
            <li>Jika Lulus: melanjutkan uji praktek</li>
            <li>Jika tidak lulus: mengulang tenggang 7 hari, 14 hari, setelah 30 hari</li>
            <li>Uji praktek:
                <ul>
                <li>Jika Lulus: produksi (cetak SIM)</li>
                <li>Jika tidak lulus: mengulang tenggang 7 hari, 14 hari, setelah 30 hari</li>
                </ul>
            </li>
            <li>Produksi (cetak SIM) untuk diserahkan pemohon dan sebagai arsip dokumen</li>
            </ul>

            
            </div>
        </div>
    </div>
</div>
@endsection