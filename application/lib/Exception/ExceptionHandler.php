<?php
/**
 * Created by PhpStorm.
 * User: 65743
 * Date: 2017/11/10
 * Time: 13:31
 */

namespace app\lib\Exception;

// 注意别引用了TP5中的
use Exception;
use think\exception\Handle;
use think\Log;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    public function render(Exception $e)
    {
        // 1.由于用户行为导致的异常
        if ($e instanceof BaseException){
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errCode;
        }
        // 2.服务器自身异常
        else{
            $this->code = 500;
            $this->msg = '服务器内部错误，不想告诉你';
            $this->errorCode = 999;
            $this->recordErrorLog($e);
        }
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => request()->url(),
        ];
        return json($result, $this->code);
    }

    // 自定义服务器自身异常错误日记记录
    private function recordErrorLog(Exception $e)
    {
        Log::init([
            'type'  => 'file',
            'path'  => LOG_PATH,
            'level' => ['error'],
        ]);
        Log::record($e->getMessage(), 'error');
    }
}
