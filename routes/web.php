<?php
Route::get('/', 'QuizController@index');
Route::get('/question','QuizController@question');
Route::post('/answer', 'QuizController@answer');
