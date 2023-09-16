<?php

use App\Models\Carousel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('logout',  function() {
    Auth::logout();
    return redirect('/');
});
// Route::view('/about', 'about'); <- no carousel data
Route::get('/about', function () { // <- bypass need for postcontroller, thus we can just use
    $carousels = Carousel::all()->sortBy('order');
    return view('about', compact('carousels'));
});
Route::view('/vseozmluvpod', 'vseozmluvpod');
Route::get('/{post:slug}', [PostController::class, 'show'])->name('view');
Route::view('/api/posts/get', 'api');
