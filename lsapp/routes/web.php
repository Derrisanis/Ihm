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

Route::get('/','PagesController@welcomePage');
Route::get('/welcome','PagesController@index');
Route::resource('Post','PostsController');
Route::any('/search','SearchController@search');
Route::get('/form','PagesController@formPage');

/*
Route::get('/hello', function () {
    return '<h1>hello world</h1>';
    
});Route::get('/about/{id}/{name}',function($id,$name){

    return 'this is user '.$name.' with an id '.$id;
    });Route::get('/about',function(){

return view('pages.about');
});
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
