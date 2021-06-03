<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 17:06
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateOnlineDeliveryModifyResultInfo{
/*
 * result 	String 	必须 	返回结果 	SUCCESS：成功
 */
    private $result;
    public function GetResult(){
        return $this->result;
    }

    private $stdResult;
    public function setStdResult($stdResult) {

        $this->stdResult = $stdResult;

        if (array_key_exists ( "result", $this->stdResult )) {
            $this->result = $this->stdResult->{"result"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "result", $this->arrayResult )) {
            $this->result = $arrayResult['result'];
        }
    }
}