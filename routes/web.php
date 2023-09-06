<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\contact;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/test', function () {
    return view('test');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/calendar', [AboutController::class, 'calendar']);
Route::get('/about/calendar', [AboutController::class, 'calendar']);
Route::get('/social', [SocialController::class, 'index']);
Route::get('/social/boxleague', [SocialController::class, 'boxleague']);
Route::get('/boxleague', [SocialController::class, 'boxleague']);
Route::get('/membership/join', [MembershipController::class, 'index']);
Route::get('/membership', [MembershipController::class, 'index']);
Route::get('/join', [MembershipController::class, 'index']);
Route::get('/juniors', [MembershipController::class, 'juniors']);
Route::get('/membership/juniors', [MembershipController::class, 'juniors']);
