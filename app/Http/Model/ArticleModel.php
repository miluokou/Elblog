<?php
/**
 * Created by 蝶梦网.
 * User: 自由鹰阿伦
 * Q  Q: 756182916
 * 邮箱：elshequ@163.com
 * 日期: 2016/11/4
 * 时间: 10:54
 */

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model{
    protected $table='article';

    protected $primaryKey='id';

    public $timestamps=true;

    //指定不能批量赋值的字段属性
    protected  $guarded = ['id'];
	
	//在存入数据库时，进行处理$timestamps属性获取的时间转换
    protected function getDateFormat(){
        return time();
    }
	
}