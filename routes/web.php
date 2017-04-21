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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

/*
 *
 * Banner
 *
 * */
Route::resource('/banner', 'BannerController');


/*
 *
 * Berita
 *
 * */
Route::resource('/berita', 'BeritaController');
Route::post('/komentar', 'BeritaController@comment')->name('komentar.store');



/*
 * Peraturan
 * */
Route::resource('/peraturan', 'PeraturanController');



/*
 * Sejarah
 * */
Route::get('/sejarah', function (){
    return view('tentang.sejarah');
});



/*
 * Visi dan Misi
 * */

Route::get('/visimisi', function (){
    return view('tentang.visimisi');
});


/*
 * Struktur Organisasi
 * */

Route::get('/struktur', function (){
    return view('tentang.struktur');
});


/*
 * Tanya Jawab
 * */
Route::resource('/tanyajawab', 'TanyaJawabController');
Route::post('/tanyajawab/komentar', 'TanyaJawabController@comment');
