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

class DhgateMessageInfoReplyResult
{
    /*
     * msgTopicId 	String 	必须 	站内信主题ID 	示例值：274576550
     */
    private $msgTopicId;
    public function GetMsgTopicId(){
        return $this->msgTopicId ;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "msgTopicId", $this->stdResult )) {
            $this->msgTopicId = $this->stdResult->{"msgTopicId"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "msgTopicId", $this->arrayResult )) {
            $this->msgTopicId = $arrayResult['msgTopicId'];
        }
    }
}