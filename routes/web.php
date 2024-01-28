<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForecastingController;
use App\Http\Controllers\HasilForecastController;
use App\Http\Controllers\RamalanSelanjutnyaController;
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

Route::get('/', [ForecastingController::class, 'dashboard']);
// profil
Route::get('/profil', function() {
    return view('profil');
});

// Data Aktual
Route::get('/data-aktual', [ForecastingController::class, 'view_data'])->name('forecasting.hitung');
Route::resource('/data-aktual', ForecastingController::class);

// Hitungan Hasil Forecast
Route::get('/hasil-forecast', [HasilForecastController::class, 'index']);
Route::post('/hasil-forecast/hitung', [HasilForecastController::class, 'hitung']);
Route::resource('/hasil-forecast', HasilForecastController::class);

// Ramalan berikutnya
Route::get('/ramal-next', [RamalanSelanjutnyaController::class, 'index']);
Route::resource('/ramal-next', RamalanSelanjutnyaController::class);
 