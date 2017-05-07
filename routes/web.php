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
  //  return view('welcome');
	return "Home";
});


Route::get('/about', function () {
  //  return view('welcome');
	return "About Page";
});


Route::get('/contact', function () {
   return view('contact');
	
});

Route::get('/alluser', function () {
   return view('user');
	
});

Route::get('alluser/{id}/{name}', function ($id,$name) {
    return 'User '.$id.$name;
})->where('name', '[A-Za-z]+');


Route::get('foo', function () {
    return 'Hello World i am easir arafat';
});

Route::get('home','basicController@index');

Route::get('aboutt','basicController@aboutt');

Route::get('user','basicController@home');