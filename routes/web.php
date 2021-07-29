<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
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

Route::group([
    'middleware' => 'verified'
], function () {
    Route::get('/', [TeamController::class, 'index']);
    Route::get('/teams/{team}', [TeamController::class, 'show']);
    Route::get('/players/{player}', [PlayerController::class, 'show']);

    Route::post('/teams/{team}/comments', [CommentController::class, 'store'])->name('team.comment');


    Route::get('/news', [NewsController::class, 'index']);
    Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');;
    Route::get('/news/team/{teamName}', [NewsController::class, 'getNewsByTeam'])->name('newsForTeam');
});

Route::group([
    'middleware' => 'auth'
], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/email/verify', [AuthController::class, 'getEmailVerificationNotice'])->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmail'])->middleware(['signed'])->name('verification.verify');
});

Route::group([
    'middleware' => 'guest'
], function () {
    Route::get('/register', [AuthController::class, 'getRegisterForm']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'getLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
