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

Route::get('/', 'PagesController@welcome')->name('welcome');
Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('faqs', 'PagesController@faq')->name('faq');
Route::get('search', 'PagesController@search')->name('search');
Route::prefix('country')->group(function () {
    Route::get('create', 'CountryController@create')->name('country.create');
    Route::post('create', 'CountryController@store')->name('country.store');
    Route::get('index', 'CountryController@index')->name('country.index');
    Route::delete('delete/{id}', 'CountryController@destroy')->name('country.delete');
});
Route::prefix('universities')->group(function () {
    Route::get('create', 'UniversityController@create')->name('university.create');
    Route::post('create', 'UniversityController@store')->name('university.store');
    Route::get('/', 'UniversityController@index')->name('university.index');
    Route::get('/{id}', 'UniversityController@show')->name('university.show');
    Route::delete('delete/{id}', 'UniversityController@destroy')->name('university.delete');
});
Route::prefix('program')->group(function () {
    Route::get('create', 'ProgramController@create')->name('program.create');
    Route::post('create', 'ProgramController@store')->name('program.store');
    Route::get('index', 'ProgramController@index')->name('program.index');
    Route::delete('delete/{id}', 'ProgramController@destroy')->name('program.delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
