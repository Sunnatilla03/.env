<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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
Route::view("users","users");
Route::view("home","home");
Route::view("noaccess","noaccess");
Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/set',[SessionController::class,'storeSessionData'])->name('session.store');
Route::get('/session/remove',[SessionController::class,'deleteSessionData'])->name('session.delete');

Route::get('/search',function(Request $request){
    $age = $request->get('age', 51);
    return $age. 'yoshda';
});
Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('product.index');

Route::get('/get-name',[\App\Http\Controllers\TestController::class,'getFirstLastname']);

Route::get('/s',function(){
    Debugbar::info('You are so ugle');
});

Route::get('/user/{name?}', function($name=null){
    return 'Hello, user '.$name;
});

Route::get('/{action}/{name?}', function($action,$name=null){
    return $action.$name;
});
