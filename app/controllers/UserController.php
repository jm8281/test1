<?php

class UserController extends \BaseController {
    public function __construct()
    {
       $this->beforefilter('auth',array('except'=>array('Login','DoLogin')));
        $this->beforefilter('csrf',array('on'=>'post'));
    }

    /**
	 * 用户列表
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(3);
		return View::make('admin.user.index')->with('users',$users);
	}




	/**
	 * 创建新用户
	 *
	 * @return Response
	 */
	public function create()
	{
		//创建新用户
        return View::make('admin.user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
       $username= Input::get('username');
       $email=Input::get('email');
       $password=Hash::make(Input::get('password'));
       $user = new User;
       $user->username=$username;
       $user->password=$password;
       $user->email=$email;
       $user->save();
       return json_encode(array('success'=>true,'msg'=>"用户创建成功"));


	}

    /**
     * 修改密码
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return View::make('admin.user.edit')->with("user",$user);
    }
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
        return "成功修改";
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
        return "已删除";
	}

    /**
     * 用户登录
     */
    public function Login()
    {

        return View::make('admin.login');
	}
	public function DoLogin()
    {
        $username=Input::get('username');
        $password=Input::get('password');
        if(Auth::attempt(array('username'=>$username,'password'=>$password)))
        {
            return json_encode(array("success"=>true,"msg"=>"登录成功，即将跳转到后台首页"));
        }
        else
            return json_encode(array("success"=>false,"msg"=>"用户名或密码错误"));

    }

    /**
     * 用户注销
     */
	public function Logout()
    {
        Auth::Logout();
        return Redirect::to('/login');
    }


}
