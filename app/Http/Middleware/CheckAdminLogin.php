<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //检查用户是否登录
        if(!auth()->check()){
            return redirect(route('admin.login'))->with('error','请先登录');
        }
        return $next($request);
    }
}
