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
Route::get('/home', 'IndexController@index');
Route::get('/Abonnement', 'IndexController@abonnement');
Route::get('/Contact', 'IndexController@contact');
Route::get('/Points_de_ventes', 'localisationController@index');
Route::get('/Cahier_de_charge', 'IndexController@Cahier_de_charge');
Route::get('/tarif', 'IndexController@tarif');

Route::get('/', 'PanelController@home');
Route::get('/TransfertArchive', 'PanelController@archive');
Route::get('/importation', 'PanelController@importation');

Route::post('fileimport', 'AnnonceurController@fileImport')->name('fileimport');



Route::post('file-import', 'AnnonceController@Import')->name('file-import');

Route::get('ArchiverAnnonce', 'AnnonceController@Archive_file');
Route::post('archive', 'AnnonceController@archive')->name('archive');
