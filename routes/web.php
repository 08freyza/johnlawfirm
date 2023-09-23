<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'guest'], function () {
    Route::controller(ContentController::class)->group(function () {
        // Home
        Route::get('', 'index')->name('home');

        // About
        Route::get('about', 'about')->name('about');

        // Team
        Route::get('teams', 'lawyers')->name('team');

        // Services
        Route::get('services', 'services')->name('service');

        // Galleries
        Route::get('galleries', 'galleries')->name('gallery');

        // News & Article
        Route::get('news-and-article', 'article')->name('article');

        // News & Article Detail
        Route::get('news-and-article/{id}/{title}', 'articleDetail')->name('article.detail');
    });
});
