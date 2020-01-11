<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    //模拟数据的添加
    public function run()
    {
        //清空
        Admin::truncate();
        //使用factory生成模拟数据
        factory(Admin::class,10)->create();
        //修改id为6的用户名
        Admin::where('id',6)->update(['username'=>'admin','truename'=>'张三']);
    }
}
