<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

Route::get('/', function () {
    return view('welcome');
});

// Home Route 
Route::get('/home', function () {
    return View('/home'); 
})->name('home');

// Home Route 
Route::get('/test', function () {
    return View('test'); 
});

//Services Routes => To show all services
Route::get('/services', function (){
    return view('services.index');
})->name('services');
Route::get('/services/wordpress_development', function (){
    return view('services/wordpress_development');
})->name('services.wordpress');
Route::get('/services/shopify_development', function (){
    return view('services/shopify_development');
})->name('services.shopify');
Route::get('/services/laravel_development', function (){
    return view('services/Laravel_development');
})->name('services.laravel');
Route::get('services/tiktok', function (){
    return view('/services/tiktok');
})->name('services.tiktok');
Route::get('/services/facebook-adverstisement', function (){
    return view('services/facebook-adverstisement');
})->name('services.facebook');
Route::get('/services/google-advertisement', function (){
    return view('services/google-advertisement');
})->name('services.google');

//Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{category}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/single-blog/{id}/{title}', [BlogController::class, 'singleblog'])->name('blog.single-blog');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//PortFolio
Route::get('/portfolio', function (){
    return view('portfolio');
})->name('portfolio');

//contact-us
Route::get('/contact-us', function (){
    return view('contact-us');
})->name('contact-us');

// Post
Route::get('/post', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('post.store');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->middleware(['auth', 'verified'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->middleware(['auth', 'verified'])->name('post.update');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->middleware(['auth', 'verified'])->name('post.destroy');

//End Post

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';