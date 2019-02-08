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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//routes des users
Route::get('/listerUtiliateur', 'UtilisateurController@listUser')->name('lister_Utilisateur');

Route::get('/utilisateur/update', 'UtilisateurController@update')->name('update_Utilisateur');

Route::put('/utilisateur/edit/{id}', 'UtilisateurController@edit')->name('edit_Utilisateur')->where('id', '[0-9]+');

Route::get('/utilisateur/delete', 'UtilisateurController@destroy')->name('delete_Utilisateur');


//route for niveaux
Route::resource('niveaux','NiveauController');
/***************************** */


Route::get('/etudiant/nouveau', 'EtudiantController@create')->name('nouveauEtudiant');
Route::get('/etudiant/edit/{id}', 'EtudiantController@edit')->name('edit_Etudiant');
Route::post('/etudiant/ajouter', 'EtudiantController@ajouter')->name('etudiant_ajouter');
Route::post('/etudiant/update', 'EtudiantController@update')->name('update_etudiant');
Route::get('/etudiant/delete/{id}', 'EtudiantController@delete')->name('supprimer_etudiant');
Route::get('/DetailsEtudiant/show/{id}', 'EtudiantController@show')->name('etudiant_details');


Route::get('/etudiant/index', 'EtudiantController@index')->name('listerEtudiant');
