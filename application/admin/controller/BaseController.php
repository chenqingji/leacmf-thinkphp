<?php
/**
 * Created by PhpStorm.
 * User: lea
 * Date: 2017/12/30
 * Time: 13:52
 */

namespace app\admin\controller;

use think\Controller;

class BaseController extends Controller
{
    /**
     * 初始化
     */
    public function initialize()
    {
        parent::initialize();
    }

    public final function table($data, $count)
    {
        return [
            'code'  => 0,
            'msg'   => 'success',
            'data'  => $data,
            'count' => $count
        ];
    }
}