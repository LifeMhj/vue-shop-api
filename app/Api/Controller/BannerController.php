<?php
/**
 * Created by PhpStorm.
 * User: Mhj_pc
 * Date: 2018/2/1
 * Time: 22:59
 */

namespace App\Api\Controller;


use App\Api\BaseController;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Exceptions\MissException;

class BannerController extends BaseController
{
    /**
     * 获取Banner信息
     * @url     /banner/:id
     * @http    get
     * @param   int $id banner id
     * @return  array of banner item , code 200
     * @throws  MissException
     */
    public function getBanner($id)
    {
        $banner = Banner::getBannerById($id);
        return self::success($banner,'查询成功');
    }

    public function store(Request $request)
    {
        $this->response->item();
        $this->validate($request, [
            'id'   => 'required|numeric|max:2',
        ]);
    }
}