<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControlle;
use App\Http\Controllers\ParserController;
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


Route::get('/Home', [HomeControlle::class, 'init']);

Route::get('/api', [ParserController::class, 'api']);
