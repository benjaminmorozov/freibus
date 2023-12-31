<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;

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
// Route::view('/about', 'basePages.about'); // <- bypass need for postcontroller, thus we can just use
// Route::view('/termsconditions', 'basePages.termsconditions'); // <- bypass need for postcontroller, thus we can just use
// Route::view('/privacypolicy', 'basePages.privacypolicy');

Route::view('/zbernydvor', 'zbernydvor');
Route::view('/about', 'about');
Route::get('/tours', [TourController::class, 'index'])->name('tours');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('view');
Route::get('/page/{page:slug}', [PageController::class, 'show'])->name('pageview');
Route::get('/tours/{tour:slug}', [TourController::class, 'show'])->name('tourview');
Route::get('search', [TourController::class, 'search'])->name('search');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
//Route::view('/reviews', 'reviews');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// payment
Route::post('/order', [PaymentController::class, 'post'])->name('stripe.post');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/tours/{tour:slug}/order', [OrderController::class, 'index'])->name('order');
    Route::post('/tours/{tour:slug}/order', [OrderController::class, 'store'])->name('order.create');;
});

// breeze auth stuff

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
