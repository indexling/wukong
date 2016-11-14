<?php
/**
 * 简历模块
 */

namespace App\Http\Controllers;
//基类命名空间
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;//请求组件
use App\Objective;
use App\Workexper;
use App\ProjectExper;
// use Redirect, Input, Auth, Log;
class ResumeController extends Controller
{
	/**
	 * 我的履历
	 */
	public function myresume(){
		// <input id="expectsub" class="btn_profile_save" type="button" value="保 存">
		// <input class="btn_profile_save" type="submit" value="保 存">
		return view('resume/myresume');
// 		<script>
// 	//工作经历 （投递简历时必填）
// 	var companyName = $("input[name='companyName']").val();
// 	alert(companyName);
// 	var positionName = $("input[name='positionName']").val();





// </script>
	}

	/**
	 * 期望薪资
	 */
	public function expect(Request $request)
	{

	 	$expectCity = $request->Input('expectCity');
	 	$job_status = $request->Input('type');
	 	$expectPosition = $request->Input('expectPosition');
	 	$job_money = $request->Input('expectSalary');
	 	// $user_id = session::get('username')?session::get('username'):1;
	 	$user_id = 1;

	 	$obj = Objective::firstOrNew(['user_id'=>$user_id]);
	 	$obj->expectCity = $expectCity;
	 	$obj->job_status = $job_status;
	 	$obj->expectPosition = $expectPosition;
	 	$obj->job_money = $job_money;
	 	$bool = $obj->save();
	 	if($bool):
	 		echo json_encode(['isErroe' => 1,'message'=>'保存成功']);
	 	else:
	 		echo json_encode(['isErroe' => 0,'message'=>'保存失败']);
	 	endif;
	 }

	 /**
	  *工作经=
	  */
	 public function profile(Request $request)
	 {
	 	//接值
	 	$companyName = $request->Input('companyName');
	 	$positionName = $request->Input('positionName');
	 	$companyYearStart = $request->Input('companyYearStart');
	 	$companyMonthStart = $request->Input('companyMonthStart');
	 	$companyYearEnd = $request->Input('companyYearEnd');
	 	$companyMonthEnd = $request->Input('companyMonthEnd');

	 	$user_id = 1;
	 	$obj = Workexper::firstOrNew(['user_id'=>$user_id]);
	 	$obj->company_name = $companyName; //公司名称
	 	$obj->position_name = $positionName;//职位名称
	 	$obj->begin_time = strtotime($companyYearStart.'-'.$companyMonthStart);
	 	$obj->end_time = strtotime($companyYearEnd.'-'.$companyMonthEnd);
	 	$bool = $obj->save();
		if($bool):
	 		echo json_encode(['isErroe' => 1,'message'=>'保存成功']);
	 	else:
	 		echo json_encode(['isErroe' => 0,'message'=>'保存失败']);
	 	endif;
	 }

	/**
	 * 项目经验
	 */
	public function projectexper(Request $request){
	 	//接值
	 	$projectName = $request->Input('projectName');
	 	$thePost = $request->Input('thePost');

	 	$projectYearStart = $request->Input('projectYearStart');
	 	$projectMonthStart = $request->Input('projectMonthStart');
	 	$projectYearEnd = $request->Input('projectYearEnd');
	 	$projectMonthEnd = $request->Input('projectMonthEnd');

	 	$projectDescription = $request->Input('projectDescription');
	 	$user_id = 1;

	 	$obj = ProjectExper::firstOrNew(['user_id'=>$user_id]);
	 	$obj->projectName = $projectName; //项目名称
	 	$obj->thePost = $thePost;//产品负责人

	 	$obj->projectTimeStart = strtotime($projectYearStart.'-'.$projectMonthStart);
	 	$obj->projectTimeEnd = strtotime($projectYearEnd.'-'.$projectMonthEnd);
	 	// $obj->projectDescription = $projectDescription;

	 	$bool = $obj->save();
		if($bool):
	 		echo json_encode(['isErroe' => 1,'message'=>'保存成功']);
	 	else:
	 		echo json_encode(['isErroe' => 0,'message'=>'保存失败']);
	 	endif;

		// echo "string";project_exper
	}



}