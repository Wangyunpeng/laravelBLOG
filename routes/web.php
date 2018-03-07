<?php

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
    return view('pages.root');
});
Route::get('/on-my-way',function(){
  return view('pages.on_my_way');
});
Route::get('/attitude',function(){
  return view('pages.attitude');
});
Route::get('/1',function(){
  return view('article.show');
});
