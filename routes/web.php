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


//users route
Route::get('/listUser', 'UtilisateurController@listUser')->name('listUser');

Route::get('/updateUser', 'UtilisateurController@listUser')->name('updateUser');

Route::get('/role', 'RegisterController@listRole')->name('listRole');

Route::put('/updateUser/{id}', 'UtilisateurController@update')->name('updateUser')->where('id', '[0-9]+');

Route::get('/deleteUser', 'UtilisateurController@destroy')->name('deleteUser');


//route pour les niveaux
Route::resource('niveaux','NiveauController');


//Route CRUD d' affectation
Route::get('/etudiant/create', 'EtudiantController@create')->name('etudiant_create');
Route::get('/etudiant/edit/{id}', 'EtudiantController@edit')->name('etudiant_edit');
Route::post('/etudiant/add', 'EtudiantController@add')->name('etudiant_add');
Route::post('/etudiant/update', 'EtudiantController@update')->name('etudiant_update');
Route::get('/etudiant/delete/{id}', 'EtudiantController@delete')->name('etudiant_delete');
Route::get('/etudiant/show/{id}', 'EtudiantController@show')->name('etudiant_show');


Route::get('/etudiant/index', 'EtudiantController@index')->name('list_etudiant');
