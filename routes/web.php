<?php

use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::post('login', [LoginController::class, 'autenticar'])->name('acceder');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('/', function () {
    return view('login');
});
//Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/inicio', [EvaluacionController::class, 'index']);
Route::get('/examen', [EvaluacionController::class, 'examen'])->name('examen');
Route::POST('/resolver', [EvaluacionController::class, 'resolver']);
Route::get('/examen-resuelto', [EvaluacionController::class, 'examen_resuelto'])->name('examen-resuelto');
Route::get('/register_nuevo', [EvaluacionController::class, 'register'])->name('register');
Route::post('/register', [EvaluacionController::class, 'store']);