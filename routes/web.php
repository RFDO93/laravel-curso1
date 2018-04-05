<?php

Route::get('/', function(){
  return 'Home';
});

Route::get('/usuarios','UserController@index')->name('users');

Route::get('/usuarios/nuevo','UserController@create')->name('users.create');

Route::get('/usuarios/editar/{id}','UserController@edit')->where('id','[0-9]+')->name('users.edit');

Route::get('/usuarios/{user}','UserController@show')->where('id','[0-9]+')->name('users.show');

Route::get('/saludos/{name}/{nickname?}', 'WelcomeUserController')->name('users.nick');
