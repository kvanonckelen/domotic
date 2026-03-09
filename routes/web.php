<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::view('/', 'pages.home')->name('home');
Route::view('/diensten', 'pages.services')->name('services');
Route::view('/realisaties', 'pages.portfolio')->name('portfolio');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/sitemap.xml', function () {

    return Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/services'))
        ->add(Url::create('/portfolio'))
        ->add(Url::create('/contact'))
        ->toResponse(request());
});