<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\accessController;
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

/*-------------------Главная-------------------*/
Route::get('/', [IndexController::class, 'home'])->name('home');

/*-------------------Каталог-------------------*/
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');

/*-------------------Товар-------------------*/
Route::get('/product/{product_id}', [ProductController::class, 'getProduct'])->name('product');

/*-------------------Контакты-------------------*/
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact');

/*-------------------Отзывы-------------------*/
Route::get('/feedback', [feedbackController::class, 'index'])->name('feedback');

/*-------------------Написать отзыв-------------------*/
Route::get('/feedbackCreate', [feedbackController::class, 'feedbackCreate'])->name('feedbackCreate');
Route::post('/feedbackCreateSubmit', [feedbackController::class, 'feedbackCreateSubmit'])->name('feedbackCreateSubmit');

/*-------------------Рецепты-------------------*/
Route::controller(articlesController::class)->group(function () {
    Route::get('/articlesAll', 'articlesAll')->name('articlesAll');
    Route::get('/articleCreate', 'articleCreate')->name('articleCreate');
    Route::post('/articleCreateSubmit', 'articleCreateSubmit')->name('articleCreateSubmit');

    Route::get('/article/{idArticle}/view', 'articleView')->name('articleView');
    Route::get('/article/{idArticle}/edit', 'articleEdit')->name('articleEdit');
    Route::get('/article/{idArticle}/delete', 'articleDelet')->name('articleDelete');
    Route::get('/article/{idArticle}/published', 'articlePublished')->name('articlePublished');
    Route::get('/article/{idArticle}/unPublished', 'articleUnPublished')->name('articleUnPublished');
    Route::post('/article/{idArticle}/editSubmit', 'articleEditSubmit')->name('articleEditSubmit');

    Route::get('/articlesForReview', 'articlesForReview')->name('articlesForReview');
    Route::get('/articlesInProgress', 'articlesInProgress')->name('articlesInProgress');
    Route::get('/articlesPublished', 'articlesPublished')->name('articlesPublished');

    Route::get('/articleUser', 'articleUser')->name('articleUser');
});

/*-------------------Рецепты-------------------*/
Route::controller(accessController::class)->group(function () {
    Route::get('/accessGate', 'accessGate')->name('accessGate');
});

/*-------------------Аутентификация-------------------*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
