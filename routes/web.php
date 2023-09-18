<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactFormController;
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

//Contact Route
Route::get('/contact-us', [ContactFormController::class, 'index'])->name('contact.index');
Route::post('/contact-us', [ContactFormController::class, 'store'])->name('contact.store'); 

//Privacy Policy
Route::get('/privacy-policy', function (){
    return view('privacy-policy');
})->name('privacy-policy');

//Services Routes => To show all services
Route::get('/services', function (){
    return view('services.index');
})->name('services');
//WordPress
Route::get('/services/wordpress-development', function (){
    return view('services/wordpress-development');
})->name('services.wordpress');
//Shopify
Route::get('/services/shopify-development', function (){
    return view('services/shopify-development');
})->name('services.shopify');
//Laravel
Route::get('/services/laravel-development', function (){
    return view('services/Laravel-development');
})->name('services.laravel');
//Social Media
Route::get('services/social-advertisment', function (){
    return view('/services/social-advertisement');
})->name('services.social-advertisement');
//Reactjs
Route::get('/services/reactjs-development', function (){
    return view('services/reactjs-development');
})->name('services.reactjs');
//Social Media
Route::get('/services/e-commerce', function (){
    return view('services/e-commerce');
})->name('services.e-commerce');

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