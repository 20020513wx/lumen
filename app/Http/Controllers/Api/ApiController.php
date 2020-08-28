<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * 获取商品接口
     */
    public function home()
    {
        $url = env("SHOP_HOST").'/api/goods/index';
		$data = file_get_contents($url);        //获取商品数据
        $list = json_decode($data,true);
        $response = [
            'errno' => 0,
            'msg'   => 'ok',
            'data'  => [
                'goods' => $list['data']['list']
            ]
        ];

        return $response;
    }
    public function product($goods_id){
        dd($goods_id);
    }

    //轮播图
    public function photo(){
        
    }
}