<?php
/**
 * Created by PhpStorm.
 * User: 65743
 * Date: 2017/11/9
 * Time: 16:03
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:8',
        'email' => 'email',
    ];
}