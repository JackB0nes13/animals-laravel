<?php

use Illuminate\Support\Facades\Route;
use App\Models\Animal;
use App\Http\Controllers\AnimalController;
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



Route::get('/', [AnimalController::class, 'index']);

Route::get('/animals/list/', [AnimalController::class, 'alphabetical']);

Route::get('/animals/get/{animal:id}', [AnimalController::class, 'byId']);


//Route::get('/a', function () {
    //return view('welcome', [
    //    'welcome' => Animal::all()
  //   ]);
//});
