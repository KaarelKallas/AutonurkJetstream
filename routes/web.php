<?php

use App\Http\Controllers\CarController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');
Route::get('/cardata', function () {
    $response = Http::withHeaders([
        'X-RapidAPI-Key' => 'f9b674355dmsh576c6041533f54cp1fa8cejsnf88e3580deb3',
        'X-RapidAPI-Host' => 'car-api2.p.rapidapi.com'
    ])->post('https://car-api2.p.rapidapi.com/api', [
        'sort' => 'id',
        'direction' => 'asc',
        'year' => '2020',
        'verbose' => 'yes'
    ]);
    $response = Http::acceptJson()->get('https://car-api2.p.rapidapi.com/api/models');

});
Route::prefix('cars')->group(function () {
   // Route::get('/kasutatud', [CarController::class, 'index'])->name('used');
    Route::resource('cars', CarController::class);
    Route::post('/store', [CarController::class, 'store'])->middleware(['auth'])->name('store');
    Route::delete('/destroy/{id}', [CarController::class, 'destroy'])->middleware(['auth'])->name('destroy');

});
Route::get('/kasutatud', [CarController::class, 'index'])->name('cars.index');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
