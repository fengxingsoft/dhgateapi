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

class DhgateMessageGetResultInfo
{
/*
 * attNames 	String 	可选 	附件名称列表 	附件真实名称，多个文件名以逗号分隔
 */
    private $attNames;
    public function GetAttNames(){
        return $this->attNames ;
    }

/*
 * attUrls 	String 	可选 	附件URL列表 	附件在文件服务器上的URL相对地址，多个地址以逗号分隔
 */
    private $attUrls;
    public function GetAttUrls(){
        return $this->attUrls ;
    }

/*
 * content 	String 	必须 	回复内容 	支持HTML代码；示例值：尊敬的 hgsupplier
 */
    private $content;
    public function GetContent(){
        return $this->content ;
    }

/*
 * createTime 	String 	必须 	创建时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $createTime;
    public function GetCreateTime(){
        return $this->createTime ;
    }

/*
 * detailId 	long 	必须 	记录ID 	示例值：402524108
 */
    private $detailId;
    public function GetDetailId(){
        return $this->detailId ;
    }

/*
 * receiverId 	String 	必须 	收件人ID 	示例值：402880f100f59ccd0100f59cd37d0005
 */
    private $receiverId;
    public function GetReceiverId(){
        return $this->receiverId ;
    }

/*
 * receiverNickName 	String 	必须 	收信人的昵称 	示例值：hgsupplier
 */
    private $receiverNickName;
    public function GetReceiverNickName(){
        return $this->receiverNickName ;
    }

/*
 * senderId 	String 	必须 	发信人ID 	示例值：SYSTEM
 */
    private $senderId;
    public function GetSenderId(){
        return $this->senderId ;
    }

/*
 * senderNickName 	String 	必须 	发信人的昵称 	示例值：SYSTEM
 */
    private $senderNickName;
    public function GetSenderNickName(){
        return $this->senderNickName ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "attNames", $this->stdResult )) {
            $this->attNames = $this->stdResult->{"attNames"};
        }
        if (array_key_exists ( "attUrls", $this->stdResult )) {
            $this->attUrls = $this->stdResult->{"attUrls"};
        }
        if (array_key_exists ( "content", $this->stdResult )) {
            $this->content = $this->stdResult->{"content"};
        }
        if (array_key_exists ( "createTime", $this->stdResult )) {
            $this->createTime = $this->stdResult->{"createTime"};
        }
        if (array_key_exists ( "detailId", $this->stdResult )) {
            $this->detailId = $this->stdResult->{"detailId"};
        }
        if (array_key_exists ( "receiverId", $this->stdResult )) {
            $this->receiverId = $this->stdResult->{"receiverId"};
        }
        if (array_key_exists ( "receiverNickName", $this->stdResult )) {
            $this->receiverNickName = $this->stdResult->{"receiverNickName"};
        }
        if (array_key_exists ( "senderId", $this->stdResult )) {
            $this->senderId = $this->stdResult->{"senderId"};
        }
        if (array_key_exists ( "senderNickName", $this->stdResult )) {
            $this->senderNickName = $this->stdResult->{"senderNickName"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "attNames", $this->arrayResult )) {
            $this->attNames = $arrayResult['attNames'];
        }
        if (array_key_exists ( "attUrls", $this->arrayResult )) {
            $this->attUrls = $arrayResult['attUrls'];
        }
        if (array_key_exists ( "content", $this->arrayResult )) {
            $this->content = $arrayResult['content'];
        }
        if (array_key_exists ( "createTime", $this->arrayResult )) {
            $this->createTime = $arrayResult['createTime'];
        }
        if (array_key_exists ( "detailId", $this->arrayResult )) {
            $this->detailId = $arrayResult['detailId'];
        }
        if (array_key_exists ( "receiverId", $this->arrayResult )) {
            $this->receiverId = $arrayResult['receiverId'];
        }
        if (array_key_exists ( "receiverNickName", $this->arrayResult )) {
            $this->receiverNickName = $arrayResult['receiverNickName'];
        }
        if (array_key_exists ( "senderId", $this->arrayResult )) {
            $this->senderId = $arrayResult['senderId'];
        }
        if (array_key_exists ( "senderNickName", $this->arrayResult )) {
            $this->senderNickName = $arrayResult['senderNickName'];
        }

    }
}