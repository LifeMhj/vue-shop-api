<?php

namespace App\Models;

class Theme extends BaseModel
{
    public function topImg()
    {
        return $this->hasOne('App\Models\Image', 'id', 'topic_img_id');
    }

    public static function getThemes($params = [])
    {
        return Theme::with('topImg')->paginate($params['paginate'] ?: 15);
    }
}