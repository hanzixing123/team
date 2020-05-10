  @extends('layouts.layout')
  @section('title', '用户修改')
  @section('content')
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<br>


<form class="form-horizontal" role="form"  action="{{url('/user/update/'.$name->user_id)}}" method="post" >
	@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-4 control-label">用户名</label>
		<div class="col-sm-5">
			<input type="text" name="user_name" value="{{$name->user_name}}" class="form-control" id="firstname" 
			placeholder="请输入用户名">
		</div>
	</div>
	<div class="form-group">
	<label for="lastname" class="col-sm-4 control-label">用户密码</label>
		<div class="col-sm-5">
			<input type="password" name="user_pwd" value="{{$name->user_pwd}}" class="form-control" id="lastname" 
			placeholder="请输入用户密码">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-10">
			<button type="submit" class="btn btn-default">修改</button>
		</div>
	</div>
</form>
@endsection