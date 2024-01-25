
<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group( function() {
    
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resources(
        [
            'projects' => ProjectAdminController::class,
        ]
    );
});

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::prefix('/dashboard')->group( function() {
    
//     Route::get('/', function () {
//         return Inertia::render('Dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');

//     Route::resources(
//         [
//             'url' => ProjectAdminController::class,
//         ]
//     );
// });

Route::get('/home', [WelcomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/project/add', [ProjectController::class, 'add'])->name('project.add');

Route::get('/project', [ProjectController::class, 'index'])->name('project');

Route::get('/project/{show}', [ProjectController::class, 'show'])->name('project.show');




