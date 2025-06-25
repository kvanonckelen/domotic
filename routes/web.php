<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('components.map-card');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('components.routes.services-route');
})->name('services');

Route::get('/contact', function () {
    return view('components.routes.contact-route');
})->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


// routes/web.php
Route::get('/map', function () {
    return view('components.map');
});


Route::get('/clients', [ClientController::class, 'showClients']);

Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

// Client Routes
Route::middleware('auth')->group(function () {
    Route::get('/admin/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/admin/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/admin/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/admin/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/admin/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/admin/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');
});

