<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOrderDeliverySaveResult
{
    /*
     *  result 	Boolean 	必须 	请款结果 	true-请款成功，false-请款失败
     */
    private $result;
    public function GetResult(){
        return $this->result ;
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