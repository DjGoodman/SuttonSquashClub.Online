<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\contact;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
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
Route::get('/padel', [WelcomeController::class, 'padel']);
Route::get('/pickelball', [WelcomeController::class, 'pickelball']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/findus', [AboutController::class, 'findus']);
Route::get('/calendar', [AboutController::class, 'calendar']);
Route::get('/about/calendar', [AboutController::class, 'calendar']);
Route::get('/social', [SocialController::class, 'index']);
Route::get('/social/boxleague', [SocialController::class, 'boxleague']);
Route::get('/boxleague', [SocialController::class, 'boxleague']);
Route::get('/boxleagueFAQ', [SocialController::class, 'boxleagueFAQ']);
Route::get('/membership/join', [MembershipController::class, 'index']);
Route::get('/membership', [MembershipController::class, 'index']);
Route::get('/join', [MembershipController::class, 'index']);
Route::get('/juniors', [MembershipController::class, 'juniors']);
Route::get('/membership/juniors', [MembershipController::class, 'juniors']);

require __DIR__.'/auth.php';
