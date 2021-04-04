<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

//Route::get('/', function () {
//    return view('welcome');});

Route::get('/test', [\App\Http\Controllers\Api\v1\WorksController::class, 'index']);

Route::get('/lang/{lang}', function ($lang, Request $request) {
    if (!in_array($lang, ['en', 'ru']))
        return redirect('/');

    $request->session()->put('lang', $lang);
    return redirect('/');
});

Route::get('/{any}', function () {
    return view('index');
})->where('any', '.*');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
//
//Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('index');
