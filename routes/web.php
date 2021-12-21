<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/entreprise/edit', 'App\Http\Controllers\EntrepriseController@update')->name('update.entrep');
Route::post('/mission/edit', 'App\Http\Controllers\MissionController@update')->name('update.mission');
Route::get('/entreprise', 'App\Http\Controllers\EntrepriseController@index')->name('entreprise.edit');
Route::get('/missions', 'App\Http\Controllers\MissionController@index')->name('missions.list');
Route::post('/section/delete', 'App\Http\Controllers\SectionController@delete')->name('delete.section');
Route::get('/sections', 'App\Http\Controllers\SectionController@index')->name('sections.list');
Route::get('/galleries', 'App\Http\Controllers\GalleryController@index')->name('gallery.list');
Route::post('/section/add', 'App\Http\Controllers\SectionController@store')->name('ajouter.section');
Route::get('/entreprise/choix', 'App\Http\Controllers\ChoixController@index')->name('choix.list');
Route::get('/entreprise/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.list');
Route::post('/choix/add', 'App\Http\Controllers\ChoixController@store')->name('ajouter.choix');
Route::post('/gallery/add', 'App\Http\Controllers\GalleryController@store')->name('ajouter.image');
Route::post('/contacts/add', 'App\Http\Controllers\ContactController@store')->name('ajouter.contact');
Route::post('/mission/add', 'App\Http\Controllers\MissionController@store')->name('ajouter.mission');
Route::post('/choix/edit', 'App\Http\Controllers\ChoixController@update')->name('update.choix');


Route::post('/contact/edit', 'App\Http\Controllers\ContactController@update')->name('update.num');
Route::post('/entreprise/add', 'App\Http\Controllers\EntrepriseController@store')->name('ajouter.entrep');
Route::post('/users/ajouter', 'App\Http\Controllers\UserController@store')->name('ajouter.user');
Route::get('/login', 'App\Http\Controllers\UserController@indexLogin')->name('login.user');
Route::get('/entreprise/edit', 'App\Http\Controllers\EntrepriseController@index')->name('entreprise.edit');
Route::post('/sign', 'App\Http\Controllers\UserController@login')->name('login.custom');
Route::post('/users/update', 'App\Http\Controllers\UserController@update')->name('update.user');
Route::post('/mission/delete', 'App\Http\Controllers\MissionController@delete')->name('delete.mission');
Route::post('/contact/delete', 'App\Http\Controllers\ContactController@delete')->name('delete.contact');
Route::post('/users/delete', 'App\Http\Controllers\UserController@delete')->name('delete.user');
Route::post('/choix/delete', 'App\Http\Controllers\ChoixController@delete')->name('delete.choix');
Route::get('/users/liste', 'App\Http\Controllers\UserController@index')->name('register-user');
Route::post('signout', 'App\Http\Controllers\UserController@signOut')->name('signout');
Route::post('/gallery/delete', 'App\Http\Controllers\GalleryController@delete')->name('delete.gallery');
Route::get('/', 'App\Http\Controllers\PageController@indexDefault')->name('page.indexD');
Route::get('/{id}', 'App\Http\Controllers\PageController@index')->name('page.index');
Route::get('/error/401', 'App\Http\Controllers\ErrorController@error401')->name('erreur.401');


