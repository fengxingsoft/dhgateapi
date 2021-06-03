<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/18
 * Time: 17:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageListRecentResultInfo;
class DhgateMessageListRecentResult
{
    private $msgList;
    public function GetMsgList(){
        return $this->msgList;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "msgList", $this->stdResult )) {
            $msgListResult=$this->stdResult->{"msgList"};
            $object = json_decode ( json_encode ( $msgListResult ), true );
            $this->msgList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateMessageListRecentResultInfo=new DhgateMessageListRecentResultInfo();
                $DhgateMessageListRecentResultInfo->setArrayResult($arrayobject );
                $this->msgList[$i] = $DhgateMessageListRecentResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "msgList", $this->arrayResult )) {
            $this->msgList = $arrayResult['msgList'];
        }
    }
}
