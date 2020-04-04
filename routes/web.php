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

Route::get('/', 'PagesController@index');
Route::get('/start', 'PagesController@getstarted');
Route::get('/about', 'PagesController@about');
Route::get('admin/', 'PagesController@admin');
Route::get('cand/', 'PagesController@cand');
Route::get('votes/', 'TestController@matokeo');

Route::post('/candidate/store',[
  'uses' =>'CandController@addCand',
  'as' =>'cand.store'
]);

Route::get('/voting',[
  'uses' =>'PagesController@candis',
])->middleware('VoteOnce');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::POST('/selected-vote', 'TestController@saveVote')->name('save.vote');
Route::POST('/selected-user', 'TestController@saveUser')->name('save.selected-user');
