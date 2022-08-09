<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerspectivesController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\DonationController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/perspectives', [PerspectivesController::class, 'index'])->name('perspectives');

Route::get('/about/our-story', [AboutController::class, 'index'])->name('about');
Route::get('/about/burkina-faso', [AboutController::class, 'aboutBurkina'])->name('about.burkina');
Route::get('/donate', [DonationController::class, 'index'])->name('donation');
Route::post('/donate', [DonationController::class, 'index'])->name('donation');

Route::get('/communities', function() {
    return view('communities');
})->name('communities');

Route::get('/programs', [ProgramsController::class, "index"])->name('programs');
Route::get('/programs/{id}', [ProgramsController::class, "getProgram"])->name('get-program');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'getArticle'])->name('blog.details');

Route::get('/contact', [ContactController::class, "contact"])->name('contact');
Route::post('/contact', [ContactController::class, "contact"])->name('contact');

Route::get('*', function() {
    return view('404');
})->name('404');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
