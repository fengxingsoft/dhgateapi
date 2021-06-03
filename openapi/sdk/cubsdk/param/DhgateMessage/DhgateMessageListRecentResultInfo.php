<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/18
 * Time: 17:23
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateMessageListRecentResultInfo
{

    /*
     * lastReplyTime 	String 	必须 	最后回复时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
     */
    private $lastReplyTime;
    public function GetLastReplyTime(){
        return $this->lastReplyTime ;
    }
    /*
     * msgId 	Long 	必须 	主题ID 	示例值：274576550
     */
    private $msgId;
    public function GetMsgId(){
        return $this->msgId ;
    }
    /*
     * msgReplyCount 	Long 	必须 	回复数量 	示例值：0
     */
    private $msgReplyCount;
    public function GetMsgReplyCount(){
        return $this->msgReplyCount ;
    }
    /*
     * msgTitle 	String 	必须 	主题的标题 	示例值：[DHgate]拒绝请款通知
     */
    private $msgTitle;
    public function GetMsgTitle(){
        return $this->msgTitle ;
    }
    /*
     * msgType 	String 	必须 	站内信类型 	001=买卖家消息-询盘,002=买卖家消息-订单,003=买卖家消息-其它,004=系统消息-订单,005=系统消息-产品,006=系统消息-付款/退款,007=系统消息-促销,008=系统消息-账户,009=系统消息-其它,010=平台公告-活动宣传,011=平台公告-政策通知,012=平台公告-商品营销,013=平台公告-其它。
     */
    private $msgType;
    public function GetMsgType(){
        return $this->msgType ;
    }
    /*
     * param 	String 	可选 	附加参数 	取值说明：当msgType=001时，此值为产品编码（即itemCode），当msgType =002时此值为订单号，其余为空值
     */
    private $param;
    public function GetParam(){
        return $this->param ;
    }
    /*
     * receiverMark 	Long 	必须 	接收人是否已标记 	0:未标记,1:已标记
     */
    private $receiverMark;
    public function GetReceiverMark(){
        return $this->receiverMark ;
    }
    /*
     * receiverNickName 	String 	必须 	收信人的呢称 	示例值：hgsupplier
     */
    private $receiverNickName;
    public function GetReceiverNickName(){
        return $this->receiverNickName ;
    }
    /*
     * receiverRead 	Long 	必须 	接收人是否否已读 	0:未读,1:已读
     */
    private $receiverRead;
    public function GetReceiverRead(){
        return $this->receiverRead ;
    }
    /*
     * receiverStatus 	Long 	必须 	接收人站内信状态 	0:正常,1:垃圾箱
     */
    private $receiverStatus;
    public function GetReceiverStatus(){
        return $this->receiverStatus ;
    }
    /*
     * recieverId 	String 	必须 	收信人systemuserbaseid 	示例值：402880f100f59ccd0100f59cd37d0005
     */
    private $recieverId;
    public function GetRecieverId(){
        return $this->recieverId ;
    }
    /*
     * recieverOrgId 	String 	必须 	收信人organizationId 	示例值：402880f100f59ccd0100f59cd37d0004
     */
    private $recieverOrgId;
    public function GetRecieverOrgId(){
        return $this->recieverOrgId ;
    }
    /*
     * senderId 	String 	必须 	发送人的systemuserbaseid 	示例值：SYSTEM
     */
    private $senderId;
    public function GetSenderId(){
        return $this->senderId ;
    }
    /*
     * senderMark 	Long 	必须 	发送人是否标记 	0:未标记,1:已标记
     */
    private $senderMark;
    public function GetSenderMark(){
        return $this->senderMark ;
    }
    /*
     * senderNickName 	String 	必须 	发送人的呢称 	示例值：SYSTEM
     */
    private $senderNickName;
    public function GetSenderNickName(){
        return $this->senderNickName ;
    }
    /*
     * senderOrgId 	String 	必须 	发送人的organizationId 	示例值：SYSTEM
     */
    private $senderOrgId;
    public function GetSenderOrgId(){
        return $this->senderOrgId ;
    }
    /*
     * senderRead 	Long 	必须 	发送人是否已读 	0:未读,1:已读
     */
    private $senderRead;
    public function GetSenderRead(){
        return $this->senderRead ;
    }
    /*
     * senderStatus 	Long 	必须 	发送人站内信状态 	0:正常,1:垃圾箱
     */

    private $senderStatus;
    public function GetSenderStatus(){
        return $this->senderStatus ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "lastReplyTime", $this->stdResult )) {
            $this->lastReplyTime = $this->stdResult->{"lastReplyTime"};
        }
        if (array_key_exists ( "msgId", $this->stdResult )) {
            $this->msgId = $this->stdResult->{"msgId"};
        }
        if (array_key_exists ( "msgReplyCount", $this->stdResult )) {
            $this->msgReplyCount = $this->stdResult->{"msgReplyCount"};
        }
        if (array_key_exists ( "msgTitle", $this->stdResult )) {
            $this->msgTitle = $this->stdResult->{"msgTitle"};
        }
        if (array_key_exists ( "msgType", $this->stdResult )) {
            $this->msgType = $this->stdResult->{"msgType"};
        }
        if (array_key_exists ( "param", $this->stdResult )) {
            $this->param = $this->stdResult->{"param"};
        }
        if (array_key_exists ( "receiverMark", $this->stdResult )) {
            $this->receiverMark = $this->stdResult->{"receiverMark"};
        }
        if (array_key_exists ( "receiverNickName", $this->stdResult )) {
            $this->receiverNickName = $this->stdResult->{"receiverNickName"};
        }
        if (array_key_exists ( "receiverRead", $this->stdResult )) {
            $this->receiverRead = $this->stdResult->{"receiverRead"};
        }
        if (array_key_exists ( "receiverStatus", $this->stdResult )) {
            $this->receiverStatus = $this->stdResult->{"receiverStatus"};
        }
        if (array_key_exists ( "recieverId", $this->stdResult )) {
            $this->recieverId = $this->stdResult->{"recieverId"};
        }
        if (array_key_exists ( "recieverOrgId", $this->stdResult )) {
            $this->recieverOrgId = $this->stdResult->{"recieverOrgId"};
        }
        if (array_key_exists ( "senderId", $this->stdResult )) {
            $this->senderId = $this->stdResult->{"senderId"};
        }
        if (array_key_exists ( "senderMark", $this->stdResult )) {
            $this->senderMark = $this->stdResult->{"senderMark"};
        }
        if (array_key_exists ( "senderNickName", $this->stdResult )) {
            $this->senderNickName = $this->stdResult->{"senderNickName"};
        }
        if (array_key_exists ( "senderOrgId", $this->stdResult )) {
            $this->senderOrgId = $this->stdResult->{"senderOrgId"};
        }
        if (array_key_exists ( "senderRead", $this->stdResult )) {
            $this->senderRead = $this->stdResult->{"senderRead"};
        }
        if (array_key_exists ( "senderStatus", $this->stdResult )) {
            $this->senderStatus = $this->stdResult->{"senderStatus"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "lastReplyTime", $this->arrayResult )) {
            $this->lastReplyTime = $arrayResult['lastReplyTime'];
        }
        if (array_key_exists ( "msgId", $this->arrayResult )) {
            $this->msgId = $arrayResult['msgId'];
        }
        if (array_key_exists ( "msgReplyCount", $this->arrayResult )) {
            $this->msgReplyCount = $arrayResult['msgReplyCount'];
        }
        if (array_key_exists ( "msgTitle", $this->arrayResult )) {
            $this->msgTitle = $arrayResult['msgTitle'];
        }
        if (array_key_exists ( "msgType", $this->arrayResult )) {
            $this->msgType = $arrayResult['msgType'];
        }
        if (array_key_exists ( "param", $this->arrayResult )) {
            $this->param = $arrayResult['param'];
        }
        if (array_key_exists ( "receiverMark", $this->arrayResult )) {
            $this->receiverMark = $arrayResult['receiverMark'];
        }
        if (array_key_exists ( "receiverNickName", $this->arrayResult )) {
            $this->receiverNickName = $arrayResult['receiverNickName'];
        }
        if (array_key_exists ( "receiverRead", $this->arrayResult )) {
            $this->receiverRead = $arrayResult['receiverRead'];
        }
        if (array_key_exists ( "receiverStatus", $this->arrayResult )) {
            $this->receiverStatus = $arrayResult['receiverStatus'];
        }
        if (array_key_exists ( "recieverId", $this->arrayResult )) {
            $this->recieverId = $arrayResult['recieverId'];
        }
        if (array_key_exists ( "recieverOrgId", $this->arrayResult )) {
            $this->recieverOrgId = $arrayResult['recieverOrgId'];
        }
        if (array_key_exists ( "senderId", $this->arrayResult )) {
            $this->senderId = $arrayResult['senderId'];
        }
        if (array_key_exists ( "senderMark", $this->arrayResult )) {
            $this->senderMark = $arrayResult['senderMark'];
        }
        if (array_key_exists ( "senderNickName", $this->arrayResult )) {
            $this->senderNickName = $arrayResult['senderNickName'];
        }
        if (array_key_exists ( "senderOrgId", $this->arrayResult )) {
            $this->senderOrgId = $arrayResult['senderOrgId'];
        }
        if (array_key_exists ( "senderRead", $this->arrayResult )) {
            $this->senderRead = $arrayResult['senderRead'];
        }
        if (array_key_exists ( "senderStatus", $this->arrayResult )) {
            $this->senderStatus = $arrayResult['senderStatus'];
        }

    }
}
