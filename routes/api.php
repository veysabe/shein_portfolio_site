<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\WorksController;
use App\Http\Controllers\Api\v1\SkillsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);

Route::resource('works', WorksController::class);

Route::resource('skills', SkillsController::class);

Route::post('/works/filter', [WorksController::class, 'filterBySkills']);

Route::post('/login', [\App\Http\Controllers\Api\v1\LoginController::class, 'login']);

Route::get('getlocale', function (Request $request) {
   return session('lang', 'en');
});
