<?php

namespace App\Api\Controller;


use App\Api\BaseController;
use App\Models\Goods;

class GoodsController extends BaseController
{
    public function getNewGoods()
    {
        $parameters = [
            'paginate' => request('per_page')
        ];
        $goods = Goods::getNewGoods($parameters);
        return self::success($goods,'查询成功');
    }
}