<?php

use Illuminate\Support\Facades\Route;

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
//RegistrationController
Route::get('/signUp','RegistrationController@create');
Route::post('/signUp','RegistrationController@store');
//LoginController
Route::get('/loginUser','LoginController@create');
Route::post('/loginUser','LoginController@login');
Route::get('/logout','LoginController@logout');
// Ai processing a use korle hobe
 Route::get('/','FrontendController@View');
//DepartmentController
 Route::resource('departments','DepartmentController');
//or eta
 //Route::resource('departments','DepartmentController');

 //StudentController
 Route::resource('students','StudentController');

 //AdmissionControler
 Route::resource('admissions','AdmissionController');
 //Category Controller
 Route::resource('categories','Admin\CategoryController');
 //Post Controller
 Route::resource('posts','Admin\PostController');
 //Blog Controller
 Route::get('/blogs','Frontend\BlogController@index');
 Route::get('/blogDetails/{id}','Frontend\BlogController@details');
 //Comment Controller
 Route::post('/comment','Frontend\CommentController@store');
 //About backend Controller
 Route::resource('abouts','Admin\AboutController');
 //About frontend Controller
 Route::get('/abouts','Frontend\AboutController@index');
 //Contact Controller
 // Route::get('/contacts','Admin\ContactController@index');
 // Route::get('/contacts/delete/{id}','Admin\ContactController@destroy');
 Route::resource('contacts','Admin\ContactController');
 // Route::get('/contacts','Frontend\ContactController@index');
 Route::get('/contacts/create','Frontend\ContactController@create');
 Route::post('/contacts','Frontend\ContactController@store');
 
 //Order Controller multiple data
 Route::resource('multipleDataView','Admin\OrderController');
 Route::get('items/{id}','Admin\OrderController@items');
//Student admin JSON Controller
Route::get('/studentView','Admin\StudentController@index');
Route::get('/jsonStudents','Admin\StudentController@viewStudent');