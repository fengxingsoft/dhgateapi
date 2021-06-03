<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateMessageDetailGetResultInfo{

/*
 * messageInfo 	MessageInfoVO[] 	必须 	详细信息 	详细信息
 */
    private $messageInfo;
    public function GetMessageInfo(){
        return $this->messageInfo;
    }
/*
 * messageTopic 	MessageTopicVO 	必须 	站内主题 	站内主题
 */
    private $messageTopic;
    public function GetMessageTopic(){
        return $this->messageTopic;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "messageInfo", $this->stdResult )) {
            $messageInfoResult=$this->stdResult->{"messageInfo"};
            $object = json_decode ( json_encode ( $messageInfoResult ), true );
            $this->messageInfo = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateMessageDetailGetResultGetMessageInfo=new DhgateMessageDetailGetResultGetMessageInfo();
                $DhgateMessageDetailGetResultGetMessageInfo->setStdResult($arrayobject );
                $this->messageInfo[$i] = $DhgateMessageDetailGetResultGetMessageInfo;
            }
        }
        if (array_key_exists ( "messageTopic", $this->stdResult )) {
            $messageTopicResult=$this->stdResult->{"messageTopic"};
            $object = json_decode ( json_encode ( $messageTopicResult ), true );
            $this->messageTopic = array ();
                $arrayobject = new ArrayObject ( $object);
                $DhgateMessageDetailGetResultGetMessageTopic=new DhgateMessageDetailGetResultGetMessageTopic();
            $DhgateMessageDetailGetResultGetMessageTopic->setStdResult($arrayobject );
                $this->messageTopic= $DhgateMessageDetailGetResultGetMessageTopic;
        }

    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "messageInfo", $this->arrayResult )) {
            $messageInfoResult = $arrayResult['messageInfo'];
            for($i = 0; $i < count ( $messageInfoResult ); $i ++) {
                $DhgateMessageDetailGetResultGetMessageInfo=new DhgateMessageDetailGetResultGetMessageInfo();
                $DhgateMessageDetailGetResultGetMessageInfo->setArrayResult($messageInfoResult[$i] );
                $this->messageInfo[$i] = $DhgateMessageDetailGetResultGetMessageInfo;
            }
        }
        if (array_key_exists ( "messageTopic", $this->arrayResult )) {
            $messageTopicResult= $arrayResult['messageTopic'];
            $DhgateMessageDetailGetResultGetMessageTopic=new DhgateMessageDetailGetResultGetMessageTopic();
            $DhgateMessageDetailGetResultGetMessageTopic->setArrayResult($messageTopicResult );
            $this->messageTopic= $DhgateMessageDetailGetResultGetMessageTopic;
        }
    }
}