  @extends('layouts.layout')
  @section('title', '客户展示')
  @section('content')
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  

<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label"></label>
		<div class="col-sm-5">
				<table  class="table">
			<tr> 	
				<td colspan='2'>客户ID</td>
				<td colspan='2'>客户名称</td>
				<td colspan='2'>客户级别</td>
				<td colspan='2'>客户来源</td>
				<td colspan='2'>业务员</td>
				<td colspan='2'>客户电话</td>
				<td colspan='2'>客户手机</td>
				<td colspan='2'>操作</td>
			</tr>
			@foreach($Custom as $v)
			<tr class="success" id="{{$v->cust_id}}">
				<td colspan='2'>{{$v->cust_id}}</td>
				<td colspan='2'>{{$v->cust_name}}</td>
				<td colspan='2'>{{$v->cust_rank}}</td>
				<td colspan='2'>{{$v->cust_from}}</td>
				<td colspan='2'>{{$v->sale_name}}</td>
				<td colspan='2'>{{$v->cust_phone}}</td>
				<td colspan='2'>{{$v->cust_tel}}</td>
				<td colspan='2'><a class="shanchu">删除</a> <a href="{{url('/custom/edit/'.$v->cust_id)}}">修改</a></td>
			</tr>
			@endforeach
			</table>
		</div>
	</div>	
	<script>
	$(document).ready(function(){
		$(document).on('click','.shanchu',function(){
			var id= $(this).parents('tr').prop('id');
			
			$.get('/custom/destroy/'+id,function(res){
					
			})
			$(this).parents('tr').remove();

		});

	
	});

	</script>
    @endsection