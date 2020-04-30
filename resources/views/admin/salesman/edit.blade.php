  @extends('layouts.layout')
  @section('title', '业务员修改')
  @section('content')
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<br>


<form class="form-horizontal" role="form"  action="{{url('/salesman/update/'.$sale->sale_id)}}" method="post" >
	@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-4 control-label">业务员姓名</label>
		<div class="col-sm-5">
			<input type="text" name="sale_name" class="form-control" id="firstname" 
				    value="{{$sale->sale_name}}">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-4 control-label">业务员性别</label>
		<div class="col-sm-5">
			<input type="text" name="sale_sex" class="form-control" id="lastname" 
				   value="{{$sale->sale_sex}}">
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-4 control-label">业务员办公电话</label>
		<div class="col-sm-5">
			<input type="text" name="sale_phone" class="form-control" id="firstname" 
				   value="{{$sale->sale_phone}}">
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-4 control-label">业务员手机号码</label>
		<div class="col-sm-5">
			<input type="text" name="sale_tel" class="form-control" id="firstname" 
				   value="{{$sale->sale_tel}}">
		</div>
	</div>
		


	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" class="btn btn-default">修改</button>
		</div>
	</div>
</form>

     @endsection