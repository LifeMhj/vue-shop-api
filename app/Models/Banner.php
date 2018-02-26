<?php
/**
 * Created by PhpStorm.
 * User: Mhj_pc
 * Date: 2018/2/4
 * Time: 22:45
 */

namespace App\Models;

class Banner extends BaseModel
{
    public function item()
    {
        return $this->hasMany('App\Models\BannerItem', 'banner_id', 'id');
    }

    public static function getBannerById($id)
    {
        return Banner::with('item','item.img')->find($id);
    }
}