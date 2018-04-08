<?php

Route::get('/', function(){
  return 'Home';
});

Route::get('/usuarios','UserController@index')->name('users');

Route::get('/usuarios/nuevo','UserController@create')->name('users.create');

Route::get('/usuarios/{user}/editar','UserController@edit')->where('id','[0-9]+')->name('users.edit');

Route::delete('/usuarios/{user}','UserController@delete')->where('id','[0-9]+')->name('users.delete');

Route::put('/usuarios/{user}','UserController@update')->where('id','[0-9]+')->name('users.update');

Route::get('/usuarios/{user}','UserController@show')->where('id','[0-9]+')->name('users.show');

Route::get('/saludos/{name}/{nickname?}', 'WelcomeUserController')->name('users.nick');

Route::post('/usuarios/nuevo', 'UserController@store')->name('users.crear');
