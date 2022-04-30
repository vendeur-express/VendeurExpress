<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
=======

>>>>>>> Stashed changes
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

<<<<<<< Updated upstream
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
Route::get('/coupon',[AdminController::class,'coupon'])->name('coupon');
Route::get('/commande',[AdminController::class,'commande'])->name('commande');
Route::get('/magasin',[AdminController::class,'magasin'])->name('magasin');
Route::get('/rembourser',[AdminController::class,'rembourser'])->name('rembourser');
Route::get('/reglage',[AdminController::class,'reglage'])->name('reglage');
Route::get('/retrait',[AdminController::class,'retrait'])->name('retrait');
Route::get('/produits',[AdminController::class,'produits'])->name('produits');
Route::get('/ajout_produit',[AdminController::class,'ajout_produit'])->name('ajout_produit');
Route::get('/avis',[AdminController::class,'avis'])->name('avis');
Route::get('/rapport',[AdminController::class,'rapport'])->name('rapport');
=======
require __DIR__.'/auth.php';
>>>>>>> Stashed changes
