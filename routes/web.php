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

Auth::routes([
    // 'register'=>false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/home','Admin\AdminController@index');
Route::get('/admin/login','Admin\LoginController@showLoginForm');
Route::post('/admin/login','Admin\LoginController@login')->name('admin.login');
Route::post('/admin/logout','Admin\LoginController@logout')->name('admin.logout');

// POST     | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest

// |        | GET|HEAD | password/confirm       | password.confirm   | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web,auth     |
// |        | POST     | password/confirm       |                    | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web,auth     |
// |        | POST     | password/email         | password.email     | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web          |
// |        | GET|HEAD | password/reset         | password.request   | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web          |
// |        | POST     | password/reset         | password.update    | App\Http\Controllers\Auth\ResetPasswordController@reset                | web          |
// |        | GET|HEAD | password/reset/{token} | password.reset     | App\Http\Controllers\Auth\ResetPasswordController@showResetForm
