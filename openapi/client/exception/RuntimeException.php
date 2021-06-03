<?php
/**
 * Created by IntelliJ IDEA.
 * Date: 2017/8/1
 * Time: 22:52
 * FileName:RuntimeException.php
 * AUTHOR:FengXingSoft
 */
namespace com\dhgate\openapi\client\exception;
use think\Exception;

class RuntimeException extends Exception {
    public function __construct($message,$code=0)
    {
        $this->code=$code;
        $this->message=$message;
        if($this->code='invalid_authorization_code'){
            $this->message='Authorization Code无效(一个授权码只能使用一次)或者与获取Authorization Code时提供的不一致或者已经过期';
        }
    }

}