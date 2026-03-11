<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL as FacadesURL;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::view('/', 'pages.home')->name('home');
Route::view('/diensten', 'pages.services')->name('services');
Route::view('/realisaties', 'pages.portfolio')->name('portfolio');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::view('/energiecheck', 'pages.energy-check')->name('energy-check');

Route::get('/sitemap.xml', function () {

    return Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/services'))
        ->add(Url::create('/portfolio'))
        ->add(Url::create('/contact'))
        ->add(Url::create('/energiecheck'))
        ->toResponse(request());
});

use App\Http\Controllers\EnergyCheckController;

Route::get('/energiecheck', [EnergyCheckController::class, 'index'])->name('energy-check');
Route::post('/energiecheck/report', [EnergyCheckController::class, 'sendReport'])->name('energy-check.report');