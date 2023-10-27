<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\SimpanController;

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/id', function () {
    return view('home');
})->name('home.id');

Route::get('/ppp', function () {
    return view('simpanSensor.coba');
});

Route::get('/simpan-tds', [SensorController::class, 'grafikTds']);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('login/id', [AuthController::class, 'login'])->name('login.id');
Route::post('login', [AuthController::class, 'auth'])->name('login.auth');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('register/id', [AuthController::class, 'register'])->name('register.id');
Route::post('register', [AuthController::class, 'store'])->name('register.store');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('dashboard/id', [AuthController::class, 'dashboard'])->name('dashboard.id');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('air', [SensorController::class, 'air']);
Route::get('ph', [SensorController::class, 'ph']);
Route::get('uv', [SensorController::class, 'uv']);
Route::get('airTemperature', [SensorController::class, 'airTemperature']);
Route::get('airHumidity', [SensorController::class, 'airHumidity']);
Route::get('turbidity', [SensorController::class, 'turbidity']);
// Route::post('/air/store', [SensorController::class, 'airStore'])->name('air.store');
Route::get('tds', [SensorController::class, 'tds']);
// Route::get('waterTemp', [SensorController::class, 'waterTemp']);
Route::get('/air-tds/{nilaiTds}/{nilaiAir}', [SensorController::class, 'simpanAirTds']);
Route::get('/dht_11/{uv}/{airTemperature}/{airHumidity}', [SensorController::class, 'simpanDht11']);
