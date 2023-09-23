<?php

use App\Http\Controllers\ProfileController;
use App\Models\Carousel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('logout',  function() {
    Auth::logout();
    return redirect('/');
});
// Route::view('/about', 'about'); <- no carousel data
Route::get('/about', function () { // <- bypass need for postcontroller, thus we can just use
    $carousels = Carousel::all()->sortBy('order');
    return view('about', compact('carousels'));
});
Route::get('/termsconditions', function () { // <- bypass need for postcontroller, thus we can just use
    $carousels = Carousel::all()->sortBy('order');
    return view('termsconditions', compact('carousels'));
});
Route::view('/zbernydvor', 'zbernydvor');
Route::get('/tours', [TourController::class, 'index'])->name('tours');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('view');
Route::get('/tours/{tour:slug}', [TourController::class, 'show'])->name('tourview');
Route::get('search', [TourController::class, 'search'])->name('search');




// breeze auth stuff

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
