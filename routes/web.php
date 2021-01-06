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
    return view('top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('profile','ProfileController',['only'=>['store','create']]);

Route::resource('mypage','MypageController',['only'=>['index']]);
Route::get('mypage/send','MypageController@send')->name('mypage.send');
Route::get('mypage/favorite','MypageController@favorite')->name('mypage.favorite');
Route::get('mypage/good','MypageController@good')->name('mypage.good');
Route::get('mypage/follow','MypageController@follow')->name('mypage.follow');




Route::get('mypage/edit','MypageController@edit');  
Route::post('mypage/edit', 'MypageController@update');
Route::get('mypage/profile','MypageController@ProfileEdit');
Route::post('mypage/profile', 'MypageController@ProfileUpdate');
Route::get('mypage/member', 'MypageController@show');

Route::get('band','SearchController@index')->name('band.index');
Route::group(['middleware' => 'auth'], function(){
    Route::get('band/{id}','BandController@show');   
    Route::get('band/ajax/{id}/favorites','FavoriteController@store');
    Route::get('band/ajax/{id}/unfavorites','FavoriteController@destroy');
    Route::get('band/ajax/{id}/countfavorites','FavoriteController@count');
    Route::get('band/ajax/{id}/hasfavorites','FavoriteController@hasfavorite'); 
    
});
Route::get('ajax/band/{id}/favorites','FavoriteController@store');
Route::get('ajax/band/{id}/unfavorites','FavoriteController@destroy');
Route::get('ajax/band/{id}/countfavorites','FavoriteController@count');
Route::get('ajax/band/{id}/hasfavorites','FavoriteController@hasfavorite'); 





Route::get('mypage/ajax/favorite/{id}/favorites','FavoriteController@store');
Route::get('mypage/ajax/favorite/{id}/unfavorites','FavoriteController@destroy');
Route::get('mypage/ajax/favorite/{id}/countfavorites','FavoriteController@count');
Route::get('mypage/ajax/favorite/{id}/hasfavorites','FavoriteController@hasfavorite');

Route::get('mypage/ajax/good/{id}/favorites','FavoriteController@store');
Route::get('mypage/ajax/good/{id}/unfavorites','FavoriteController@destroy');
Route::get('mypage/ajax/good/{id}/countfavorites','FavoriteController@count');
Route::get('mypage/ajax/good/{id}/hasfavorites','FavoriteController@hasfavorite');


Route::post('band/{id}','CommentController@store');


Route::group(['middleware' => 'auth'], function() {
    Route::get('ajax/message','Ajax\MessageController@index');
    Route::post('ajax/message','Ajax\MessageController@create');

    Route::get('chat/{recieve}','ChatController@index')->name('chat');
    Route::get('chat/ajax/{recieve}','Ajax\ChatController@index');
    Route::post('chat/ajax/{recieve}','Ajax\ChatController@create')->name('chatSend');

    Route::get('message','ThreadController@index');
    // スレッド関連
    Route::resource('thread', 'ThreadController');
    
    // ポスト関連
    Route::resource('post', 'PostController');

    Route::resource('meetings','Zoom\MeetingController');

});

