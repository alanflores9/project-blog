<?php
Route::resource('/', 'HomeController');

Route::get('assistence', 'AssistenceController@view');
Route::resource('assistence-detail', 'AssistenceController');

