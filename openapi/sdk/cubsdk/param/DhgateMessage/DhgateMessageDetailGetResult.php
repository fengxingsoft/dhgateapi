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
class DhgateMessageDetailGetResult extends SDKDomain
{
    private $message;
    public function GetMessage(){
        return $this->message;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
//        if (array_key_exists ( "message", $this->stdResult )) {
//            $this->message = $this->stdResult->{"message"};
//        }
        if (array_key_exists ( "message", $this->stdResult )) {
            $messageResult=$this->stdResult->{"message"};
            $object = json_decode ( json_encode ( $messageResult ), true );
                 $this->message = array ();
                $arrayobject = new ArrayObject ( $object);
                $DhgateMessageDetailGetResultInfo=new DhgateMessageDetailGetResultInfo();
            $DhgateMessageDetailGetResultInfo->setArrayResult($arrayobject );
                $this->message= $DhgateMessageDetailGetResultInfo;

        }

    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "message", $this->arrayResult )) {
           // $this->message = $arrayResult['message'];
            $messageResult = $arrayResult ['message'];
            $this->message =new DhgateMessageDetailGetResultInfo ();
            $this->message->setStdResult ( $messageResult );
        }
    }
}
