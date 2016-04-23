<?php

Route::get('/', 'PostsController@index');

Route::post('posts', 'PostsController@create');

Route::get('posts/{id}/edit', 'PostsController@edit')->where('id', '[0-9]+');

Route::put('posts/{id}', 'PostsController@update');

Route::delete('posts/{id}', 'PostsController@delete');
