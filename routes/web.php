<?php

    // Početna
    Route::get('/', function()
    {
        return view('welcome');
    });


    // popis svih Items-a
    Route::get('/items', 'ItemsController@index');
	
    // dodavanje novog Item-a
    Route::get('/items/new', 'ItemsController@create');
    Route::post('/items/new', 'ItemsController@store');

    // prikaz određenog Item-a
    Route::get('/items/{id}', 'ItemsController@show');

    // uređivanje (edit) postojećeg Item-a
    Route::get('/item/{id}/edit', 'ItemsController@edit');
    Route::post('/item/{id}/edit', 'ItemsController@update');

    // brisanje Item-a
    Route::delete('/item/{id}', 'ItemsController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






