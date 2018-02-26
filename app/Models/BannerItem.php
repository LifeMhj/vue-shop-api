<?php
/**
 * Created by PhpStorm.
 * User: Mhj_pc
 * Date: 2018/2/4
 * Time: 22:45
 */

namespace App\Models;

use App\Models\Image;

class BannerItem extends BaseModel
{
    public function img()
    {
        return $this->hasOne('App\Models\Image', 'id', 'img_id');
    }

    public static function getBannerItemById($id)
    {
        return BannerItem::with('img')->where('id',$id)->find(1);
    }
}