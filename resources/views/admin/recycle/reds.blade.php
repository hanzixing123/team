@extends('layouts.layout')
@section('title', '客户拜访信息查找')
@section('content')
<section class="rt_wrap content mCustomScrollbar">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">客户拜访信息查找</h2>
       <a class="fr top_rt_btn">返回首页</a>
      </div>
      <form>
  业务员名称:<input type="text" name="sale_name" value="{{$all->sale_name??''}}">
  业务员性别:<input type="text" name="sale_sex" value="{{$all->sale_sex??''}}">
  业务员电话:<input type="text" name="sale_phone" value="{{$all->sale_phone??''}}">
  业务员手机:<input type="text" name="sale_tel" value="{{$all->sale_tel??''}}">
  客户名称:<input type="text" name="cust_name" value="{{$all->cust_name??''}}">
  客户级别:<input type="text" name="cust_rank" value="{{$all->cust_rank??''}}"><br>
  客户来源:<input type="text" name="cust_from" value="{{$all->cust_from??''}}">
  客户电话:<input type="text" name="cust_phone" value="{{$all->cust_phone??''}}">
  客户手机:<input type="text" name="cust_tel" value="{{$all->cust_tel??''}}">
  访问人:<input type="text" name="vis_name" value="{{$all->vis_name??''}}">
  访问地址:<input type="text" name="vis_url" value="{{$all->vis_url??''}}">
  访问详情:<input type="text" name="vis_desc" value="{{$all->vis_desc??''}}">
        <input type="submit" value="搜索">
      </form>
      <table class="table">
       <thead>
        <th>会议表ID</th>
        <th>业务员名称</th>
        <th>业务员性别</th>
        <th>业务员办公电话</th>
        <th>业务员手机</th>
        <th>客户名称</th>
        <th>客户级别</th>
        <th>客户来源</th>
        <th>客户电话</th>
        <th>客户手机</th>
        <th>访问时间</th>
        <th>访问人</th>
        <th>访问地址</th>
        <th>访问详情</th>
        <th>下次访问时间</th>
       </thead>
      @foreach($vists as $a)
      <tbody>
        <td>{{$a->vis_id}}</td>
        <td>{{$a->sale_name}}</td>
        <td>{{$a->sale_sex}}</td>
        <td>{{$a->sale_phone}}</td>
        <td>{{$a->sale_tel}}</td>
        <td>{{$a->cust_name}}</td>
        <td>{{$a->cust_rank}}</td>
        <td>{{$a->cust_from}}</td>
        <td>{{$a->cust_phone}}</td>
        <td>{{$a->cust_tel}}</td>
        <td>{{date("Y-m-d H:i:s",$a->vis_time)}}</td>
        <td>{{$a->vis_name}}</td>
        <td>{{$a->vis_url}}</td>
        <td>{{$a->vis_desc}}</td>
        <td>{{date("Y-m-d H:i:s",$a->vis_uptime)}}</td>
      </tbody>
      @endforeach
      <aside class="paging">
        <tr>
          <td colspan="15">
            {{$vists->appends($all)->links()}}
          </td>
        </tr>
      </aside>
    </table>
 </div>
</section>
</body>
</html>
<script>
  $(document).ready(function(){
    $(document).on("click",".pagination a",function(){
      var url=$(this).attr("href");
      $.get(url,function(index){
        $("table").html(index);
      });
      return false;
    });
  });
</script>
@endsection
