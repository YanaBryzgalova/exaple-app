<?php

Route::post('/upload-data', 'DataController@uploadData');
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login'); 
