<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
Route::resource('aliment', AlimentController::class);
Route::resource('saliment',SAlimentController::class);
Route::resource('Agentscomerciaux', AgentController::class);
Route::get('adam', [HomeController::class,'index']);
Route::post('paiement', [HomeController::class,'validPaiement'])->name('valid.paiement');
Route::get('adamc', [HomeController::class,'testcart']);


Route::get('/', function () {
    return view('welcome');
});

