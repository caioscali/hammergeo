<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendmailController;
use App\Http\Controllers\ServicoController;
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


Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::get('/contato', [NavigationController::class, 'contato'])->name('contato');
Route::post('/contato', [SendmailController::class, 'contato'])->name('novocontato');

//Servico
Route::resources([
    'servicos' => ServicoController::class
]);

//Obras
Route::resources([
    'obras' => ObraController::class
]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
