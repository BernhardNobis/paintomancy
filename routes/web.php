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


/*route::get('/users/{id}', function($id){
    return 'this is user'.$id.'wow';
});*/

/* Route::get('/about', function(){
    return view('pages.about')
});
*/


Route::get('/', 'PagesController@index');
Route::post('/kontakt/sendmail', 'MailsController@sendmail');
Route::get('/kontakt', 'MailsController@kontakt');
//Route::get('/galerie/heresy-40K','PicturesController@heresy');
Route::get('/galerie/{name}','GaleryController@show');
Route::get('/galerie', 'GaleryController@index');


//Route::get('/galerie/heresy-40K/{id}','PicturesController@show');
Route::resource('galerie','GaleryController');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
