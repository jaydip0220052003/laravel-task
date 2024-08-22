<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('admin/login', function () {
//     return view('adminlogin');
// });
Route::get('admin','App\Http\Controllers\adminlogin@admin')->name('admin');
Route::post('adminp','App\Http\Controllers\adminlogin@adminpp');

Route::get('home','App\Http\Controllers\adminlogin@home')->name('home');
Route::get('employelist','App\Http\Controllers\adminlogin@employelist')->name('employelist');

Route::get('addemploye','App\Http\Controllers\adminlogin@addemploye')->name('addemploye');
Route::post('addemployep','App\Http\Controllers\adminlogin@addemploye2');

Route::get('edit/{id}','App\Http\Controllers\adminlogin@edits')->name('edit');
Route::patch('updatep/{id}','App\Http\Controllers\adminlogin@update')->name('update');

Route::get('/logout', 'App\Http\Controllers\adminlogin@logout')->name('logout');
Route::get('departmentlist','App\Http\Controllers\adminlogin@departmentlist')->name('departmentlist');

Route::get('/addnewdep', 'App\Http\Controllers\adminlogin@addnewdep')->name('addnewdep');
Route::post('addepp', 'App\Http\Controllers\adminlogin@addnedepp2');

Route::get('/report', 'App\Http\Controllers\adminlogin@report')->name('report');

