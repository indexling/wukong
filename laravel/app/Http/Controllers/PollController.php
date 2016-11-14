<?php 
namespace App\Http\Controllers;
 

use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;//请求组件
// use App\Poll;  // 用数据模型
 
// use Redirect, Input, Auth, Log;
 
class PollController extends Controller {
	public function store(Request $request)
	{
	    // $poll = new Poll;
	
	 	// $data = $request->Input('');
	 	// $data = $request->Input('');
	 	// $data = $request->Input('');
	 	$data = $request->Input('date');

	 	// echo json_encode($data);
	 	echo $data;
	    // echo  Input::get('date');
	 
	//     if ($poll->save()) {
	//         return response()->json(array(
	//             'status' => 1
	//             'msg' => 'ok',
	//         ));
	//     } else {
	//         return Redirect::back()->withInput()->withErrors('保存失败！');
	//     }
	}
}