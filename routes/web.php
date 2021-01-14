<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
});

Route::get('/', function () {
    return view('accueil');
});

//Page d'accueil

Route::get('/accueil', function () {
    return view('accueil');
});


Route::resource('users', UserController::class);


//Page de Restauration

Route::get('/restauration', function () {
    return view('restauration');
});

//Page du menu

Route::get('/restauration/menu', function () {
    return view('menu');
});

//Page Création des articles

Route::get('/creationArticle', 'ArticleController@indexCreation');

Route::post('/creationArticle/create/', 'ArticleController@create');

Route::get('/article2', 'ArticleController@index');
Route::get('/article', function () {
    return view('article');
});


//CRUD Gestion Article

Route::get('/gestionArticle' , 'ArticleController@indexGestion');
Route::get('/gestionArticle/update/{id}', 'ArticleController@validation');
Route::get('/gestionArticle/delete/{id}', 'ArticleController@destroy');
Route::get('/gestionArticle/{id}', 'ArticleController@show');


Route::get('/article3', function () {
    return view('creationArticle2');
});

//CRUD Gestion Article valide

Route::get('/gestionArticleValide' , 'ArticleController@indexGestionValide');
Route::get('/gestionArticleValide/update/{id}', 'ArticleController@deValidation');
Route::get('/gestionArticleValide/delete/{id}', 'ArticleController@destroy');
Route::get('/gestionArticleValide/{id}', 'ArticleController@show');


//Insertion du code HTML dans la base

Route::get('/insertText', 'TexteArticleController@create')->name('insertText.create');
Route::post('/insertText', 'TexteArticleController@store')->name('insertText.store');

Route::post('logged_in', 'LoginController@authenticate')->name('log');

Route::get('/menuAdmin', function () {
    return view('menuAdmin');
});

Route::get('/afficheArticleByID', function () {
    return view('afficheArticleByID');
});

Route::get('/crud', function () {
    return view('crud');
});


Route::get('/index', function () {
    return view('index');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
});