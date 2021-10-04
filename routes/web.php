<?php
Auth::routes();
Route::get('/', function () { return view('welcome'); });


Route::middleware('auth')->group(function(){
    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::get('/posts/trashed', 'PostController@trashed')->name('posts.trashed');
    Route::delete('/posts/hdestroy/{post}', 'PostController@hdestroy')->name('posts.hdestroy');
    Route::get('/posts/restore/{post}', 'PostController@restore')->name('posts.restore');
    Route::get('/posts/create', 'PostController@create')->name('posts.create');
    Route::post('/posts', 'PostController@store')->name('posts.store');
    Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('/posts/{post}', 'PostController@update')->name('posts.update');
    Route::delete('/posts/{post}','PostController@destroy')->name('posts.destroy');

    Route::get('/category', 'categoryController@index')->name('category.index');
    Route::get('/category/create', 'categoryController@create')->name('category.create');
    Route::post('/category', 'categoryController@store')->name('category.store');
    Route::delete('/category/{id}','categoryController@destroy')->name('category.destroy');


    Route::get('logout', 'LoginController@logout');

    Route::get('land', 'landingController@index')->name('land');




    Route::get('/home', 'HomeController@index')->name('home');
});


