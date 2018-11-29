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
    return view('home', ['posts' => \App\Posts::all(), 'users' => \App\Users::all()]);
})->name('home');

Route::get('/about', function () {
    return view('about', ['users' => \App\Users::all()]);
})->name('about');

Route::get('/services', function (){
    return view('services',  ['users' => \App\Users::all()]);
})->name('services');

Route::get('/contacts', function (){
    return view('contacts',  ['users' => \App\Users::all()]);
})->name('contacts');


Route::get('/user-{id}', function ($id){
    return view('user',  ['users' => \App\Users::all(), 'id' => $id]);
})->name('user');
