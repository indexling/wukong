<?php
/**
 * 期望薪资 模型
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model{
	protected $primarykey = 'id';
	protected $table = 'objective';
	//自动维护时间 false
	// public $timestamps = false;
	// 
	protected  $fillable = ['user_id'];


}