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


use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', 'ControleurVisualisation@index')->name('home');

Route::get('404',['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500',['as' => '500', 'uses' => 'ErrorController@fatal']);

Route::get('/histoiresUsers', 'ControleurUtilisateur@afficherHistoires')->name('histoires_utilisateur');
Route::get('/histoiresUsers/modifierEtat/{id}', 'ControleurUtilisateur@modifierEtat')->name('modifierEtatHistoire');

Route::get('/histoire/creer', 'ControleurCreation@creerHistoire')->name('creer_histoire');
Route::post('/histoire/enregistrer', 'ControleurCreation@enregistrerHistoire')->name('enregistrer_histoire');


Route::get('/histoire/{id}', 'ControleurVisualisation@lireHistoire')->name('lireHistoire');

Route::post('/truc', 'ControleurCreation@enregistrerLiaison')->name('enregistrer_liaison');
Route::get('/histoire/chapitre/{id}', 'ControleurVisualisation@lireChapitre')->name('lireChapitre');


Route::get('/chapitre/creer', 'ControleurCreation@creerChapitre')->name('creer_chapitre');
Route::post('/chapitre/enregistrer', 'ControleurCreation@enregistrerChapitre')->name('enregistrer_chapitre');

Route::get('/chapitre/lier', 'ControleurCreation@lierChapitre')->name('lier_chapitre');
Route::get('/liaison/choix', 'ControleurCreation@choixChapitre')->name('lier_choix_chapitre');


