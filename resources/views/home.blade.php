<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="./assets/images/favicon.ico" rel="icon">
    <title>exercise</title>
    <link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
    <link rel="stylesheet" href="./assets/module/admin.css?v=314"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <!-- 头部 -->
    <div class="layui-header">
        <div class="layui-logo">
            <img src="./assets/images/logo.png"/>
            <cite>&nbsp;exercise </cite>
        </div>
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="flexible" title="侧边伸缩"><i class="layui-icon layui-icon-shrink-right"></i></a>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="refresh" title="刷新"><i class="layui-icon layui-icon-refresh-3"></i></a>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="message" title="消息">
                    <i class="layui-icon layui-icon-notice"></i>
                    <span class="layui-badge-dot"></span><!--小红点-->
                </a>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="note" title="便签"><i class="layui-icon layui-icon-note"></i></a>
            </li>
            <li class="layui-nav-item layui-hide-xs" lay-unselect>
                <a ew-event="fullScreen" title="全屏"><i class="layui-icon layui-icon-screen-full"></i></a>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a>
                    <img src="assets/images/head.png" class="layui-nav-img">
                    <cite>管理员</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd lay-unselect>
                        <a ew-href="page/template/user-info.html">个人中心</a>
                    </dd>
                    <dd lay-unselect>
                        <a ew-event="psw">修改密码</a>
                    </dd>
                    <hr>
                    <dd lay-unselect>
                        <a ew-event="logout" data-url="page/template/login.html">退出</a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item" lay-unselect>
                <a ew-event="theme" title="主题"><i class="layui-icon layui-icon-more-vertical"></i></a>
            </li>
        </ul>
    </div>

    <!-- 侧边栏 -->
    <div class="layui-side">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree arrow2" lay-filter="admin-side-nav" lay-accordion="true"
                style="margin-top: 15px;">
                <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-home"></i>&emsp;<cite>Dashboard</cite></a>
                    <dl class="layui-nav-child">
                        <dd><a lay-href="/welcome">欢迎页</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-set"></i>&emsp;<cite>系统管理</cite></a>
                    <dl class="layui-nav-child">
                        <dd><a lay-href="/users">用户管理</a></dd>
                        <dd><a lay-href="page/system/role.html">角色管理</a></dd>
                        <dd><a lay-href="page/system/authorities.html">菜单管理</a></dd>
                        <dd><a lay-href="page/system/loginRecord.html">登录日志</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-template"></i>&emsp;<cite>模板页面</cite></a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a>表单页</a>
                            <dl class="layui-nav-child">
                                <dd><a lay-href="page/template/form/form-basic.html">基础表单</a></dd>
                                <dd><a lay-href="page/template/form/form-advance.html">复杂表单</a></dd>
                                <dd><a lay-href="page/template/form/form-step.html">分步表单</a></dd>
                            </dl>
                        </dd>
                        <dd>
                            <a>表格页</a>
                            <dl class="layui-nav-child">
                                <dd><a lay-href="page/template/table/table-basic.html">数据表格</a></dd>
                                <dd><a lay-href="page/template/table/table-advance.html">复杂查询</a></dd>
                                <dd><a lay-href="page/template/table/table-ltrt.html">左树右表</a></dd>
                                <dd><a lay-href="page/template/table/table-img.html">表格缩略图</a></dd>
                            </dl>
                        </dd>
                        <dd>
                            <a>错误页</a>
                            <dl class="layui-nav-child">
                                <dd><a lay-href="page/template/error/error-500.html">500</a></dd>
                                <dd><a lay-href="page/template/error/error-404.html">404</a></dd>
                                <dd><a lay-href="page/template/error/error-403.html">403</a></dd>
                            </dl>
                        </dd>
                        <dd><a lay-href="page/template/user-info.html">个人中心</a></dd>
                        <dd><a lay-href="page/template/empty.html">空白页面</a></dd>
                        <dd><a href="page/template/login.html" target="_blank">登录页面</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-component"></i>&emsp;<cite>扩展组件</cite></a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a>常用组件</a>
                            <dl class="layui-nav-child">
                                <dd><a lay-href="page/plugin/basic/dialog.html">弹出层</a></dd>
                                <dd><a lay-href="page/plugin/basic/dropdown.html">下拉菜单</a></dd>
                                <dd><a lay-href="page/plugin/basic/cascader.html">级联选择器</a></dd>
                                <dd><a lay-href="page/plugin/basic/notice.html">消息通知</a></dd>
                                <dd><a lay-href="page/plugin/basic/tips.html">文字提示</a></dd>
                                <dd><a lay-href="page/plugin/basic/tagsInput.html">标签输入</a></dd>
                                <dd><a lay-href="page/plugin/basic/split.html">分割面板</a></dd>
                            </dl>
                        </dd>
                        <dd>
                            <a>进阶组件</a>
                            <dl class="layui-nav-child">
                                <dd><a lay-href="page/plugin/advance/tableX.html">表格扩展</a></dd>
                                <dd><a lay-href="page/plugin/advance/printer.html">打印插件</a></dd>
                                <dd><a lay-href="page/plugin/advance/ckeditor.html">富文本编辑</a></dd>
                                <dd><a lay-href="page/plugin/advance/mdeditor.html">Markdown</a></dd>
                                <dd><a lay-href="page/plugin/advance/player.html">视频播放器</a></dd>
                                <dd><a lay-href="page/plugin/advance/introJs.html">引导插件</a></dd>
                            </dl>
                        </dd>
                        <dd>
                            <a>工具组件</a>
                            <dl class="layui-nav-child">
                                <dd><a lay-href="page/plugin/util/contextMenu.html">ContextMenu</a></dd>
                                <dd><a lay-href="page/plugin/util/mousewheel.html">MouseWheel</a></dd>
                                <dd><a lay-href="page/plugin/util/other.html">其他</a></dd>
                            </dl>
                        </dd>
                        <dd><a lay-href="page/plugin/more.html">更多扩展</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-app"></i>&emsp;<cite>经典实例</cite></a>
                    <dl class="layui-nav-child">
                        <dd><a lay-href="page/example/dialog.html">弹窗实例</a></dd>
                        <dd><a lay-href="page/example/form.html">表单实例</a></dd>
                        <dd><a lay-href="page/example/file.html">文件管理</a></dd>
                        <dd><a lay-href="page/example/table-crud.html">表格CRUD</a></dd>
                        <dd><a href="page/example/side-more.html" target="_blank">多系统模式</a></dd>
                        <dd><a href="page/example/side-ajax.html" target="_blank">Ajax侧边栏</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-release"></i>&emsp;<cite>LayUI组件</cite></a>
                    <dl class="layui-nav-child">
                        <dd><a lay-href="https://www.layui.com/demo/button.html">组件演示</a></dd>
                        <dd><a lay-href="https://www.layui.com/doc/element/button.html#use">layui文档</a></dd>
                        <dd><a lay-href="https://layer.layui.com/">layer弹窗组件</a></dd>
                        <dd><a lay-href="https://www.layui.com/laydate/">laydate日期组件</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-unlink"></i>&emsp;<cite>多级菜单</cite></a>
                    <dl class="layui-nav-child">
                        <dd><a>二级菜单</a></dd>
                        <dd>
                            <a>二级菜单</a>
                            <dl class="layui-nav-child">
                                <dd><a>三级菜单</a></dd>
                                <dd>
                                    <a>三级菜单</a>
                                    <dl class="layui-nav-child">
                                        <dd><a>四级菜单</a></dd>
                                        <dd>
                                            <a>四级菜单</a>
                                            <dl class="layui-nav-child">
                                                <dd><a>五级菜单</a></dd>
                                                <dd>
                                                    <a lay-href="https://baidu.com">百度一下</a>
                                                </dd>
                                            </dl>
                                        </dd>
                                    </dl>
                                </dd>
                            </dl>
                        </dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a lay-href="//baidu.com"><i class="layui-icon layui-icon-unlink"></i>&emsp;<cite>一级菜单</cite></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- 主体部分 -->
    <div class="layui-body">
        <div class="layui-card-body" style="text-align: center;">
            <h2 style="margin-top: 170px;margin-bottom: 20px;font-size: 28px;color: #91ADDC;">欢迎使用EasyWeb管理系统 !</h2>
            <img src="../../assets/images/welcome.png" style="max-width: 100%;">
        </div>
    </div>
    <!-- 底部 -->
    <div class="layui-footer">
        copyright © 2019 <a href="http://exercise.vip" target="_blank">exercise</a> all rights reserved.
        <span class="pull-right">Version 3.1.4</span>
    </div>
</div>

<!-- 加载动画 -->
<div class="page-loading">
    <div class="ball-loader">
        <span></span><span></span><span></span><span></span>
    </div>
</div>

<!-- js部分 -->
<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="./assets/js/common.js?v=314"></script>
<script>
    layui.use(['index'], function () {
        var $ = layui.jquery;
        var index = layui.index;

        // 默认加载主页
        index.loadHome({
            menuPath: '/welcome',
            menuName: '<i class="layui-icon layui-icon-home"></i>'
        });

    });
</script>
</body>
</html>
