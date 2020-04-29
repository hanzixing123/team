  @extends('layouts.layout')
  @section('title', '客户添加')
  @section('content')
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<br>
<form class="form-horizontal" role="form">
	<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">名字</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="firstname" 
				   placeholder="请输入名字">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-3 control-label">姓</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="lastname" 
				   placeholder="请输入姓">
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">名字</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="firstname" 
				   placeholder="请输入名字">
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">名字</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="firstname" 
				   placeholder="请输入名字">
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">名字</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" id="firstname" 
				   placeholder="请输入名字">
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" class="btn btn-default">登录</button>
		</div>
	</div>
</form>
     @endsection