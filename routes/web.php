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
//后台模块
Route::group(['prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function (){
    //后台登录显示
    Route::get('login','LoginController@index')->name('login');
    //后台登录处理
    Route::post('login','LoginController@login')->name('login');
    Route::group(['middleware'=>['checkadminlogin']],function (){
        // 后台首页
        Route::get('index', 'IndexController@index')->name('index');
        // 欢迎页
        Route::get('welcome', 'IndexController@welcome')->name('welcome');

        // 后台用户退出
        Route::get('logout','IndexController@logout')->name('logout');

    });
});