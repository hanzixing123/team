@extends('layouts.layout')
@section('title', '用户管理')
@section('content')
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label"></label>
		<div class="col-sm-5">
				<table  class="table">
			<tr> 	
				<th colspan='2'>用户ID</th>
				<th colspan='2'>客户名称</th>
				<th colspan='2'>客户级别</th>
				<th colspan='2'>操作</th>
			</tr>
			@foreach($add as $error)
			<tr> 	
				<td colspan='2'>{{$error->user_id}}</td>
				<td colspan='2'>{{$error->user_name}}</td>
				<td colspan='2'>
						{{$error->user_del==1?"系统主管":''}}
						{{$error->user_del==3?"主管":''}}
						{{$error->user_del==2?"业务员":''}}
				</td>
				<td colspan='2'>
					<a href="{{url('/user/destroy/'.$error->user_id)}}">删除</a>
					<a href="{{url('/user/edit/'.$error->user_id)}}">修改</a>
				</td>
			</tr>
			@endforeach
			</table>
		</div>
	</div>	
@endsection