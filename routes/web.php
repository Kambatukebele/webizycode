<?php

use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\SubscriptionsController;

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

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

//Contact Route
Route::get('/contact-us', [ContactFormController::class, 'index'])->name('contact.index');
Route::get('/contact-us/show', [ContactFormController::class, 'show'])->middleware(['auth', 'verified'])->name('contact.show');
Route::get('/contact-us/view_contact/{id}', [ContactFormController::class, 'view_contact'])->middleware(['auth', 'verified'])->name('contact.view_contact');
Route::post('/contact-us', [ContactFormController::class, 'store'])->name('contact.store');
Route::delete('/contact-us/destroy/{id}', [ContactFormController::class, 'destroy'])->middleware(['auth', 'verified'])->name('contact.destroy');

//Youtube video post
Route::get('/youtube', [YoutubeController::class, 'index'])->middleware(['auth', 'verified'])->name('youtube.index');
Route::get('/youtube/create', [YoutubeController::class, 'create'])->middleware(['auth', 'verified'])->name('youtube.create');
Route::post('/youtube', [YoutubeController::class, 'store'])->middleware(['auth', 'verified'])->name('youtube.store');
Route::get('/youtube/edit/{id}', [YoutubeController::class, 'edit'])->middleware(['auth', 'verified'])->name('youtube.edit');
Route::put('/youtube/update/{id}', [YoutubeController::class, 'update'])->middleware(['auth', 'verified'])->name('youtube.update');
Route::get('/youtube/show', [YoutubeController::class, 'show'])->name('youtube.show');
Route::delete('/youtube/destroy/{id}', [YoutubeController::class, 'destroy'])->middleware(['auth', 'verified'])->name('youtube.destroy');

//Subscribers Route
Route::get('/subscribe', [SubscriptionsController::class, 'index'])->middleware(['auth', 'verified'])->name('subscribe.index');
Route::post('/subscribe', [SubscriptionsController::class, 'store'])->name('subscribe.store');
Route::delete('/subscribe/{id}', [SubscriptionsController::class, 'destroy'])->name('subscribe.destroy');


//Privacy Policy
Route::get('/privacy-policy', function (){
    return view('privacy-policy');
})->name('privacy-policy');
//Cookies Policy
Route::get('/cookies-policies', function (){
    return view('cookies_policies');
})->name('cookies-policies');

//Services Routes => To show all services
Route::controller(ServicesController::class)->group(function (){
    //All services
    Route::get('/services/wordpress', 'wordpress')->name('services.wordpress');
});

//Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{category}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/single-blog/{id}/{title}', [BlogController::class, 'singleblog'])->name('blog.single-blog');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//Portfolio Route
Route::get('/portfolio', [PortfolioController::class, 'index'])->middleware(['auth', 'verified'])->name('portfolio');
Route::get('/portfolio/show', [PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('/portfolio/create', [PortfolioController::class, 'create'])->middleware(['auth', 'verified'])->name('portfolio.create');
Route::post('/portfolio', [PortfolioController::class, 'store'])->middleware(['auth', 'verified'])->name('portfolio.store');
Route::get('/portfolio/single/{id}/{title}', [PortfolioController::class, 'single'])->name('portfolio.single');
Route::get('/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->middleware(['auth', 'verified'])->name('portfolio.edit');
Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->middleware(['auth', 'verified'])->name('portfolio.update');
Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->middleware(['auth', 'verified'])->name('portfolio.destroy');


// Post
Route::get('/post', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('post.create');
Route::post('/post', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('post.store');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->middleware(['auth', 'verified'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->middleware(['auth', 'verified'])->name('post.update');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->middleware(['auth', 'verified'])->name('post.destroy');

//End Post

//Client Review
Route::get('/review', [ReviewController::class, 'index'])->name('review');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');
Route::get('/review/show', [ReviewController::class, 'show'])->name('review.show')->middleware(['auth', 'verified']);
Route::get('/review/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit')->middleware(['auth', 'verified']);
Route::put('/review/{id}', [ReviewController::class, 'update'])->name('review.update')->middleware(['auth', 'verified']);
Route::delete('/review/{id}', [ReviewController::class, 'destroy'])->name('review.destroy')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Localization Route
Route::get("locale/{lang}", [LocalizationController::class, 'setLang']);

require __DIR__.'/auth.php';
