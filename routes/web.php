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


Route::get('/', 'pagesController@home' );
Route::get('/about', 'pagesController@about' )->name('about');
Route::get('/contact', 'pagesController@contact' );

Route::resource('projects', 'projectsController');
Route::put('projects/{id}/complete', 'projectsController@finish');

Route::resource('tasks', 'tasksController');

Auth::routes();
