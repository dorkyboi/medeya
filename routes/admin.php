<?php

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

Route::post('set-locale', function (Request $request) {
    $request->validate([
        'locale' => ['required', Rule::in(config('app.locales'))],
    ]);

    session()->put('locale', $request->post('locale'));
    return back();
})->name('set-locale');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\AdminLoginController@login');

    Route::middleware(['admin.auth', 'can:access admin panel'])->group(function () {
        Route::redirect('/', '/admin/homepage');

        Route::view('homepage', 'pages.admin.homepage')->name('homepage.index');
        Route::resource('users', 'Admin\UserController')->except(['destroy']);

        Route::post('logout', 'Auth\AdminLoginController@logout')->name('logout');
    });
});
