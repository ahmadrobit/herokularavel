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
Route::get('drive', function () {
    return drive();
}
Route::get('sp', function () {
    return sp();
}
   
);
function drive(){
      return 'on Drive';
   }
function sp(){
      return 'on Drive';
   }
