@extends('admin.common.layout')
@section('title') 添加新管理 @endsection
@section('content')
    <h2>添加新管理</h2>
    <form >
        <div class="input_dl">
            <input type="hidden" id="_token" value="{{csrf_token()}}"/>
            <div>
            <label for="username" >用户名</label>
            <input type="text" name="username" id="username" />
            </div>
            <div>
            <label for="email" >Email</label>
            <input type="text" name="email" id="email" />
        </div>
            <div>
            <label for="password" >密码</label>
            <input type="text" name="password" id="password" />
        </div>
            <div>
            <label for="password_confirm" >确认密码</label>
            <input type="text" name="password_confirm" id="password_confirm" />
            </div>

        <div>

            <input class="btn_p" type="button" onclick="addUser()" value="提交"/>
        </div>        </div>

    </form>
@endsection