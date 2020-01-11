<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',50)->comment('用户名');
            $table->string('truename',50)->default('保密')->comment('真实姓名');
            $table->string('password',255)->comment('密码');
            $table->string('email',50)->default('')->comment('邮箱');
            $table->string('phone',15)->default('')->comment('电话');
            $table->enum('gender',['先生','女士'])->default('先生')->comment('性别');
            $table->char('last_ip',15)->default('')->comment('登录IP');
            $table->timestamps();
            //记住密码
            $table->rememberToken();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
