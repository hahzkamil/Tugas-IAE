<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Standings;
use App\Http\Controllers\Teams;

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
});

Route::get('/Klasemen', [Standings::class, 'index'])->name('homepage');
Route::get('/Teams', [Teams::class, 'tampil'])->name('teams');

