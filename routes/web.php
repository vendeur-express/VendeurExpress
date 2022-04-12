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

Route::get('/acceuil', function () {
    return view('navbar');
})->name('acceuil');

Route::get('/home', function(){
    return view('dashboard');
})->name('home');

Route::get('/',function(){
    return view('client');
})->name('client');
Route::get('/vexshop',function(){
    return view('vexshop');
})->name('vexshop');
Route::get('/apropos',function(){
    return view('apropos');
})->name('apropos');
Route::get('/blog',function(){
    return view('blog');
})->name('blog');
Route::get('/contact',function(){
    return view('contact');
})->name('contact');
Route::get('/compte',function(){
    return view('compte');
})->name('compte');
Route::get('/panier',function(){
    return view('panier');
})->name('panier');
Route::get('/paiement',function(){
    return view('paiement');
})->name('paiement');
Route::get('/favorie',function(){
    return view(('favorie'));
})->name('favorie');