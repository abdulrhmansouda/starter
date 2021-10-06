<?php

use Illuminate\Support\Facades\Auth;
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
////route paramerters
///*
//Route::get('/test2/{id}', function ($id) {
//    return $id;
//});
//
//Route::get('/test3/{id?}', function () {
//    return "welcome";
//});
//
////Route name
//
//Route::get('/show-number/{id}', function ($id) {
//    return $id;
//})->name('a');
//
//Route::get('/show-string/{id?}', function () {
//    return "welcome";
//})->name('b');
//
//
////Namespace
///*Route::namespace('Front')->group(function(){
//   //all route only access controller or methods in folder name Front
//    Route::get('users','UserController@showUserName');
//});*/
//
////Route::prefix('users')->group(function(){
////    Route::get('show','UserController@showUserName');
////    Route::delete('delete','UserController@showUserName');
////    Route::get('edit','UserController@showUserName');
////    Route::put('update','UserController@showUserName');
////});Route::get('forPerson',function(){});
//
//Route::namespace('Front')->group(function(){
//   //all route only access controller or methods in folder name Front
//
//Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
//
//   Route::get('/',function(){return 'work';}) ;
//
//
//
//       Route::get('show','UserController@showUserName');
//       Route::delete('delete','UserController@showUserName');
//       Route::get('edit','UserController@showUserName');
//       Route::put('update','UserController@showUserName');
//});
//
//});
//Route::get('check',function(){return 'middleware';})->middleware('auth');
//
///*Route::namespace('Admin')->group(function() {
//    Route::get('second', 'SecondController@showString');
//});*/
//
//Route::get('login',function(){return "login Works";})->name('login');
//
//Route::group(['namespace'=>'Admin'],function() {
//    Route::get('second', 'SecondController@showString0')->middleware('auth');
//    Route::get('second1', 'SecondController@showString1');//this excepted
//    Route::get('second2', 'SecondController@showString2');//this excepted
//    Route::get('second3', 'SecondController@showString3');//middleware wrote in controller
//});
//
//Route::get('users','UserController@index')->middleware('auth');
//

//Route::resource('news','NewsController');
//
route::group(['namespace'=>'Front'],function(){
    route::get('index','UserController@getIndex') ;
});
//
//route::get('land',function(){return view('land');});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

