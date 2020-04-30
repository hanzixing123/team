  @extends('layouts.layout')
  @section('title', '客户修改')
  @section('content')
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<br>
<form class="form-horizontal" action="{{'/custom/update/'.$res->cust_id}}" method="post"   role="form">
		  @csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户名称</label>
		<div class="col-sm-5">
			<input type="text" class="form-control"name="cust_name" value="{{$res->cust_name}}" id="firstname" 
				   placeholder="请输入客户名称">
	 <b><font color='red'><h4>{{$errors->first('cust_name')}}</h4></font></b>
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-3 control-label">客户级别</label>
		<div class="col-sm-5">
			<input type="radio"name="cust_rank"value="顶级"@if($res->cust_rank=='顶级')checked @endif>顶级
			<input type="radio"name="cust_rank"value="高级"@if($res->cust_rank=='高级')checked @endif>高级
			<input type="radio"name="cust_rank"value="中级"@if($res->cust_rank=='中级')checked @endif>中级
			<input type="radio"name="cust_rank"value="初级"@if($res->cust_rank=='初级')checked @endif>初级
					


		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户来源</label>
		<div class="col-sm-5">
				<input type="radio" name="cust_from"value="忠实客"@if($res->cust_from=='忠实客')checked @endif>忠实客
				<input type="radio" name="cust_from"value="买单客"@if($res->cust_from=='买单客')checked @endif>买单客
				<input type="radio" name="cust_from"value="顾客"@if($res->cust_from=='顾客')checked @endif>顾客
				<input type="radio" name="cust_from"value="店外流客"@if($res->cust_from=='店外流客')checked @endif >店外流客
		</div>
	</div>  
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户从事行业</label>
		<div class="col-sm-5">
				<input type="radio" name="cust_pursue"value="农林牧渔业"@if($res->cust_pursue=='农林牧渔业')checked @endif>农林牧渔业
				<input type="radio" name="cust_pursue"value="采矿业"@if($res->cust_pursue=='采矿业')checked @endif>采矿业
				<input type="radio" name="cust_pursue"value="建筑业"@if($res->cust_pursue=='建筑业')checked @endif>建筑业
				<input type="radio" name="cust_pursue"value="制造业"@if($res->cust_pursue=='制造业')checked @endif>制造业
				<input type="radio" name="cust_pursue"value="其他" @if($res->cust_pursue=='其他')checked @endif>其他
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">业务员</label>
		<div class="col-sm-5">
			
			<select name="sale_id" class="form-control" id="firstname">
				<option value="sale_name">请输入业务员</option>
				@foreach($Salesman as $v)
				<option value="{{$v->sale_id}}"@if($v->sale_id==$res->sale_id) selected @endif>{{$v->sale_name}}</option>
				@endforeach
			</select>
		<b><font color='red'><h4>{{$errors->first('sale_name')}}</h4></font></b>
		</div>
	</div>
		<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户电话 </label>
		<div class="col-sm-5">
			<input type="text" class="form-control"name="cust_phone" value="{{$res->cust_phone}}" id="firstname" 
				   placeholder="请输入客户电话">
	  <b><font color='red'><h4>{{$errors->first('cust_phone')}}</h4></font></b>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户手机 </label>
		<div class="col-sm-5">
			<input type="text" class="form-control"name="cust_tel"value="{{$res->cust_tel}}"  id="firstname" 
				   placeholder="请输入客户手机">
		  <b><font color='red'><h4>{{$errors->first('cust_tel')}}</h4></font></b>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" class="btn btn-default">修改</button>
		</div>
	</div>
	</form>
	<script>
	// $(document).ready(function(){




	// });
	</script>



     @endsection