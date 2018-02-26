<?php
/**
 * Created by PhpStorm.
 * User: Mhj_pc
 * Date: 2018/2/1
 * Time: 23:01
 */
namespace App\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function success($data,$msg='',$code=0)
    {
        return array('code'=>$code,'msg'=>$msg,'data'=>$data);
    }

    public static function fail($data,$msg='',$code=1)
    {
        return array('code'=>$code,'msg'=>$msg,'data'=>$data);
    }

}
