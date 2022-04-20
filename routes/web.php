<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!c 
*/

Route::get('/acceuil', function () {
    return view('acceuil.acceuil');
})->name('acceuil');

Route::get('/home', function(){
    return view('dashboard');
})->name('home');

Route::get('/',[ClientController::class, 'home'])->name('client');
Route::get('/vexshop',[ClientController::class,'vexshop'])->name('vexshop');
Route::get('/apropos',[ClientController::class,'apropos'])->name('apropos');
Route::get('/blog',[ClientController::class,'blog'])->name('blog');
Route::get('/contact',[ClientController::class,'contact'])->name('contact');
Route::get('/compte',[ClientController::class,'compte'])->name('compte');
Route::get('/panier',[ClientController::class,'panier'])->name('panier');
Route::get('/paiement',[ClientController::class,'paiement'])->name('paiement');
Route::get('/favorie',[ClientController::class,'favorie'])->name('favorie');
Route::get('/produit',[ClientController::class,'produit'])->name('produit');
Route::get('/inscription',[ClientController::class,'inscription'])->name('inscription');
// route admin fournisseur
Route::get('/admin1',[AdminController::class,'index'])->name('admin');
