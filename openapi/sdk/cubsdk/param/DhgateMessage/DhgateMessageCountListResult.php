<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:34
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;

class DhgateMessageCountListResult
{

    private $msgCountList;
    public function GetMsgCountList(){
        return $this->msgCountList;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "msgCountList", $this->stdResult )) {
            $this->msgCountList = $this->stdResult->{"msgCountList"};
        }
        if (array_key_exists ( "msgCountList", $this->stdResult )) {
            $msgCountListResult = $this->stdResult->{"msgCountList"};
            $object = json_decode(json_encode($msgCountListResult), true);
            $this->msgCountList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateMessageCountListResultInfo = new DhgateMessageCountListResultInfo();
                $DhgateMessageCountListResultInfo->setArrayResult($arrayobject);
                $this->msgCountList[$i] = $DhgateMessageCountListResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "msgCountList", $this->arrayResult )) {
            $this->msgCountList = $arrayResult['msgCountList'];
        }
    }
}
