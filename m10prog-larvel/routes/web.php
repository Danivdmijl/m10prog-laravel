<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectAdminController;
use \App\Http\Controllers\WelcomeController;
use \App\Http\Controllers\ProjectController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::prefix('/dashboard')
     ->middleware(['auth', 'verified'])
     ->group(function () {
         Route::get(
             '/',
             function () {
                 return view('dashboard');
             })->name('dashboard');

         Route::resources(
             [
                 'admin' => ProjectAdminController::class,
             ]
         );
     });

Route::get('/home', [WelcomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/project/add', [ProjectController::class, 'add'])->name('project.add');

Route::get('/project', [ProjectController::class, 'index'])->name('project');

Route::get('/project/{show}', [ProjectController::class, 'show'])->name('project.show');




require __DIR__ . '/auth.php';
