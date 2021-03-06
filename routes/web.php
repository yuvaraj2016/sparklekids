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

// use App\Http\Controllers\TestimonialsController;
// use App\Http\Response;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/config-clear', function() {
    $status = Artisan::call('config:clear');
    return '<h1>Configurations cleared</h1>';
});
Route::get('/cache-clear', function() {
    $status = Artisan::call('cache:clear');
    return '<h1>Cache cleared</h1>';
});
Route::get('/config-cache', function() {
    $status = Artisan::call('config:cache');
    return '<h1>Configurations cache cleared</h1>';
});

Route::get('/storage-link', function() {
    $status= shell_exec('cd .. && rm public/storage');
    $status = Artisan::call('storage:link');
    return $status;
});



Route::get('/','homecontroller@index');

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
Route::get('/test_sports', function () {
    return view('test_sports');
});

Route::get('contact-form', 'ContactController@getContact');

Route::post('contact-form', 'ContactController@saveContact');

Route::get('/gallery','AlbumController@index');

Route::get('/albums/{id}','PhotoController@index');

Route::get('/photos/{id}/{albumid}','PhotoController@show');


// Route::get('imager/{src?}', 'PhotoController@imageresize');
