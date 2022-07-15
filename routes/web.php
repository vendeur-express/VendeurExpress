<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttributController;
use App\Http\Controllers\AttributeValueController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategorieProduitController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LivraisonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\StudentsController;
use App\Models\AttributeValue;
use App\Models\Categorie;
use App\Models\Image;

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
Route::get('/geoloc', [ClientController::class, 'geoloc'])->name('geoloc');
// route admin fournisseurphp
Route::get('/admin1', [AdminController::class, 'index'])->name('admin');
Route::get('/coupon', [AdminController::class, 'coupon'])->name('coupon');
Route::get('/commande', [AdminController::class, 'commande'])->name('commande');
Route::get('/magasin', [AdminController::class, 'magasin'])->name('magasin');
Route::get('/rembourser', [AdminController::class, 'rembourser'])->name('rembourser');
Route::get('/reglage', [AdminController::class, 'reglage'])->name('reglage');
Route::get('/retrait', [AdminController::class, 'retrait'])->name('retrait');
Route::get('/produits', [AdminController::class, 'produits'])->name('produits');
// Routes des categories
//Route::get('/categorie', [CategorieController::class,'index'])->name('categorie');
/* Route::resource('categorie','CategorieController',[
    'names'=>[
        'index'=>'categorie',
        'store'=>'categorie.store',
        'suprimer_cat'=>'categorie.suprimer_cat'
] 
);*/
// Route::post('/add-categorie',[CategorieController::class,'add_cat'])->name('add.cat');
// Route::post('/delete-cat',[CategorieController::class,'del_cat'])->name('delete.cat');
//Route::resource('categorie', CategorieController::class);

// route des attributs
Route::get('/attribut', [AttributController::class, 'index'])->name('attribut');
Route::post('admin/add-attribut', [AttributController::class, 'add_att'])->name('add.attr');
Route::post('/delete-attribut', [AttributController::class, 'del_att'])->name('del.attr');
// routes des valeurs des attributs
Route::post('/add-attr-values', [AttributeValueController::class, 'create'])->name('add.attr.val');
Route::post('/del-attr-values', [AttributeValueController::class, 'del'])->name('del.attr.val');

Route::get('/banniere', [AdminController::class, 'banniere'])->name('banniere');
Route::get('/add-slider', [AdminController::class, 'add_slid'])->name('add.slid');
Route::post('/ajoutlivraison', [LivraisonController::class, 'livraison'])->name('pointlivraison');


Route::get('/ajout_produit', [AdminController::class, 'ajout_produit'])->name('ajout_produit');
Route::get('/avis', [AdminController::class, 'avis'])->name('avis');
Route::get('/rapport', [AdminController::class, 'rapport'])->name('rapport');

// route pour superadmin
Route::get('/superadmin', [AdminController::class, 'dashboard'])->name('superadmin');
Route::get('/supercommande', [AdminController::class, 'supercommande'])->name('supercommande');
Route::get('/ajout_categorie', [AdminController::class, 'ajout_categorie'])->name('ajout_categorie');
Route::post('/sauvercategorie', [CategorieController::class, 'sauvercategorie'])->name('sauvercategorie');

// route sur categorie
// Route::resource('categorie', CategorieController::class);
Route::get('/categorie',[CategorieController::class,'index'])->name('categorie');
Route::post('/admin/categorie.store',[CategorieController::class,'store'])->name('categorie.store');
Route::post('/superadmin/produit',[ProduitsController::class, 'store'])->name('produits.store');
Route::get('/suprimer_cat/{id}', [CategorieController::class, 'suprimer_cat']);
Route::post('/supprimer_livraison/{livraison_id}', [LivraisonController::class, 'destroy']);
Route::get('/editer_cat/{id}', [CategorieController::class, 'editer_cat'])->name('editer_cat');
// Route::resource('categorie',[CategorieController::class,'index','']);
// end categorie controller
// Route::get('/delete_categorie/{id}', [CategorieProduitController::class,  'delete_categorie']);
Route::get('/article', [AdminController::class, 'article'])->name('article');
Route::get('/superclient', [AdminController::class, 'superclient'])->name('superclient');
// Route::get('/categorie', [AdminController::class, 'categorie'])->name('categorie');
Route::get('/compte', [AdminController::class, 'compte'])->name('compte');
Route::get('/superclient', [AdminController::class, 'superclient'])->name('superclient');
Route::get('/superproduit', [AdminController::class, 'superproduit'])->name('superproduit');
Route::get('/supercoupon', [AdminController::class, 'supercoupon'])->name('supercoupon');
Route::get('/parametre', [AdminController::class, 'parametre'])->name('parametre');
Route::get('/publicite', [AdminController::class, 'publicite'])->name('publicite');
Route::get('/commentaire', [AdminController::class, 'commentaire'])->name('commentaire');
Route::get('/livraison', [AdminController::class, 'indexlivraison'])->name('livraison');

Route::get('/superajout_produit', [AdminController::class, 'superajout_produit'])->name('superajout_produit');
// Route::resource('/students', StudentsController::class);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/client/create', [ClientController::class, 'create']);
Route::post('/post', [ClientController::class, 'store']);

// Function to insert the avatar image
Route::get('/save_img', [ImageController::class, 'save_avatar']);

require __DIR__ . '/auth.php';