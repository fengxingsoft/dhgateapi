<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateMessageSendResult
{
  /*
   * msgId 	String 	必须 	站内信ID 	示例值：274576550
   */
    private $msgId;
    public function GetMsgId(){
        return $this->msgId ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "msgId", $this->stdResult )) {
            $this->msgId = $this->stdResult->{"msgId"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "msgId", $this->arrayResult )) {
            $this->msgId = $arrayResult['msgId'];
        }

    }
}