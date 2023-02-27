<?php

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

Route::get('/', function () {
    return view('welcome');
});

//PizzaController
//id måste alltid vara längst ned.
Route::get('/pizzas', 'PizzaController@index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create');
Route::post('/pizzas', 'PizzaController@store');
Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->middleware('auth');



Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
