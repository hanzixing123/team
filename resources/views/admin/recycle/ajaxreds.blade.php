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