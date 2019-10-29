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

//laaaaaaaaaaaa

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
	return abort(404);
});
Route::get('/home', 'CourseController@showCourse')->name('home');
Route::get('team.create', 'TeamController@createTeam')->name('createTeam');
Route::post('team.store', 'TeamController@store')->name('storeTeam');

Route::group(['middleware' => ['auth', 'admin']], function () {
	Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('/admin/login', 'Auth\LoginController@login')->name('admin.login.submit');
//Route::get('/', 'CourseController@showAdminCourse')->name('admin.dashboard');
	Route::get('/file', "UploadFileController@index")->name('viewfile');
	Route::get('file.upload/{id}', "UploadFileController@create");
	Route::get('course.create', 'CourseController@createCourse')->name('createCourse');
	Route::post('course.store', 'CourseController@store')->name('storeCourse');
	Route::post('file.upload/{id}', "UploadFileController@store");
	Route::delete('/file/{id}', "UploadFileController@destroy")->name('deletefile');
	Route::get('/file/download/{id}', "UploadFileController@show")->name('downloadfile');
	Route::get('/course/edit/{id}', 'CourseController@edit')->name('editcourse');
	Route::patch('/course/update/{id}', 'CourseController@update')->name('updatecourse');
	Route::get('/course.delete/{id}', 'CourseController@destroy')->name('deletecourse');
	Route::get('/file.view/{id}', 'UploadFileController@view');
	Route::get('team.view', 'TeamController@index')->name('viewteam');
});

Route::get('course.mycourse', 'CourseController@showMyCourse')->name('myCourse');
Route::get('course.enroll/{id}', 'CourseController@enroll');
Route::post('course.enroll/{id}', 'CourseController@enroll');
Route::get('/fileUser', "UploadFileController@indexUser");
Route::get('/file.viewuser/{id}', 'UploadFileController@viewUser');
Route::get('/fileUser/download/{id}',"UploadFileController@show")->name('downloadfileUser');
