<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;

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

Route::get('/', [PageController::class, 'homepage'])->name('home');

Route::get('/articles/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/article/article/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/contacts/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::get('/articles/articles/{category?}', function ($parametro = 'valore di default') {
    return $parametro;
});


Route::post('/contacts/submit', [MailController::class, 'submitContact'])->name('contact.submit');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
