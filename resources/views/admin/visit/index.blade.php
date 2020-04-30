 @extends('layouts.layout')
  @section('title', '客户拜访展示')
  @section('content')

	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  

<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label">客户来源</label>
		<div class="col-sm-5">
				<table  class="table">
			<tr> 	
				<td colspan='2'>ID</td>
				<td colspan='2'>业务员名称</td>
				<td colspan='2'>客户名称</td>
				<td colspan='3'>访问时间</td>
				<td colspan='2'>访问人</td>
				<td colspan='2'>访问地址</td>
				<td colspan='2'>访问详情</td>
				<td colspan='3'>下次访问时间</td>
				<td colspan='4'>操作</td>
			</tr>
			@foreach($visit as $v)
			<tr class="success" id="{{$v->vis_id}}">
				<td colspan='2'>{{$v->vis_id}}</td>
				<td colspan='2'>{{$v->sale_name}}</td>
				<td colspan='2'>{{$v->cust_name}}</td>
				<td colspan='3'>{{ date('Y-m-d H:i:s',$v->vis_time)}}</td>
				<td colspan='2'>{{$v->vis_name}}</td>
				<td colspan='2'>{{$v->vis_url}}</td>
				<td colspan='2'>{{$v->vis_desc}}</td>
				<td colspan='3'>{{date('Y-m-d H:i:s',$v->vis_uptime)}}</td>
				<td colspan='4'><a class="shanchu">删除</a><a href="{{url('/visit/edit/'.$v->vis_id)}}">修改</a></td>
			</tr>
			@endforeach
			</table>
		</div>
	</div>	
	<script>
	$(document).ready(function(){
		$(document).on('click','.shanchu',function(){
			var id= $(this).parents('tr').prop('id');
			
			$.get('/visit/destroy/'+id,function(res){
					
			})
			$(this).parents('tr').remove();

		});

	
	});

	</script>


















  @endsection