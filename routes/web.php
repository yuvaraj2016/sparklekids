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

<<<<<<< HEAD
use App\Http\Controllers\TestimonialsController;
=======
use App\Http\Response;
>>>>>>> 3ce6937f6026c01ece3aec86433ba06156b93dd6

Route::get('/', function () {
    return view('index');
});
Route::get('/about_sparkle_kidss', function () {
    return view('about_sparkle_kidss');
});
Route::get('/curriculam_summary', function () {
    return view('curriculam_summary');
});
Route::get('/contact_form', function () {
    return view('contact_form');
});
Route::get('/testimonial','TestimonialsController@index');
Route::get('/testimonial/{id}','TestimonialsController@show');
Route::get('/test_children', function () {
    return view('test_children');
});
Route::get('/test_teacher', function () {
    return view('test_teacher');
});
Route::get('/test_sportsr', function () {
    return view('test_sports');
});
Route::get('contact-form', 'ContactController@getContact');
Route::post('contact-form', 'ContactController@saveContact');

Route::get('/gallery','AlbumController@index');

Route::get('/albums/{id}','PhotoController@index');


// Route::get('imager/{src?}', 'PhotoController@imageresize');
