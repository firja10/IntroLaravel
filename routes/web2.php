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
    return view('welcome');
});


Route::get('/test/{nama}/dan/{apapun}',function($jenengan,$name_b)
{$f_name = $jenengan;
$l_name = $name_b;
return " $f_name $l_name "; 
}


); 


Route::get('/perkenalan','HomeController@halo');