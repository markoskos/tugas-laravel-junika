<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

//dalam folder AkunController
route::get('/akun', [AkunController::class, 'index'])->name('index-akun');
route::get('/akun/create', [AkunController::class, 'form'])->name('akun-create');

// dalam folder AccountController
route::get('/account',        [AccountController::class, 'index']);
route::get('/account/create', [AccountController::class, 'create']);
route::get('/account/show',   [AccountController::class, 'show']);

// dalam folder TemplateController
route::get('/template/blank', [TemplateController::class, 'master']);

// dalam folder Table
route::get('/table', [TableController::class, 'table'])->name('createAkun');
route::get('/data', [TableController::class, 'data'])->name('data');

// route::get('/student', [SiswaController::class, 'index'])->name('studentIndex');
// route::get('/student/create', [SiswaController::class, 'create'])->name('studentCreate');
// route::post('/student', [SiswaController::class, 'store'])->name('studentStore');
// route::get('/student/{id}', [SiswaController::class, 'show'])->name('studentShow');
// route::get('/student/{id}/edit', [SiswaController::class, 'edit'])->name('studentEdit');
// route::put('/student/{id}', [SiswaController::class, 'update'])->name('studentUpdate');
// route::delete('/student/{id}', [SiswaController::class, 'destroy'])->name('studentDestroy');

// route::controller(SiswaController::class)->group(function () {
//     route::get('/student',  'index')->name('studentIndex');
//     route::get('/student', 'create')->name('studentCreate');
//     route::post('/student', 'store')->name('studentStore');
//     route::get('/student/{id}', 'show')->name('studentShow');
//     route::get('/student/{id}/edit',  'edit')->name('studentEdit');
//     route::put('/student/{id}',  'update')->name('studentUpdate');
//     route::delete('/student/{id}',  'destroy')->name('studentDestroy');
// });

route::resource('student', SiswaController::class);
route::resource('kelas', KelasController::class);