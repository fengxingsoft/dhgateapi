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

class DhgateMessageDetailGetResultGetMessageInfo
{
/*
 * attatchment 	String 	必须 	附件 	附件
 */
    private $attatchment;
    public function GetAttatchment(){
        return $this->attatchment ;
    }
/*
 * attatchment0 	String 	必须 	附件 	附件
 */
    private $attatchment0;
    public function GetAttatchment0(){
        return $this->attatchment0 ;
    }
/*
 * content 	String 	必须 	内容 	内容
 */
    private $content;
    public function GetContent(){
        return $this->content ;
    }
/*
 * createtime 	Date 	必须 	创建时间 	创建时间
 */
    private $createtime;
    public function GetCreatetime(){
        return $this->createtime ;
    }
/*
 * isTemplates 	String 	必须 	是否使用模板 	是否使用模板
 */
    private $isTemplates;
    public function GetIsTemplates(){
        return $this->isTemplates ;
    }
/*
 * receiverNickname 	String 	必须 	收信人别名 	收信人别名
 */
    private $receiverNickname;
    public function GetReceiverNickname(){
        return $this->receiverNickname ;
    }
/*
 * recieverid 	String 	必须 	收件人ID,用于发送与恢复站内信 	收件人ID,用于发送与恢复站内信
 */
    private $recieverid;
    public function GetRecieverid(){
        return $this->recieverid ;
    }
/*
 * searshStatus 	String 	必须 	收件人状态 	收件人状态
 */
    private $searshStatus;
    public function GetSearshStatus(){
        return $this->searshStatus ;
    }
/*
 * senderid 	String 	必须 	发件人ID,用于发送与恢复站内信 	发件人ID,用于发送与恢复站内信
 */
    private $senderid;
    public function GetSenderid(){
        return $this->senderid ;
    }
/*
 * senderNickname 	String 	必须 	发信人别名 	发信人别名
 */
    private $senderNickname;
    public function GetSenderNickname(){
        return $this->senderNickname ;
    }
/*
 * tdMessageInfoId 	Long 	必须 	信息ID 	信息ID
 */
    private $tdMessageInfoId;
    public function GetTdMessageInfoId(){
        return $this->tdMessageInfoId ;
    }
/*
 * tdmessagetemplatesid 	String 	必须 	信息模板ID 	信息模板ID
 */
    private $tdmessagetemplatesid;
    public function GetTdmessagetemplatesid(){
        return $this->tdmessagetemplatesid ;
    }
/*
 * tdMessageTopicId 	Long 	必须 	信息主题ID 	信息主题ID
 */

    private $tdMessageTopicId;
    public function GetTdMessageTopicId(){
        return $this->tdMessageTopicId ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "attatchment", $this->stdResult )) {
            $this->attatchment = $this->stdResult->{"attatchment"};
        }
        if (array_key_exists ( "attatchment0", $this->stdResult )) {
            $this->attatchment0 = $this->stdResult->{"attatchment0"};
        }
        if (array_key_exists ( "content", $this->stdResult )) {
            $this->content = $this->stdResult->{"content"};
        }
        if (array_key_exists ( "createtime", $this->stdResult )) {
            $this->createtime = $this->stdResult->{"createtime"};
        }
        if (array_key_exists ( "isTemplates", $this->stdResult )) {
            $this->isTemplates = $this->stdResult->{"isTemplates"};
        }
        if (array_key_exists ( "receiverNickname", $this->stdResult )) {
            $this->receiverNickname = $this->stdResult->{"receiverNickname"};
        }
        if (array_key_exists ( "recieverid", $this->stdResult )) {
            $this->recieverid = $this->stdResult->{"recieverid"};
        }
        if (array_key_exists ( "searshStatus", $this->stdResult )) {
            $this->searshStatus = $this->stdResult->{"searshStatus"};
        }
        if (array_key_exists ( "senderid", $this->stdResult )) {
            $this->senderid = $this->stdResult->{"senderid"};
        }
        if (array_key_exists ( "senderNickname", $this->stdResult )) {
            $this->senderNickname = $this->stdResult->{"senderNickname"};
        }
        if (array_key_exists ( "tdMessageInfoId", $this->stdResult )) {
            $this->tdMessageInfoId = $this->stdResult->{"tdMessageInfoId"};
        }
        if (array_key_exists ( "tdmessagetemplatesid", $this->stdResult )) {
            $this->tdmessagetemplatesid = $this->stdResult->{"tdmessagetemplatesid"};
        }
        if (array_key_exists ( "tdMessageTopicId", $this->stdResult )) {
            $this->tdMessageTopicId = $this->stdResult->{"tdMessageTopicId"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "attatchment", $this->arrayResult )) {
            $this->attatchment = $arrayResult['attatchment'];
        }
        if (array_key_exists ( "attatchment0", $this->arrayResult )) {
            $this->attatchment0 = $arrayResult['attatchment0'];
        }
        if (array_key_exists ( "content", $this->arrayResult )) {
            $this->content = $arrayResult['content'];
        }
        if (array_key_exists ( "createtime", $this->arrayResult )) {
            $this->createtime = $arrayResult['createtime'];
        }
        if (array_key_exists ( "isTemplates", $this->arrayResult )) {
            $this->isTemplates = $arrayResult['isTemplates'];
        }
        if (array_key_exists ( "receiverNickname", $this->arrayResult )) {
            $this->receiverNickname = $arrayResult['receiverNickname'];
        }
        if (array_key_exists ( "recieverid", $this->arrayResult )) {
            $this->recieverid = $arrayResult['recieverid'];
        }
        if (array_key_exists ( "searshStatus", $this->arrayResult )) {
            $this->searshStatus = $arrayResult['searshStatus'];
        }
        if (array_key_exists ( "senderid", $this->arrayResult )) {
            $this->senderid = $arrayResult['senderid'];
        }
        if (array_key_exists ( "senderNickname", $this->arrayResult )) {
            $this->senderNickname = $arrayResult['senderNickname'];
        }
        if (array_key_exists ( "tdMessageInfoId", $this->arrayResult )) {
            $this->tdMessageInfoId = $arrayResult['tdMessageInfoId'];
        }
        if (array_key_exists ( "tdmessagetemplatesid", $this->arrayResult )) {
            $this->tdmessagetemplatesid = $arrayResult['tdmessagetemplatesid'];
        }
        if (array_key_exists ( "tdMessageTopicId", $this->arrayResult )) {
            $this->tdMessageTopicId = $arrayResult['tdMessageTopicId'];
        }

    }
}