<?php

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

Route::get('/bonjour', function(){
    return view('hello', [
        'name' => 'joe',
        'numbers' => [1, 2, 3],
    ]);
});

Route::get('/au-revoir', function(){
    return view('good-bye');

});

Route::get('/bonjour/{name}',function ($name){
    return view ('hello'.[
        'name' => $name,
        'numbers' => [],
    ]);
});

Route::get('/a-propos', function (){
    return view ('a-propos', [
      
        'equipe' => ['Bill', 'Ben', 'Jim' ],       
     ]);
});

Route::get('/a-propos/{user}' ,function($user){
      return view ('a-propos-show', ['user' => $user,]);
           });

















