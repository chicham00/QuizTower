<?php

Route::get('/', 'QuizController@index');
Route::get('/question', 'QuizController@question');
Route::get('/answer', 'QuizController@answer');
