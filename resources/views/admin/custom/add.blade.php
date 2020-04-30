  @extends('layouts.layout')
  @section('title', '客户添加')
  @section('content')
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<br>
<form class="form-horizontal" action="{{'/custom/store'}}" method="post"   role="form">
		  @csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户名称</label>
		<div class="col-sm-5">
			<input type="text" class="form-control " name="cust_name"   id="firstname" 
				   placeholder="请输入客户名称">
	 <b><font color='red'><h4>{{$errors->first('cust_name')}}</h4></font></b>

		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-3 control-label">客户级别</label>
		<div class="col-sm-5">
			<input type="radio"name="cust_rank"value="顶级">顶级
			<input type="radio"name="cust_rank"value="高级">高级
			<input type="radio"name="cust_rank"value="中级">中级
			<input type="radio"name="cust_rank"value="初级" checked>初级
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户来源</label>
		<div class="col-sm-5">
				<input type="radio" name="cust_from"value="忠实客">忠实客
				<input type="radio" name="cust_from"value="买单客">买单客
				<input type="radio" name="cust_from"value="顾客">顾客
				<input type="radio" name="cust_from"value="店外流客" checked>店外流客
		</div>
	</div>  
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户从事行业</label>
		<div class="col-sm-5">
				<input type="radio" name="cust_pursue"value="农林牧渔业">农林牧渔业
				<input type="radio" name="cust_pursue"value="采矿业">采矿业
				<input type="radio" name="cust_pursue"value="建筑业">采矿业
				<input type="radio" name="cust_pursue"value="制造业">制造业
				<input type="radio" name="cust_pursue"value="其他" checked>其他
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">业务员</label>
		<div class="col-sm-5">
			<!-- <input type="text" class="form-control"name="" id="firstname" 
				   placeholder="请输入业务员"> -->
			<select name="sale_id" class="form-control" id="firstname">
				<option value="">请输入业务员</option>
				@foreach($res as $v)
				<option value="{{$v->sale_id}}">{{$v->sale_name}}</option>
				@endforeach
			</select>
			 <b><font color='red'><h4>{{$errors->first('sale_id')}}</h4></font></b>
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户电话</label>
		<div class="col-sm-5">
			<input type="text" class="form-control"name="cust_phone" id="firstname" 
				   placeholder="请输入客户电话">
	  <b><font color='red'><h4>{{$errors->first('cust_phone')}}</h4></font></b>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户手机 </label>
		<div class="col-sm-5">
			<input type="text" class="form-control"name="cust_tel" id="firstname" 
				   placeholder="请输入客户手机">
		  <b><font color='red'><h4>{{$errors->first('cust_tel')}}</h4></font></b>	   
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" class="btn btn-default">添加</button>
		</div>
	</div>
	</form>
	<script>
	// $(document).ready(function(){




	// });
	</script>



     @endsection