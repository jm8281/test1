@extends('admin.common.layout')
@section('title') 问卷列表页 @endsection
@section('content')
    <h2>答卷列表</h2>
    <div class="a_link"><a href="/adm/user/create">导出</a></div>
    <div class="table_style">
        <form name="myform" method="post" action="http://ysxdn.kydev.net/kyadmin.php?file=weixin_sick_case&amp;action=listorder">
            <table border="1" width="100%" cellspacing="0" cellpadding="0">
                <tbody><tr>

                    <td >id</td>
                    <td >邮箱</td>
                    <td width="10%">您对文献检索的结果是否满意</td>
                    <td width="14%">检索结果不够精确</td>
                    <td width="14%">检索结果不全面</td>
                    <td width="14%">反馈时间超出规定天数</td>
                    <td width="14%">流程繁琐</td>
                    <td width="14%">服务态度不佳</td>
                    <td width="15%">提交时间</td>
                    <td width="15%">ip</td>

                </tr>
                @foreach($surveys as $v)
                    <tr>
                        <td>{{$v->id}}</td>
                        <td >{{$v->email}}</td>
                        <td>{{$v->q1}}</td>
                        <td>{{$v->q21}}</td>
                        <td>{{$v->q22}}</td>
                        <td>{{$v->q22}}</td>
                        <td>{{$v->q22}}</td>
                        <td>{{$v->q22}}</td>
                        <td>{{$v->created_at}}</td>
                        <td>{{$v->ip}}</td>
                    </tr>
                @endforeach

                </tbody></table>
        </form>
        <div class="paging">
            {{$surveys->links()}}
        </div>
    </div>
@endsection
