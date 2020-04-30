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