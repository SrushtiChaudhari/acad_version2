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
Route::get('/FacultyRegistration', 'PagesController@faculty_registration');

/*Routes for the Department Model*/
Route::resource('Department', 'DepartmentController');
Route::get('/show_edit/Department', 'PagesController@department_show_edit');
Route::get('/show_delete/Department', 'PagesController@department_show_delete');

/*Routes for the Course Model*/
Route::resource('Course', 'CourseController');
Route::get('/show_edit/Course', 'PagesController@course_show_edit');
Route::get('/show_delete/Course', 'PagesController@course_show_delete');

/*Routes for Curriculum Model*/
Route::resource('Curriculum', 'CurriculumController');
Route::get('/show_edit/Curriculum' ,'PagesController@curriculum_show_edit');
Route::get('/show_delete/Curriculum' ,'PagesController@curriculum_show_delete');

/*Routes for CourseCurriculumMapping Model*/
Route::resource('CourseCurriculumMapping', 'CourseCurriculumMappingController');
Route::get('/show_edit/CourseCurriculumMapping', 'PagesController@courseCurriculumMapping_show_edit');
Route::get('/show_delete/CourseCurriculumMapping', 'PagesController@courseCurriculumMapping_show_delete');

/*Routes for Program Model*/
Route::resource('Program', 'ProgramController');
Route::get('/show_edit/Program', 'PagesController@program_show_edit');
Route::get('/show_delete/Program', 'PagesController@program_show_delete');

/*Routes for Semester Model*/
Route::resource('Semester', 'SemesterController');
Route::get('/show_edit/Semester', 'PagesController@semester_show_edit');
Route::get('/show_delete/Semester', 'PagesController@semester_show_delete');
