<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('course',[
	'as'=>'trang-chu',
	'uses'=>'CourseController@getCourse'
	]);
Route::get('lesson/{id}', 'LessonController@getLesson')->name('lesson');
Route::get('words/{id}', 'WordController@getWord')->name('getword');
Route::get('flashcard/{id}', 'FlashcardController@getFlashcard')->name('start');

//Route::get('lesson/{id}','LessonController@getWord')->name('getword');
Route::get('card/{id}','CardController@getCard')->name('getCard');
Route::post('card/{id}','CardController@flipcard')->name('flip');

