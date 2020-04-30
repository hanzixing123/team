<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>团队-@yield('title')</title>
<meta name="keywords" content="html5后台管理模板,企业后台模板,cms后台管理系统,cms网站管理系统,cms后台模板" />
<meta name="description" content="绿色清爽的HTML5通用后台管理系统模板。" />
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/static/css/style.css">
<!--[if lt IE 9]>
<script src="/static/Scripts/html5.js"></script>
<![endif]-->
<script src="/static/Scripts/jquery.js"></script>
<script src="/static/Scripts/jquery.mcustomscrollbar.concat.min.js"></script>
<script>

	(function($){
		$(window).load(function(){
			
			$("a[rel='load-content']").click(function(e){
				e.preventDefault();
				var url=$(this).attr("href");
				$.get(url,function(data){
					$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
					//scroll-to appended content 
					$(".content").mCustomScrollbar("scrollTo","h2:last");
				});
			});
			
			$(".content").delegate("a[href='top']","click",function(e){
				e.preventDefault();
				$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
			});
			
		});
	})(jQuery);
</script>
</head>
<body>
<!--header-->
<header>
 <h1><img src="/static/Picture/admin_logo.png"/></h1>
 <ul class="rt_nav">
  <li><a href="http://www.deathghost.cn" target="_blank" class="website_icon">站点首页</a></li>
  <li><a href="#" class="clear_icon">清除缓存</a></li>
  <li><a href="#" class="admin_icon">DeathGhost</a></li>
  <li><a href="#" class="set_icon">账号设置</a></li>
  <li><a href="login.html" class="quit_icon">安全退出</a></li>
 </ul>
</header>
<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <h2><a href="{{url('/')}}">起始页</a></h2>
 <ul>
  <li>
   <dl>
    <dt>客户管理</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="{{url('/custom/add')}}" >新增客户</a></dd>
    <dd><a href="{{url('/custom/')}}">客户列表</a></dd>
   </dl>
  </li>
    <li>
   <dl>
    <dt>客户拜访管理</dt>
    <dd><a href="{{url('/visit/add')}}">新增客户拜访</a></dd>
    <dd><a href="{{url('/visit/')}}">客户拜访列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>业务员管理</dt>
    <dd><a href="{{url('/salesman/add')}}">业务员添加</a></dd>
    <dd><a href="{{url('/salesman/')}}">业务员列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>综合查询</dt>
    <dd><a href="{{'/recycle'}}">客户信息查找</a></dd>
    <dd><a href="{{'/recycle/reds'}}">客户拜访信息查找</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>统计分析</dt>
    <dd><a href="{{'/'}}">客户行业统计</a></dd>
    <dd><a href="{{'/'}}">客户来源统计</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>系统管理</dt>
    <dd><a href="{{'/user/add'}}">用户新增</a></dd>
    <dd><a href="{{'/user/index'}}">用户管理</a></dd>
   </dl>
  </li>
 </ul>
</aside>
@yield('content')