<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\Validator;		//验证类
use App\Login;
use Illuminate\Support\Facades\Auth;	//验证数据库与输入信息是否一致
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
	//登录
	public function index(Request $request)
	{
		//获取用户是否登录，若登录跳转用户中心
		if(Session::has('user_id'))
		{
			return redirect()->routes('index');
		}
		else
		{
			return view('login.login');
		}
	}

	//登录动作
	public function login(Request $request)
	{
		/*if($request->isMethod('POST'))
		{
			$email   = $request->input('email');
			$pwd 	 = $request->input('password');
			$message = '';
			$pwd 	 = md5($pwd);
			if($email == '')
			{
				$meaasge = "请填写用户名或邮箱";
				echo "11"."<script type='text/javascript'>alert(".$message.")</script>";
			}
			else if($pwd == '')
			{
				echo "密码格式不正确，请输入6-14位字符";
			}
			else
			{
				$userInfo = Login::where(['email' => $email])
								 ->where(['password' => $pwd])
								 ->select('email','password')
								 ->get();
				//dd($userInfo);
				if(!isset($userInfo))
				{
					echo "34wef";
					return view('login.login');
				}
				else
				{
					Session::put('userInfo',$userInfo);
					echo "登陆成功";
					return view('index.home');
				}
			}
		}*/

		if($request->isMethod('POST'))
		{
			$email   = $request->input('email');
			$pwd 	 = $request->input('password');
			$message = '';
			$pwd 	 = md5($pwd);		
			/*$userInfo = Login::where(['email' => $email])
							 ->orWhere(['password' => $pwd])
							 ->select('email','password')
							 ->get();*/
			// $userInfo = Login::whereEmailAndPassword(['email' => $email, 'password' => $pwd])->pluck('email', 'password');
			dd($userInfo);die;
			if(!isset($userInfo))
			{
				echo "34wef";
				return view('login.login');
			}
			else
			{
				Session::put('userInfo',$userInfo);
				echo "登陆成功";
				return view('index.home');
			}
	}

	//注册
	public function register(Request $request)
	{
		if($request->isMethod('post'))
		{
			//$type 	  = $request->input('type');
			$email    = $request->input('email');
			$pwd 	  = $request->input('password');
			//$checkbox = $request->input('checkbox');
			$message = '';

			if($email == '' || $pwd == '')
			{
				echo '请正确填写个人信息';
			}
			else
			{
				$userInfo = Login::where('email','=',$email)
								 ->select('email')
								 ->get();
				var_dump($userInfo);
				if(empty($userInfo))
				{
					echo "您注册的用户名或邮箱已存在";
				}
				else
				{
					$login = new Login;
					$login->email = $email;
					$login->password = md5($pwd);
					$saveInfo = $login->save();
					if($saveInfo)
					{
						echo "注册成功";
					}
					else
					{
						echo "系统繁忙，请稍等";
					}
				}
			}

		}
		return view('login.register');
	}

}
?>