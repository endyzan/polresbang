<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PolsekController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SpktKegiatanController;
use App\Http\Controllers\Admin\SkcksaranaController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

// route untuk admin
// Grup Route untuk Pengelolaan Profil (Memerlukan Autentikasi)
Route::middleware('auth')->group(function () {
    // Halaman Edit Profil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    // Update Profil
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Hapus Profil
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard (Halaman utama setelah login)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Grup Route untuk Admin (Memerlukan Autentikasi)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // CRUD Polsek (Resource Controller)
    Route::resource('polsek', PolsekController::class);

    // Route khusus untuk halaman tambah Polsek (Create)
    Route::get('/polsek/create', [PolsekController::class, 'create'])->name('polsek.create');
});

// Route untuk menampilkan detail Polsek di frontend
Route::get('/polsek/{id}', [PolsekController::class, 'show'])->name('polsek.show');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('layanan', App\Http\Controllers\Admin\LayananController::class)->except(['edit', 'update', 'show']);
});

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('spktkegiatan', App\Http\Controllers\Admin\SpktkegiatanController::class)->except(['edit', 'update', 'show']);
});

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('skcksarana', App\Http\Controllers\Admin\SkcksaranaController::class)->except(['edit', 'update', 'show']);
});

Route::get('/sarana-prasarana', [SkcksaranaController::class, 'index'])->name('sarana.prasarana');









// route untuk user/frontend
// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('index');

// Profil Routes
Route::get('/sambutan', [HomeController::class, 'sambutan'])->name('sambutan');
Route::get('/lambang', [HomeController::class, 'lambang'])->name('lambang');
Route::get('/visi_misi', [HomeController::class, 'visiMisi'])->name('visi_misi');
Route::get('/struktur_organisasi', [HomeController::class, 'strukturOrganisasi'])->name('struktur_organisasi');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');

// Satfung Routes
Route::get('/sat_binmas', [HomeController::class, 'satBinmas'])->name('sat_binmas');
Route::get('/bag_perencanaan', [HomeController::class, 'bagPerencanaan'])->name('bag_perencanaan');
Route::get('/bag_sumda', [HomeController::class, 'bagSumda'])->name('bag_sumda');
Route::get('/bag_operasi', [HomeController::class, 'bagOperasi'])->name('bag_operasi');
Route::get('/sat_intelkam', [HomeController::class, 'satIntelkam'])->name('sat_intelkam');
Route::get('/sat_lantas', [HomeController::class, 'satLantas'])->name('sat_lantas');
Route::get('/sat_narkoba', [HomeController::class, 'satNarkoba'])->name('sat_narkoba');
Route::get('/sat_reskrim', [HomeController::class, 'satReskrim'])->name('sat_reskrim');
Route::get('/sat_sabhara', [HomeController::class, 'satSabahara'])->name('sat_sabhara');
Route::get('/sat_tahti', [HomeController::class, 'satTahti'])->name('sat_tahti');
Route::get('/si_keuangan', [HomeController::class, 'siKeuangan'])->name('si_keuangan');
Route::get('/si_pengawas', [HomeController::class, 'siPengawas'])->name('si_pengawas');
Route::get('/si_propam', [HomeController::class, 'siPropam'])->name('si_propam');
Route::get('/sie_tik', [HomeController::class, 'sieTik'])->name('sie_tik');
Route::get('/sie_umum', [HomeController::class, 'sieUmum'])->name('sie_umum');

// Layanan Routes
Route::get('/sim', [HomeController::class, 'sim'])->name('sim');
Route::get('/spkt', [HomeController::class, 'spkt'])->name('spkt');
Route::get('/skck', [HomeController::class, 'skck'])->name('skck');

// Hubungi Routes
Route::get('/call_center', [HomeController::class, 'callCenter'])->name('call_center');

// Polsek Routes
Route::get('/polsek_kamal', [HomeController::class, 'polsekKamal'])->name('polsek_kamal');
Route::get('/polsek_socha', [HomeController::class, 'polsekSocha'])->name('polsek_socha');
Route::get('/polsek_sukolilo', [HomeController::class, 'polsekSukolilo'])->name('polsek_sukolilo');
Route::get('/polsek_burneh', [HomeController::class, 'polsekBurneh'])->name('polsek_burneh');
Route::get('/polsek_tanah_merah', [HomeController::class, 'polsekTanahMerah'])->name('polsek_tanah_merah');
Route::get('/polsek_kwanyar', [HomeController::class, 'polsekKwanyar'])->name('polsek_kwanyar');
Route::get('/polsek_galis', [HomeController::class, 'polsekGalis'])->name('polsek_galis');
Route::get('/polsek_tragah', [HomeController::class, 'polsekTragah'])->name('polsek_tragah');
Route::get('/polsek_blega', [HomeController::class, 'polsekBlega'])->name('polsek_blega');
Route::get('/polsek_modung', [HomeController::class, 'polsekModung'])->name('polsek_modung');
Route::get('/polsek_konang', [HomeController::class, 'polsekKonang'])->name('polsek_konang');
Route::get('/polsek_arosbaya', [HomeController::class, 'polsekArosbaya'])->name('polsek_arosbaya');
Route::get('/polsek_klampis', [HomeController::class, 'polsekKlampis'])->name('polsek_klampis');
Route::get('/polsek_geger', [HomeController::class, 'polsekGeger'])->name('polsek_geger');
Route::get('/polsek_tanjung_bumi', [HomeController::class, 'polsekTanjungBumi'])->name('polsek_tanjung_bumi');
Route::get('/polsek_sepulu', [HomeController::class, 'polsekSepulu'])->name('polsek_sepulu');
Route::get('/polsek_kokop', [HomeController::class, 'polsekKokop'])->name('polsek_kokop');

// isi sim routes
Route::get('/pelayanan-sim', [PageController::class, 'pelayananSim'])->name('pelayanan.sim');
Route::get('/sarana-prasarana', [PageController::class, 'saranaPrasarana'])->name('sarana.prasarana');
Route::get('/sistem-antrian', [PageController::class, 'sistemAntrian'])->name('sistem.antrian');

// isi skck routes
Route::get('/pelayanan-skck', [PageController::class, 'pelayananSkck'])->name('pelayanan.skck');
Route::get('/sarana-prasarana-skck', [PageController::class, 'saranaPrasaranaSkck'])->name('sarana.prasarana.skck');
Route::get('/sistem-antrian-skck', [PageController::class, 'sistemAntrianSkck'])->name('sistem.antrian.skck');

// isi spkt routes
Route::get('/pelayanan-spkt', [PageController::class, 'pelayananSpkt'])->name('pelayanan.spkt');
Route::get('/sarana-prasarana-spkt', [PageController::class, 'saranaPrasaranaSpkt'])->name('sarana.prasarana.spkt');
Route::get('/sistem-antrian-spkt', [PageController::class, 'sistemAntrianSpkt'])->name('sistem.antrian.spkt');


Route::post('/send-message', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    $data = $request->all();
    Mail::send(new ContactMail($data));

    return back()->with('success', 'Pesan berhasil dikirim!');
});


require __DIR__.'/auth.php';