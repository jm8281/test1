@extends('admin.common.layout')
@section('title')用户列表 @endsection
@section('content')
    <h2>用户列表</h2>
    <div class="a_link"><a href="/adm/user/create">添加管理员</a></div>
    <div class="table_style">
        <form name="myform" method="post" action="http://ysxdn.kydev.net/kyadmin.php?file=weixin_sick_case&amp;action=listorder">
            <table border="1" width="100%" cellspacing="0" cellpadding="0">
                <tbody><tr>

                    <td width="5%">id</td>
                    <td width="14%">用户名</td>
                    <td width="14%">邮箱</td>
                    <td width="15%">更新时间</td>
                    <td width="4%">管理</td>
                </tr>
                @foreach($users as $v)
                    <tr>
                        <td width="5%">{{$v->id}}</td>
                        <td width="14%">{{$v->username}}</td>
                        <td width="14%">{{$v->email}}</td>
                        <td width="15%">{{$v->updated_at}}</td>
                        <td width="4%"><a href="/adm/user/{{$v->id}}/edit">修改密码</a></td>
                    </tr>
                @endforeach

                </tbody></table>
        </form>
        <div class="paging">
            {{$users->links()}}
        </div>
    </div>
@endsection