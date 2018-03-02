<?php
/**
 * Created by PhpStorm.
 * User: Mhj_pc
 * Date: 2018/2/26
 * Time: 18:41
 */

namespace App\Models;


class Goods extends BaseModel
{


    public static function getNewGoods($params = [])
    {
        return Goods::where('isnew',1)->paginate($params['paginate'] ?: 15);
    }

    public static function getHotGoods($params = [])
    {
        return Goods::where('ishot',1)->paginate($params['paginate'] ?: 15);
    }
}