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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
})->name('home');
=======
Route::get('/', [PesanController::class, 'home'])->name('home');
>>>>>>> 1adfcd559174a9c1d4be2fa5a0407fe61948111b
Route::get('/g', function () {
    return view('message');
});

Route::get('/messages/fetch/{offset}/{status}', [PesanController::class, 'fetchMessages']);

Route::get('/menfess', [Controller::class, 'menfess'])->name('menfess');
Route::get('/kritik', [Controller::class, 'kritik'])->name('kritik');
Route::get('login', [Controller::class, 'login'])->name('login');
Route::post('/auth', [Controller::class, 'auth'])->name('auth');
Route::middleware(['CekRole:admin', 'web'])->group(function () {
    Route::get('/admin', function () {
        return view('dummy');
    })->name('admin');
});

Route::middleware(['CekRole:superadmin', 'web'])->group(function () {
});
