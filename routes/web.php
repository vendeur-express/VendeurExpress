<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategorieProduitController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/acceuil',function(){
//     return view('acceuil.acceuil');
// })->name('acceuil');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/', [ClientController::class, 'home'])->middleware(['auth'])->name('client');
Route::get('/acceuil', [ClientController::class, 'index'])->middleware(['auth'])->name('acceuil');
Route::get('/vexshop', [ClientController::class, 'vexshop'])->name('vexshop');
Route::get('/apropos', [ClientController::class, 'apropos'])->name('apropos');
Route::get('/blog', [ClientController::class, 'blog'])->name('blog');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/compte', [ClientController::class, 'compte'])->name('compte');
Route::get('/panier', [ClientController::class, 'panier'])->name('panier');
Route::get('/paiement', [ClientController::class, 'paiement'])->name('paiement');
Route::get('/favorie', [ClientController::class, 'favorie'])->name('favorie');
Route::get('/produit', [ClientController::class, 'produit'])->name('produit');
Route::get('/inscription', [ClientController::class, 'inscription'])->name('inscription');
// route admin fournisseur
Route::get('/admin1', [AdminController::class, 'index'])->name('admin');
Route::get('/coupon', [AdminController::class, 'coupon'])->name('coupon');
Route::get('/commande', [AdminController::class, 'commande'])->name('commande');
Route::get('/magasin', [AdminController::class, 'magasin'])->name('magasin');
Route::get('/rembourser', [AdminController::class, 'rembourser'])->name('rembourser');
Route::get('/reglage', [AdminController::class, 'reglage'])->name('reglage');
Route::get('/retrait', [AdminController::class, 'retrait'])->name('retrait');
Route::get('/produits', [AdminController::class, 'produits'])->name('produits');
Route::get('/ajout_produit', [AdminController::class, 'ajout_produit'])->name('ajout_produit');
Route::get('/avis', [AdminController::class, 'avis'])->name('avis');
Route::get('/rapport', [AdminController::class, 'rapport'])->name('rapport');

// route pour superadmin
Route::get('/superadmin', [AdminController::class, 'dashboard'])->name('superadmin');
Route::get('/supercommande', [AdminController::class, 'supercommande'])->name('supercommande');
Route::get('/ajout_categorie', [AdminController::class, 'ajout_categorie'])->name('ajout_categorie');
Route::post('/sauvercategorie', [CategorieController::class, 'sauvercategorie'])->name('sauvercategorie');
<<<<<<< Updated upstream

// route sur categorie
Route::resource('categorie',CategorieController::class);
Route::get('/sup/{id}',[CategorieController::class,'sup']);
// Route::resource('categorie',[CategorieController::class,'index','']);
// end categorie controller
=======
>>>>>>> Stashed changes
Route::get('/delete_categorie/{id}', [CategorieProduitController::class, 'delete_categorie']);
Route::get('/article', [AdminController::class, 'article'])->name('article');
Route::get('/superclient', [AdminController::class, 'superclient'])->name('superclient');
//Route::get('/categorie', [AdminController::class, 'categorie'])->name('categorie');
Route::get('/compte', [AdminController::class, 'compte'])->name('compte');
Route::get('/superclient', [AdminController::class, 'superclient'])->name('superclient');
Route::get('/superproduit', [AdminController::class, 'superproduit'])->name('superproduit');
Route::get('/supercoupon', [AdminController::class, 'supercoupon'])->name('supercoupon');
Route::get('/parametre', [AdminController::class, 'parametre'])->name('parametre');
Route::get('/publicite', [AdminController::class, 'publicite'])->name('publicite');
Route::get('/commentaire', [AdminController::class, 'commentaire'])->name('commentaire');
Route::get('/banniere', [AdminController::class, 'banniere'])->name('banniere');
Route::get('/superajout_produit', [AdminController::class, 'superajout_produit'])->name('superajout_produit');
Route::resource('/students', StudentsController::class);

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/client/create', [ClientController::class, 'create']);
Route::post('/post', [ClientController::class, 'store']);
require __DIR__ . '/auth.php';