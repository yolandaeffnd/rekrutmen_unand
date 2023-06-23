<?php

use App\Http\Controllers\DeveloperFeature\{RoleController, ArtisanController};
use App\Http\Controllers\{FormasiController, RekrutmenCon, WebPageCon, JenisformasiController, NotifController};
use App\Http\Controllers\Articles\{ArticleCategoriCon, ArticleCon};
use App\Http\Controllers\GudangData\{AjaxCon};
use App\Http\Controllers\Personal\{AkunController, ProfileController};
use App\Http\Controllers\ManageUser\{UserController};
use App\Http\Controllers\Pelamar\{BerandaController, PendaftaranController};
use App\Models\Article;
use App\Notifications\{Profile};
use Illuminate\Support\Facades\{Auth, Route};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//hapus public tes 2
//Auth::routes(); //posisi paling atas agar default route bawaan ketimpa yg dibawah

//Kirim Notif by Email




Route::get('/', [WebPageCon::class, 'index'])->name('webpage-index');
Route::get('/info-lowongan', [WebPageCon::class, 'infoLowonganShow'])->name('webpage-info-lowongan');
Route::get('/articles/{name}', [WebPageCon::class, 'articleShow'])->name('webpage-article-detail');

Route::get('/registered', function () {
    return view('webpage.registered');
});

Route::group(['prefix' => 'apps'], function () {
    Route::group(['prefix' => 'notify'], function () {
        Route::get('/myProfile', function () {
            // $user = User::first();
            $user = Auth::user();
            $user->notify(new Profile());
            return redirect()->back()->with("success", "Success, your data profile was sent to your e-Mail: " . $user->email . ". PLease check your e-mail.");
        })->name('notify-myprofile');
    });

    Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login-form');
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegisterForm'])->name('register');
    Route::get('/close', [App\Http\Controllers\Auth\RegisterController::class, 'closeRegisterForm'])->name('close');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');

    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    Auth::routes(['verify' => true]);


    //ADMINISTRTOR------------------------------------------------------------------------------------------------------
    Route::group(['middleware' => ['auth', 'verified', 'role:superadmin|admin']], function () {
        Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/personal/profile', [ProfileController::class, 'index'])->name('profile');

        Route::get('/personal/akun/edit-password', [AkunController::class, 'editPassword'])->name('edit-password');
        Route::put('/personal/akun/edit-password', [AkunController::class, 'editPassword'])->name('edit-password-update');

        //Superadmin Role Task
        //Route::resource('/su/master/gedung', GedungController::class)->middleware('can:master-gedung');


        //ROLE TASK
        Route::resource('/manage/user', UserController::class)->middleware('can:manage-user');
        Route::resource('/master/formasi', FormasiController::class)->middleware('can:master-formasi');
        //kelola data jenis formasi
        Route::get('/master/jenisformasi', [JenisformasiController::class, 'index'])->name('jenisformasi.index');
        Route::get('/master/jenisformasi-create', [JenisformasiController::class, 'create'])->name('jenisformasi-create');
        Route::post('/master/jenisformasi-store', [JenisformasiController::class, 'store'])->name('jenisformasi-store');
        Route::get('/master/jenisformasi-edit/{id}', [JenisformasiController::class, 'edit'])->name('jenisformasi-edit');
        Route::put('/master/jenisformasi-update/{id}', [JenisformasiController::class, 'update'])->name('jenisformasi-update');
        Route::delete('/master/jenisformasi-destroy/{id}', [JenisformasiController::class, 'destroy'])->name('jenisformasi-destroy');
        //kelola pelamar
        Route::resource('/rekrutmen/pelamar', RekrutmenCon::class)->middleware('can:rekrutmen-pelamar');
        Route::get('/rekrutmen/datatable/pelamar', [RekrutmenCon::class, 'index_datatable'])->name('pelamar.datatable');
        Route::post('/rekrutmen/zip/pelamar', [RekrutmenCon::class, 'zipCreate'])->name('compress-files');
        //kelola artikel/berita/pengumuman
        Route::resource('/article', ArticleCon::class)->middleware('can:article');
        Route::resource('/article-kategori', ArticleCategoriCon::class)->middleware('can:article');
        //kelola data notifkasi
        Route::get('/notifikasi', [NotifController::class, 'index'])->name('notifikasi.index');
        
    });

    //LEVEL DEVELOPER TASK

    Route::group(['middleware' => ['checklevel:developer']], function () {
        Route::resource('/developer/manage/role', RoleController::class);
        Route::get('/debug/{id}', [RekrutmenCon::class, 'debug'])->name('debug');
    });








    //PELAMAR--------------------------------------------------------------------------------------------------

    Route::group(['prefix' => 'registration'], function () {
        Route::group(['middleware' => ['auth', 'verified']], function () {
            Route::get('/beranda', [BerandaController::class, 'index'])->name('dashboard-pelamar');
            Route::get('/statuspelamar', [BerandaController::class, 'statuspelamar'])->name('status-pelamar');
            Route::group(['middleware' => ['registrasi.check']], function () {
                //route reg start
                Route::post('/reg', [PendaftaranController::class, 'regStart'])->name('reg-start');

                //route get data ajax
                Route::get('/ajax/kota', [AjaxCon::class, 'kota'])->name('ajax-kota');

                //route reg biodata
                Route::get('/biodata', [PendaftaranController::class, 'biodataShow'])->name('reg-biodata');
                Route::post('/biodataStore', [PendaftaranController::class, 'biodataStore'])->name('reg-biodata-store');

                Route::get('/formasi', [PendaftaranController::class, 'formasiShow'])->name('reg-formasi');
                Route::post('/formasi', [PendaftaranController::class, 'formasiStore'])->name('reg-formasi-store');

                Route::get('/upload', [PendaftaranController::class, 'uploadBerkasShow'])->name('reg-upload-berkas');
                Route::post('/upload', [PendaftaranController::class, 'uploadBerkasStore'])->name('reg-upload-berkas-store');
                Route::delete('/upload', [PendaftaranController::class, 'uploadBerkasDestroy'])->name('reg-upload-berkas-delete');
                Route::post('/upload/next', [PendaftaranController::class, 'uploadBerkasNext'])->name('reg-upload-berkas-next');

                Route::get('/resume', [PendaftaranController::class, 'resumeShow'])->name('reg-resume');
                Route::post('/resume', [PendaftaranController::class, 'resumeStore'])->name('reg-resume-store');
            });

            Route::post('/cetak-kartu-peserta', [PendaftaranController::class, 'cetakKartuPeserta'])->name('reg-cetak-kartu-peserta');
        });
    });
});

// Run Artisan (Carefully)
Route::group(['prefix' => 'developer'], function () {
    Route::get('/migrate', [ArtisanController::class, 'migrate']);
    Route::get('/cache/clear', [ArtisanController::class, 'clearCache']);
    Route::get('/migrate/fresh', [ArtisanController::class, 'migrateFresh']);
    Route::get('/db/seed', [ArtisanController::class, 'dbSeed']);
    Route::get('/storage/link', [ArtisanController::class, 'storageLink']);
});
