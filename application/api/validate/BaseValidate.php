<?php
/**
 * Created by PhpStorm.
 * User: 65743
 * Date: 2017/11/9
 * Time: 16:41
 */

namespace app\api\validate;


use think\Exception;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $params = request()->param();
        $result = $this->check($params);
        if (!$result){
            $error = $this->getError();
            throw new Exception($error);
        }
        else {
            return true;
        }
    }
}