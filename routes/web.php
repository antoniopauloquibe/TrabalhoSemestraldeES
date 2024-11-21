<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\Auth\TuristaAuthController;


Route::get('/', [EventController::class, 'index']);
Route::get('/events/pacote',[EventController::class,'pacote']);
Route::get('/events/reserva', [EventController::class,'reserva']);
Route::get('/events/create', [EventController::class,'create'])->name('events.create');
Route::get('/events/{id}', [EventController::class,'show']);



Route::post('/events',[EventController::class,'store']);
Route::post('/events/reserva', [ReservaController::class, 'store'])->name('reservas.store');


Route::get('/dashboard', [EventController::class,'dashboard'])->middleware('auth');




Route::resource('events', EventController::class);

// Rotas específicas para editar e deletar
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');





/*Route::group(['prefix' => 'turista'], function () {
    Route::get('login', [TuristaAuthController::class, 'showLoginForm'])->name('turista.login');
    Route::post('login', [TuristaAuthController::class, 'login']);
    Route::post('logout', [TuristaAuthController::class, 'logout'])->name('turista.logout');
});*/




// Dashboard do administrador
/*Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Dashboard do turista
Route::middleware(['auth', 'role:tourist'])->group(function () {
    Route::get('/tourist/dashboard', [TouristDashboardController::class, 'index'])->name('tourist.dashboard');
});*/

