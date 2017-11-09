<?php
/**
 * Created by PhpStorm.
 * User: 65743
 * Date: 2017/11/9
 * Time: 15:23
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;

class Banner
{
    /**
     * 获取指定id的banner指定信息
     * @url /banner/:id
     * @http GET
     * @$id banner的id号
     *
     */
    public function getBanner($id)
    {
        (new IDMustBePostiveInt())->goCheck();
    }
}