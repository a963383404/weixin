<?php
/**
 * Created by PhpStorm.
 * User: 65743
 * Date: 2017/11/10
 * Time: 13:33
 */

namespace app\lib\Exception;


use think\Exception;

class BaseException extends Exception
{
    // HTTP状态码 404 200
    public $code = 404;
    // 错误具体信息（最好写成英文）
    public $msg = '参数错误';
    // 自定义状态错误码
    public $errCode = 10000;
}