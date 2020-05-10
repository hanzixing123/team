  @extends('layouts.layout')
  @section('title', '用户新增')
  @section('content')
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<br>


<form class="form-horizontal" role="form"  action="{{url('/user/store')}}" method="post" >
	@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-4 control-label">用户名</label>
		<div class="col-sm-5">
			<input type="text" name="user_name" class="form-control" id="firstname" 
			placeholder="请输入用户名">
			<font color=red>{{$errors->first("user_name")}}</font>
		</div>
	</div>
	<div class="form-group">
	<label for="lastname" class="col-sm-4 control-label">用户密码</label>
		<div class="col-sm-5">
			<input type="password" name="user_pwd" class="form-control" id="lastname" 
			placeholder="请输入用户密码">
			<font color=red>{{$errors->first("user_pwd")}}</font>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-4 control-label">等级</label>
		<div class="col-sm-5">
			<select name="user_del" class="form-control" id="firstname">
				<option value="">请选择</option>
				<option value="2">业务员</option>
				<option value="3">主管</option>
				<option value="1">系统主管</option>
			</select>
			<font color=red>{{$errors->first("user_del")}}</font>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-4 control-label">请输入注册密码</label>
		<div class="col-sm-5">
			<input type="password" name="user_pan" class="form-control" id="lastname">
			<font color=red>{{session("git")}}</font>
			<font color=red>{{$errors->first("user_pan")}}</font>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-10">
			<button type="submit" class="btn btn-default">添加</button>
		</div>
	</div>
</form>
@endsection