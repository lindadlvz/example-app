
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

use App\Http\Controllers\ContactoController;
Route::get('/contacto', [ContactoController::class, 'index']);
Route::post('/contacto', [ContactoController::class, 'send']);
Route::get('/contactado', [ContactoController::class, 'contacted'])->name('contactado');
Route::get('/producto', [ProductoController::class, 'index']);


