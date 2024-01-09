<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [Controller::class, 'index'])->name('/');

Route::get('/menfess', [Controller::class, 'menfess'])->name('menfess');
Route::get('/kritik', [Controller::class, 'kritik'])->name('kritik');
Route::get('login', [Controller::class, 'login'])->name('login');
Route::post('/auth', [Controller::class, 'auth'])->name('auth');
Route::middleware(['CekRole:admin', 'web'])->group(function () {
    Route::get('/admin', function () {
        return view('dummy');
    })->name('admin');
});