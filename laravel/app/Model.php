<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
	//默认连接表名为模型名片的负数
	protected $table = 'student';

	//主键自增字段，默认id
	protected $primaryKey = 'id';

	//自动维护时间戳	orm添加数据时自动添加时间，false关闭
	protected $timestamp = true;

	//指定允许批量赋值的字段	使用模型的create方法新增数据
	protected $fillable = ['name', 'age', 'sex']

	//获取当前时间戳方法
	protected function getDateFormat()
	{
		return time();
	}

	//对时间不做任何处理
	protected function asDateTime($val)
	{
		return $val;
	}

}

?>