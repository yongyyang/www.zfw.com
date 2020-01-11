<?php

use Faker\Generator as Faker;
use App\Models\Admin;
$factory->define(Admin::class, function (Faker $faker) {
    return [
        'username'=>$faker->userName,
        'truename'=>$faker->name(),
        //密码加密
        'password'=>bcrypt('admin666'),
        'email'=>$faker->email,
        'phone'=>$faker->phoneNumber,
        'gender'=>['先生','女士'][rand(0,1)],
        'last_ip'=>$faker->ipv4
    ];
});
