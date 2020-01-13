<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;
class Admin extends User
{
    //软删除
    use SoftDeletes;
    //指明软删除的字段名
    protected $dates=['deleted_at'];
    //黑名单
    protected $guarded=[];
}
