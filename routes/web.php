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
Route::view('/over-ons', 'pages.about')->name('about');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::view('/energiecheck', 'pages.energy-check')->name('energy-check');

Route::get('/robots.txt', function () {
    return response("User-agent: *\nDisallow:", 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/favicon.ico', function () {
    return response()->file(public_path('favicon.ico'));
});

Route::get('/manifest.json', function () {
    return response()->file(public_path('manifest.json'));
});

Route::get('/browserconfig.xml', function () {
    return response()->file(public_path('browserconfig.xml'));
});

Route::get('/.well-known/security.txt', function () {
    return response()->file(public_path('.well-known/security.txt'));
});

Route::view('/privacy', 'pages.privacy')->name('privacy');

Route::get('/sitemap.xml', function () {

    return Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/services'))
        ->add(Url::create('/portfolio'))
        ->add(Url::create('/contact'))
        ->add(Url::create('/energiecheck'))
        ->add(Url::create('/over-ons'))
        ->toResponse(request());
});

use App\Http\Controllers\EnergyCheckController;

Route::get('/energiecheck', [EnergyCheckController::class, 'index'])->name('energy-check');
Route::post('/energiecheck/report', [EnergyCheckController::class, 'sendReport'])->name('energy-check.report');