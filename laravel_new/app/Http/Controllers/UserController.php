<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
	//注册页面
	public function reg()
	{
		return view('user.register');
	}

	//用户注册	[动作]
	public function register(Request $request)
	{
		$email = $request->input('email');
		$pwd   = $request->input('password');
		$pwd   = md5($pwd);
		$validator = Validator::make($request->all(), User::$rules);
		if ($validator->fails())
		{
			return redirect('reg')->with('error','失败');
		}
		else
		{
		    $user = new User;			//实例化User对象
		    $user->email = $email;
		    $user->password = $pwd;
		    $res = $user->save();
		    return redirect('lo')->with('success','欢迎注册，好好玩耍!');
		}
		
	}

	//登录页面
	public function lo()
	{
		return view('user.login');
	}

	//用户登录 [动作]
	public function login(Request $request)
	{
		$email = $request->input('email');
		$pwd   = $request->input('password');
		$pwd   = md5($pwd);
		//dd([$email,$pwd]);
		/*if (Auth::attempt(['email'=>$email, 'password'=>$pwd]))
		{
			dd($email);
        	return redirect('/')->with('message', '欢迎登录');
    	}
    	else
    	{
        	return redirect('login')->with('message', '用户名或密码错误')->withInput();
    	}*/
    	//$user = User::where('email',$email)->orWhere('password',$pwd)->select('email','password')->get();
    	//$user = User::whereEmailAndPassword($email, $pwd)->pluck('email', 'password');
    	$user = User::where(['email'=>$email])->first();
    	//dd($user);die;
    	if(empty($user))
    	{
    		dd($user);
    		return redirect('login')->with('error', '用户名或密码错误');
    	}
    	else
    	{
    		$session = Session::put('email',$email);
    		//$userEml = Session::get('email');
    		//dd($userEml);die;
    		//dd($user);die;
    		return redirect('/')->with('success', '欢迎登录');
    	}
	}

	//退出登录
    public function logout(){  
        if(Auth::check())
        { 
            Auth::logout();
        } 
        return redirect('login'); 
    }
}
?>