<?php
Route::get('/', 'QuizController@index');
Route::get('/question/{category_id}','QuizController@question');
Route::post('/answer', 'QuizController@answer');
