<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostumerController;
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

Route::get('/nasabah/index', [CostumerController::class,'index']);


Route::get('/nasabah/showaddres/{param}', [CostumerController::class,'showaddres']);

// student

Route::get('/nasabah/getstudent/{name}/{code}', [CostumerController::class,'getstudent']);
