<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('site.home');
})->name('site.home');

Route::get('/noticia', function () { return view('site.noticia');
})->name('site.noticia');

Route::get('/contato', function () { return view('site.contato');
})->name('site.contato');

Route::post('/contato',[ContatoController::class, 'store'])->name('site.contato');



