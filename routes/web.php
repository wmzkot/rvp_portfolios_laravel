<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


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
Auth::routes();


Route::post('/portfolio/add', [App\Http\Controllers\PortfolioController::class, 'postIndex'])->middleware('checkauth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'getAll']);
Route::get('/', [Controllers\BaseController::class, 'getIndex']);
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/ajax', [App\Http\Controllers\AjaxController::class, 'postIndex']);
Route::get('/ajax/subscribe', [App\Http\Controllers\AjaxController::class, 'getEmail']);

Route::get('/work/{id}', [App\Http\Controllers\PortfolioController::class, "getOne"]);

Route::group(['middleware'=>['auth']], function(){
    Route::get('/work/delete/{id}', [App\Http\Controllers\PortfolioController::class, "getDelete"]);
    Route::get('work/edit/{id}', [App\Http\Controllers\PortfolioController::class, 'getEdit']);
    Route::post('work/edit/{id}', [App\Http\Controllers\PortfolioController::class, "postEdit"]);
});






//always bottom - this is default controller
Route::get('{url?}', [Controllers\MaintextController::class, 'getIndex'])->middleware('checkauth');

//Route::get('/', [Controllers\BaseController::class, 'getIndex']);








