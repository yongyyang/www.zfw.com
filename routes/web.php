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
    Route::post('login','LoginController@login')->name('login')->middleware('loginlog');
    Route::group(['middleware'=>['checkadminlogin']],function (){
        // 后台首页
        Route::get('index', 'IndexController@index')->name('index');
        // 欢迎页
        Route::get('welcome', 'IndexController@welcome')->name('welcome');

        // 后台用户退出
        Route::get('logout','IndexController@logout')->name('logout');
        //用户管理
        //用户列表
        Route::get('user/index','AdminController@index')->name('admin.index');
        //添加用户显示
        Route::get('user/create','AdminController@create')->name('admin.create');
        //添加用户处理
        Route::post('user/store','AdminController@store')->name('admin.store');
        //修改用户显示
        Route::get('user/edit/{id}','AdminController@edit')->name('admin.edit');
        //修改用户处理
        Route::put('user/update/{id}','AdminController@update')->name('admin.update');
        //删除单个用户
        Route::delete('user/del/{id}','AdminController@del')->name('admin.del');
        //删除所选用户
        Route::get('user/delAll','AdminController@delAll')->name('admin.delAll');
        //恢复单个用户
        Route::get('user/restore/{id}','AdminController@restore')->name('admin.restore');
        //个人信息展示
        Route::get('center/{id}','AdminController@center')->name('center');
    });
});