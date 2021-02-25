<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    /**
     * @return 前台首页
     */
	public function showWelcome()
	{
		return '前台首页';
	}

    /**
     * @return 后台首页
     */
	public function adminIndex()
    {
        return View::make('admin.index');
    }

}
