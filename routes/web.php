<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

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
    return view('welcome');
});

Route::get('/formations', [FormationController::class,'index'])->name('formations.index');
Route::get('/formations/create', [FormationController::class,'create'])->name('formations.create');
Route::post('/formations/store',[FormationController::class,'store'])->name('formations.store');
Route::get('/formations/{formation}',[FormationController::class,'show'])->name('formations.show');
Route::get('/research',[FormationController::class,'research'])->name('formations.research');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
