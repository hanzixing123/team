@extends('layouts.layout')
@section('title', '客户信息查找')
@section('content')
<section class="rt_wrap content mCustomScrollbar">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">客户信息查找</h2>
       <a class="fr top_rt_btn">返回主页</a>
      </div>
        <form>
            客户名称:<input type="text" name="cust_nam" value="{{$all['cust_nam'] ??''}}">
            客户级别:<select name="cust_rank">
                        <option value="">请选择</option>
                        <option value="初级">初级</option>
                        <option value="中级">中级</option>
                        <option value="高级">高级</option>
                        <option value="顶级">顶级</option>
                    </select>
            客户从事行业:<select name="cust_pursue">
                            <option value="">请选择</option>
                            <option value="商业">商业</option>
                            <option value="农林牧渔业">农林牧渔业</option>
                            <option value="采矿业">采矿业</option>
                            <option value="制造业">制造业</option>
                            <option value="其他">其他</option>
                          </select>
            业务员手机号:<input type="text" name="sale_tel" value="{{$all['sale_tel'] ??''}}">
            客户来源:<select name="cust_from">
                        <option value="">请选择</option>
                        <option value="忠实客">忠实客</option>
                        <option value="买单客">买单客</option>
                        <option value="顾客">顾客</option>
                        <option value="店外流客">店外流客</option>
                      </select><br>
            业务员名称:<input type="text" name="sale_name" value="{{$all['sale_name'] ??''}}">
            业务员性别:<select name="sale_sex">
                          <option value="">请选择</option>
                          <option value="男">男</option>
                          <option value="女">女</option>
                       </select>
            业务员电话:<input type="text" name="sale_phone" value="{{$all['sale_phone'] ??''}}">
            客户电话:<input type="text" name="cust_phone" value="{{$all['cust_phone'] ??''}}">
            客户手机号:<input type="text" name="cust_tel" value="{{$all['cust_tel'] ??''}}">
            <input type="submit" value="搜索">
        </form>
      <table class="table">
       <thead>
        <th>客户ID</th>
        <th>客户名称</th>
        <th>客户级别</th>
        <th>客户从事行业</th>
        <th>客户来源</th>
        <th>业务员名称</th>
        <th>业务员性别</th>
        <th>业务员电话</th>
        <th>业务员手机号</th>
        <th>客户电话</th>
        <th>客户手机号</th>
       </thead>
       @foreach($recycle as $error)
       <tbody>
          <td>{{$error->cust_id}}</td>
          <td>{{$error->cust_name}}</td>
          <td>{{$error->cust_rank}}</td>
          <td>{{$error->cust_pursue}}</td>
          <td>{{$error->cust_from}}</td>
          <td>{{$error->sale_name}}</td>
          <td>{{$error->sale_sex}}</td>
          <td>{{$error->sale_phone}}</td>
          <td>{{$error->sale_tel}}</td>
          <td>{{$error->cust_phone}}</td>
          <td>{{$error->cust_tel}}</td>
       </tbody>
       @endforeach
      <aside class="paging">
        <tr>
          <td colspan="11">
            {{$recycle->appends($all)->links()}}
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
