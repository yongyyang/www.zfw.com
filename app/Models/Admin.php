<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
class Admin extends User
{
    //黑名单
    protected $guarded=[];
}
