<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('blog.index');
// });

// Route::get('/contact', function () {
//     return view('blog.contact');
// });

// // Route::get('/newpost', function () {
// //     return view('blog.newpost');
// // });

// Route::get('/newpost',['as'=>'newpost','uses'=>'BlogController@newpost']);

// Route::get('/admin',['as'=>'admin','uses'=>'BlogController@admin']);


Route::controller('article', 'ArticleController');

Route::resource('admin/blogs', 'Backend\BlogsController');
