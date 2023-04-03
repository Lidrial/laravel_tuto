<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[WelcomeController::class, 'index'] )->name('home');

Route::get('{n?}', function($n = 1) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-5]');

Route::get('test', function () {
    return response('un test', 206)->header('Content-Type', 'text/plain');
});

Route::get('article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+');

Route::get('facture/{n}', function($n){
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('users/action', function() {
    return view('users.action');
})->name('action');

Route::get('action', function(){
    return redirect()->route('action');
});
