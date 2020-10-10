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

Route::get('/',[
    'uses'  => 'indexController@index',
        'as'=>'/'
    ]);

Route::get('/gallery',[
    'uses'  => 'indexController@menuGallery',
        'as'=>'/gallery'
    ]);

Route::get('/blog',[
    'uses'  => 'indexController@menuBlog',
        'as'=>'/blog'
    ]);

Route::get('/about',[
    'uses'  => 'indexController@menuAbout',
        'as'=>'/about'
    ]);

Route::get('/contact',[
    'uses'  => 'indexController@menuContact',
        'as'=>'/contact'
    ]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
