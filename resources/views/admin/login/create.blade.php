<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>后台登录</title>
  <meta name="author" content="DeathGhost" />
  <link rel="stylesheet" type="text/css" href="/static/Css/style.css" />
  <style>
    body{height:100%;background:#16a085;overflow:hidden;}
    canvas{z-index:-10;position:absolute;}
  </style>
  <script src="/static/Scripts/jquery.js"></script>
  <script src="/static/Scripts/verificationnumbers.js"></script>
  <script src="/static/Scripts/particleground.js"></script>
</head>
<body>
  <dl class="admin_login">
    <dt>
      <strong>站点后台管理系统</strong>
      <em>Yang wen long's background login</em>
    </dt> 
    <center>
      <font color=red><h1>{{session("get")}}</h1></font>
    </center>
    <form action="{{url('/logindes')}}" method="post">
      @csrf
      <dd class="user_icon">
        <input type="text"  name="user_name" placeholder="账号" class="login_txtbx"/>
      </dd>
      <dd class="pwd_icon">
        <input type="password" name="user_pwd" placeholder="密码" class="login_txtbx"/>
      </dd>
      <dd class="val_icon">
        <div class="checkcode">
          <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
          <canvas class="J_codeimg" id="myCanvas" onclick="createCode()" value='onclick="createCode()"'></canvas>
        </div>
        <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
      </dd>
      <dd>
        <input type="submit" value="立即登陆" class="submit_btn"/>
      </dd>
    </form>
    <dd>
      <p>© 2015-2016 DeathGhost 版权所有</p>
      <p>文 - 2382662404@qq.com -</p>
    </dd>
  </dl>
</body>
</html>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
      // dotColor: '#5cbdfa',
      dotColor: '#afccde',
      lineColor: '#5cbdfa'
  });
  //验证码
  createCode();
  // //验证码
  // $(".ver_btn").click(function(){
  //  var _this=$(this);
  //    var name=_this.val();
  //    console.log(name);
  // });
});
</script>