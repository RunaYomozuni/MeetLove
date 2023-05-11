<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, AmitieController, HomeController};
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

//route par défault quand on ouvre l'application
Route::get('/', function () {
    return view('home');
});

//route qui permet de voir tous les amis d'un user
Route::get('/amities/{user}', [UserController::class, 'getAmitiesUser'])->name('user.amities')->middleware('auth');
//route qui permet d'afficher le profil d'un user

//route qui permet d'afficher tous les users
Route::resource('/users', UserController::class)->middleware('auth');

Route::resource('/home', HomeController::class)->middleware('auth');

//route resource qui creer les route pour le controlleur Amitie
Route::resource('/amities', AmitieController::class)->middleware('auth');

//route qui permet d'afficher un user
Route::get('/user/{user}', [UserController::class, 'show'])->middleware('auth')->name('user');



/*
|--------------------------------------------------------------------------------------------------
| COMMENT CONNAITRE LES ROUTES DEJA EXISTANTES ? en tapant php artisan route:list dans le terminal
|---------------------------------------------------------------------------------------------------
|/*Les routes déjà existantes gràce à cette ressource :  Route::resource('/users', UserController::class);

//route qui permet d'afficher tous les users
    GET|HEAD        users ......................... users.index › UserController@index

//route qui permet d'enregistrer un nouveau user dans la base de données
    POST            users ......................... users.store › UserController@store

 //route qui permet d'afficher le formulaire de création d'un user
    GET|HEAD        users/create ...................users.create › UserController@create

//route qui permet d'afficher le  profil d'un user
    GET|HEAD        users/{user} ...................users.show › UserController@show

//route qui permet de poster le formulaire de modification d'un profil d'un user
    PUT|PATCH       users/{user} ...................users.update › UserController@update

//route qui permet de supprimer un user
    DELETE          users/{user} ...................users.destroy › UserController@destroy

//route qui permet d'afficher le formulaire de modification d'un profil d'un user
    GET|HEAD        users/{user}/edit ..............users.edit › UserController@edit

*/




Auth::routes();


