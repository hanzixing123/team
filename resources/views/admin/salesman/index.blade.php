  @extends('layouts.layout')
  @section('title', '业务员展示')
  @section('content')
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="form-group">
		<label for="firstname" class="col-sm-3 control-label"></label>
		<div class="col-sm-5">
				<table  class="table">
			<tr> 	
				<td colspan='4'>业务员ID</td>
				<td colspan='4'>业务员姓名</td>
				<td colspan='4'>业务员性别</td>
				<td colspan='5'>业务员办公电话</td>
				<td colspan='5'>业务员手机号码</td>
				<td colspan='4'>操作</td>
			</tr>
			@foreach($sale as $v)
			<tr class="success" id="{{$v->sale_id}}">
				<td colspan='4'>{{$v->sale_id}}</td>
				<td colspan='4'>{{$v->sale_name}}</td>
				<td colspan='4'>{{$v->sale_sex}}</td>
				<td colspan='5'>{{$v->sale_phone}}</td>
				<td colspan='5'>{{$v->sale_tel}}</td>
				<td colspan='4'>
					<a href="{{url('/salesman/destroy/'.$v->sale_id)}}">删除</a><br>
                    <a href="{{url('/salesman/edit/'.$v->sale_id)}}">修改</a>
				</td>
			</tr>
			@endforeach
			</table>
			{{ $sale->links() }}
		</div>
	</div>

<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
@endsection
