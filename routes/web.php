<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\banca\BancaController;

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

// Route::get('banca/importar', [BancaController::class, 'importar']);
Route::resource(
    'banca',
    BancaController::class,
)->names([
        'index'=>'banca.index',
        'show'=>'banca.mostrar',
        'create'=>'banca.build',
        'importar'=>'banca.importar',
    ]);

// Route::resources([
//     'banca', BancaController::class,
//     // 'posts',PostController::class,
//     ]);

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
