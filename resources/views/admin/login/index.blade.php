<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link href="/admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css"/>
    <title>好客租房-后台登录</title>
</head>
<body>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <!--闪存的提示-->
        @if(session()->has('error'))
            <div class="Huialert Huialert-error">{{session('error')}}</div>
        @endif
    <!--表单验证提示-->
        @if($errors->any())
            <ul class=" Huialert Huialert-error">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form class="form form-horizontal" action="" method="post">
            @csrf
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input id="" name="username" type="text" placeholder="用户名" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input id="" name="password" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input class="input-text size-L" type="text" placeholder="验证码"
                          name="code" style="width:150px;">
                    <img id="imgcode" src="{{captcha_src('mini')}}"> <a id="kanbuq">看不清，换一张</a></div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <label for="online">
                        <input type="checkbox" name="online" id="online" value="1">
                        使我保持登录状态</label>
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L"
                           value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L"
                           value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">Copyright 好客租房</div>
<script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script>
<script>
    let src=$('#imgcode').attr('src');
    $('#kanbuq').click(function () {
        $('#imgcode').attr('src',src+'?vt='+Date.now());
    })
</script>
</body>
</html>