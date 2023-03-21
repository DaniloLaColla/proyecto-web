<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', MainController::class);

Route:: get('main', function (){
    return "Bienvenido a la tienda";
});

/*
Route:: get('main/comprar', function (){
    return "Aca vendemos productos";
});
*/
Route:: get('main/{producto}', function ($producto){
    return "Aca vendemos: $producto";
});