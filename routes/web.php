<?php

Route::get('/', function(){
  return 'Home';
});

Route::get('/usuarios','UserController@index');

Route::get('/usuarios/nuevo','UserController@create');

Route::get('/usuarios/editar/{id}','UserController@edit')->where('id','[0-9]+');

Route::get('/usuarios/{id}','UserController@show')->where('id','[0-9]+');

Route::get('/saludos/{name}/{nickname?}', 'WelcomeUserController');
