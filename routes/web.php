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

Route::get('/', 'PagesController@home');
Route::get('/StudentRegistration', 'PagesController@student_registration');
Route::get('/FacultyRegistration', 'PagesController@faculty_registration');

Route::resource('Student', 'StudentController');
