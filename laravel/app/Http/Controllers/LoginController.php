<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Model\Login;

class LoginController extends Controller
{
	//登录
	public function index(Request $request)
	{
		//echo $request->session->get('user_id','alin');
		//获取用户是否登录，若登录跳转用户中心
		if(Session::has('user_id'))
		{
			//return redirect()->routes();
		}
		else
		{
			return view('login.login');
		}
	}

	//登录动作
	public function login(Request $request)
	{
		echo "54yrt";
		/*if($request->isMethod('POST'))
		{
			//$email = $request->input('email');
			//$pwd = $request->input('password');
			$info = $request->input()->post('email');
			dd($info);
			$message = '';
			if(empty($email))
			{
				$meaasge = "请填写用户名或邮箱";
			}
			else if(preg_match('|\w{6,14}|', $pwd))
			{
				$message = "密码格式不正确,请输入6-14位字符";
			}
		}*/
	}
	public function ajaxLogin(Request $request)
	{

		echo 111111;
	}

	//注册
	public function register(Request $request)
	{
		if($request->isMethod('post'))
		{
			$email = $request->input('email');
			$pwd = $request->input('password');
			$info = $request->save();
		}
		return view('login.register');
	}

}
?>