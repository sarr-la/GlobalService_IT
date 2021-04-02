<?php

use App\Http\Controllers\AdminController;
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
    return view('GSIT');
});





Route::get('/about', 'AboutController@about')->name("about");
Route::get('/work', 'WorkController@work')->name("work");
Route::get('/service', 'ServiceController@service')->name("service");
Route::get('/GSIT', 'AccueilController@accueil')->name("accueil");
Route::get('/contact', 'ContactController@contact')->name("contact");
Route::get('/vente', 'VenteController@vente')->name("vente");


Route::get('/devi', 'DeviController@devi')->name("devi");



#Route::get('/contact', 'ContactController@contacts');
Route::get('/contact/create','ContactController@create')->name('create_Contact');
Route::post('contact/create','ContactController@store')->name('store_Contact');
Route::get('/contact/ajouter','ContactController@ajout')->name("ajouter_Contact");



Route::get('/devi/create','DeviController@create')->name('create_Devi');
Route::post('devi/create','DeviController@store')->name('store_Devi');
Route::get('/devi/ajouter','DeviController@ajout')->name("ajouter_Devi");






Route::get('/admin', 'AdminController@admin')->name('admin');





//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');





