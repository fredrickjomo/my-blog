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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::middleware(['auth'])->group(function(){ //routes to be accessed once a user logs in
Route::resource('blog-administration','AdminController')->middleware('is_admin');



});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('contact-us','ContactsController');
Route::resource('about-us','AboutUsController');
Route::resource('category','PostsController');
Route::get('category/celebrities/1','PostsController@showCelebrities')->name('category.showCelebrities');
Route::get('category/politics/2','PostsController@showPolitics')->name('category.showPolitics');
Route::get('category/sports/3','PostsController@showSports')->name('category.showSports');
Route::get('category/trends/4','PostsController@showTrends')->name('category.showTrends');
Route::get('category/campus-vibe/5','PostsController@showCampusVibe')->name('category.showCampusVibe');
Route::get('category/relationships/6','PostsController@showRelationships')->name('category.showRelationships');
Route::get('category/health/7','PostsController@showHealth')->name('category.showHealth');
Route::get('category/betting-tips/8','PostsController@showBettingTips')->name('category.showBettingTips');
Route::get('category/movies/9','PostsController@showMovies')->name('category.showMovies');
Route::get('category/unclassified/10','PostsController@showUnclassified')->name('category.showUnclassified');

