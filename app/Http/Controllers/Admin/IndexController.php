<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台首页展示
    public function index(){
        return view('admin.index.index');
    }
    public function welcome(){
        return view('admin.index.welcome');
    }
    public function logout(){
        //退出
        auth()->logout();
        return redirect(route('admin.login'));
    }
}
