<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
	//默认连接表名为模型名片的负数
	protected $table = 'invite_position';

	//自动维护时间戳
	public $timestamps = true;

	//获取和更新的格式
	protected function getDateFormat()
	{
		return time();
	}

	protected function asDateTime($val)
	{
		return $val;
	}

}
?>