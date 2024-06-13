<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\QuizController;
use App\Models\Favorite;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/quiz/news', function () {
    return view('quiz/template');
});

Route::get('/quiz/divertissement', [QuizController::class, "divertissement"]);

Route::get('/quiz/apprentissage', [QuizController::class, "apprentissage"]);

Route::get('/quiz/home', function () {
    return view('quiz/home');
});

Route::get('/quiz/host', function () {
    return view('quiz/host');
});

Route::get('/quiz/game', function () {
    return view('quiz/game');
});


Route::post('/favorite/add', [FavoriteController::class, "store"]);
Route::post('/favorite/remove', [FavoriteController::class, "remove"]);

Route::get('/dashboard', function () {
    return view('dashboard', ["favorites" => (new FavoriteController())->show()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
