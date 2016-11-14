<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Index;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
	//首页搜索
	public function search()
	{
		return view('collect.collections');
	}

	//首页最新职位信息展示
	public function reveal()
	{
		$messageNew = Index::orderBy('publish_time', 'desc')
				 ->get();
		return view('index.home', ['messageNew' => $messageNew]);
	}

	//首页最热职位信息展示
	public function hotInfo()
	{
		$messageHot = Index::orderBy('hot', 'desc')
				 ->get();
		return view('index.home', ['messageHot' => $messageHot]);
	}

	//搜索职位、公司或地点
/*	public function search(Request $request)
	{
		$keywork = $request->input('');
	}*/




}
?>