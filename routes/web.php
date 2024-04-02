<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/home', function () {
    return view('Dashboard');
})->name('home');
Route::get('/SendMessage', function () {
    return view('message');
});
Route::get('/menfess', function () {
    return view('menfess');
});

Route::get('/admin', function () {
    return view('Dashboard');
})->name('admin');

Route::post('/kirimmenfess', [PesanController::class, 'kirimMenfess'])->name('kirimmenfess');
Route::post('/kirimkritik', [PesanController::class, 'kirimkritik'])->name('kirimkritik');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/messages/fetch/{offset}/{status}', [PesanController::class, 'fetchMessages']);

Route::get('/kritik', [Controller::class, 'kritik'])->name('kritik');
Route::get('login', [Controller::class, 'login'])->name('login');
Route::post('/auth', [Controller::class, 'auth'])->name('auth');
Route::middleware(['CekRole:admin', 'web'])->group(function () {
});

Route::middleware(['CekRole:superadmin', 'web'])->group(function () {
    Route::get('/new', function () {
        return view('newAdmin');
    });
    Route::get('/admin', function () {
        return view('Dashboard');
    })->name('admin');

    Route::get('/logout', function () {
        session()->flush();
        return redirect('/');
    });

    Route::post('/newAdmin', [Controller::class, 'newAdmin'])->name('newAdmin');
});
