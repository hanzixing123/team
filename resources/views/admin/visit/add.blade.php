  @extends('layouts.layout')
  @section('title', '客户拜访添加')
 	
  @section('content')

	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br><br><br>
<form class="form-horizontal" action="{{'/visit/store'}}" method="post"   role="form">
		  @csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">业务员名称</label>
		<div class="col-sm-5">
				<select name="sale_id" class="form-control" id="firstname">
					<option value="">请选择业务员</option>
					@foreach($Salesman as $v)
					<option value="{{$v->sale_id}}">{{$v->sale_name}}</option>
					@endforeach
				</select>
				<b><font color='red'><h4>{{$errors->first('sale_id')}}</h4></font></b>
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户名称</label>
		<div class="col-sm-5">
				<select name="cust_id"class="form-control" id="firstname">
					<option value="">请选择客户</option>
					@foreach($Custom as $v)
					<option value="{{$v->cust_id}}">{{$v->cust_name}}</option>
					@endforeach
				</select>
				<b><font color='red'><h4>{{$errors->first('cust_id')}}</h4></font></b>	
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">访问人</label>
		<div class="col-sm-5">
			<input type="text" class="form-control"name="vis_name" id="firstname" 
				   placeholder="请输入访问人">
				<b><font color='red'><h4>{{$errors->first('vis_name')}}</h4></font></b>			   
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">访问地址</label>
		<div class="col-sm-5">
			<input type="text" class="form-control"name="vis_url" id="firstname" 
				   placeholder="请输入访问地址">
		<b><font color='red'><h4>{{$errors->first('vis_url')}}</h4></font></b>				   
		</div>
	</div>
<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">访问详情</label>
		<div class="col-sm-5">	
			<textarea name="vis_desc"class="form-control" id="firstname"></textarea>
				<b><font color='red'><h4>{{$errors->first('vis_desc')}}</h4></font></b>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" class="btn btn-default">添加</button>
		</div>
	</div>
	</form>




@endsection