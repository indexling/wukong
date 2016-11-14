<?php
/**
 * 期望薪资 模型
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Workexper extends Model{
	protected $primarykey = 'id';
	protected $table = 'work_exper';
	//自动维护时间 false
	public $timestamps = false;
	// 
	protected  $fillable = ['user_id'];


}