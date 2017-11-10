<?php
/**
 * Created by PhpStorm.
 * User: 65743
 * Date: 2017/11/10
 * Time: 13:39
 */

namespace app\lib\Exception;


class BannerMissException extends BaseException
{
    // HTTP状态码 404 200
    public $code = 404;
    // 错误具体信息（最好写成英文）
    public $msg = '请求的Banner不存在';
    // 自定义状态错误码
    public $errCode = 40000;
}