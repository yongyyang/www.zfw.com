<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//模型

class LoginController extends Controller
{
    //登录显示
    public function index()
    {
        //如果用户已经登录，直接跳转后台首页
        if(auth()->check()){
            return redirect(route('admin.index'));
        }
        return view('admin.login.index');
    }
    //登录处理  常规方法
//    public function login(Request $request){
//        //表单验证
//        $data=$this->validate($request,[
//            'username'=>'required',
//            'password'=>'required'
//        ]);
//        //验证用户名是否存在
//        $user=Admin::where('username',$data['username'])->first();
//        if($user){
//            //验证密码是否正确
//            $res=Hash::check($data['password'],$user->password);
//            if($res){
//                //用户名和密码都正确，写入session,跳转首页
//                session(['admin.user'=>$user]);
//                return redirect(route('admin.index'));
//            }
//        }
//        return redirect()->back()->with('error','登录账号异常');
//    }
    //auth方法实现登录
    public function login(Request $request)
    {
        //表单验证
        $data = $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'code'=>'required|captcha'
        ]);
        //是否记住密码
        $online = $request->get('online') ? true : false;
        //实现登录 返回true/false
        unset($data['code']);
        $bool=auth()->attempt($data,$online);
        if(!$bool){
            return redirect()->back()->with('error','登录账号异常');
        }
        //记录登录ip
        $ip=$request->ip();
        //使用auth()中有一个user方法，返回当前登录的模型对象
        auth()->user()->update(['last_ip'=>$ip]);
        //登录成功，跳转
        return redirect(route('admin.index'));
    }
}
