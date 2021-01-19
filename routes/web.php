<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\OpinionController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('opinions/comment/', [OpinionController::class, 'newComment'])->name('opinions.comment');
Route::Resource('opinions', OpinionController::class);
Route::resource('/references', ReferenceController::class);
Route::resource('/themes', ThemeController::class);
Route::resource('/topics', TopicController::class);

require __DIR__.'/auth.php';

Route::fallback(function() {
    return view("not_found");
});
