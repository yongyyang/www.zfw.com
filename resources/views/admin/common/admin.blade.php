<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    {{-- 后台公共样式 --}}
    <link href="/admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/static/h-ui.admin/css/H-ui.admin.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/style.css" />
    <title>好客租房-后台管理系统</title>
    @yield('css')
</head>
<body>
<div class="page-container">
    @yield('cnt')
</div>
<script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
@yield('js')
</body>
</html>
