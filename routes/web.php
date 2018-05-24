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

    $post=DB::table('posts')->orderBy('created_at','desc')->paginate(5);
    return view('/home')->with(compact('post'));
});

Auth::routes();
Route::middleware(['auth'])->group(function(){ //routes to be accessed once a user logs in
Route::resource('administration','AdminController')->middleware('is_admin');
Route::get('administration/view-posts/1','AdminController@viewPosts')->name('administration.viewPosts');
Route::get('administration/edit/update','AdminController@editPosts')->name('administration.editPosts');
Route::get('administration/posts/delete/','AdminController@deletePost')->name('administration.deletePost');



});
Route::get('/home/', 'HomeController@index')->name('home');
Route::resource('contact-us','ContactsController');
Route::resource('about-us','AboutUsController');
Route::resource('posts','PostController');

Route::get('posts/category/celebrities/','PostController@showCelebrities')->name('posts.showCelebrities');
Route::get('posts/category/politics','PostController@showPolitics')->name('posts.showPolitics');
Route::get('posts/category/sports','PostController@showSports')->name('posts.showSports');
Route::get('posts/category/trends','PostController@showTrends')->name('posts.showTrends');
Route::get('posts/category/campus-vibe','PostController@showCampusVibe')->name('posts.showCampusVibe');
Route::get('posts/category/relationships','PostController@showRelationships')->name('posts.showRelationships');
Route::get('posts/category/health','PostController@showHealth')->name('posts.showHealth');
Route::get('posts/category/betting-tips','PostController@showBettingTips')->name('posts.showBettingTips');
Route::get('posts/category/movies','PostController@showMovies')->name('posts.showMovies');
Route::get('posts/category/unclassified','PostController@showUnclassified')->name('posts.showUnclassified');

