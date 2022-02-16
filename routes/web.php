<?php

use App\Http\Controllers\aProposController;
use App\Http\Controllers\PolitesseController;
use Illuminate\Support\Facades\Route;

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
    return view ('Accueil');
});

Route::get('/bonjour', [PolitesseController::class,'helloEveryone']);

Route::get('/au-revoir', [PolitesseController::class,'goodBye']);

Route::get('/bonjour/{name}', [PolitesseController::class, 'helloSomeone']);

Route::get('/a-propos', [aProposController::class, 'aProposMain']);

Route::get('/a-propos/{user}' , [aProposController::class, 'aProposShow']);

















