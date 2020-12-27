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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pencegahan',function(){
    return view('pergaulanbebas/pencegahan');
});
Route::get('/faktor', function(){
    return view('pergaulanbebas/faktor');
});
Route::get('/profil', function(){
    return view('pergaulanbebas/profil');
});
Route::get('/dampak',function(){
    return view('pergaulanbebas/dampak');
});
Route::get('/pengertian',function(){
    return view('pergaulanbebas/pengertian');
});
Route::get('/contoh',function(){
    return view('pergaulanbebas/contoh');
});
Route::get('/artikel',function(){
    return view('pergaulanbebas/artikel');
});
Route::get('/makalah',function(){
    return view('pergaulanbebas/makalah');
});
Route::get('/animasi',function(){
    return view('pergaulanbebas/animasi');
});
Route::get('/pengertian/cetak_pdf', 'App\Http\Controllers\Controller@cetak_pdf');