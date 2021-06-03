<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateBase;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage\DhgateMessageGetResultInfo;

class DhgateMessageGetResult{

/*
 * lastReplyTime 	String 	必须 	最后回复时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $lastReplyTime;
    public function GetLastReplyTime(){
        return $this->lastReplyTime;
    }
/*
 * msgDetailList 	MsgDetail[] 	必须 	消息回复内容列表信息 	MsgDetail站内信会话信息，包含detailId=记录ID，content=回复内容，createTime=创建时间，receiverNickName=收信人昵称，receiverId=收件人ID，senderNickName=发信人昵称，senderId=发信人ID……
 */
    private $msgDetailList;
    public function GetMsgDetailList(){
        return $this->msgDetailList;
    }
/*
 * msgReplyCount 	Long 	必须 	消息总数 	回复消息总数
 */
    private $msgReplyCount;
    public function GetMsgReplyCount(){
        return $this->msgReplyCount;
    }
/*
 * msgTitle 	String 	必须 	消息主题 	消息主题
 */

    private $msgTitle;
    public function GetMsgTitle(){
        return $this->msgTitle;
    }
/*
 * msgType 	String 	必须 	消息类型 	001=买卖家消息-询盘,002=买卖家消息-订单,003=买卖家消息-其它,004=系统消息-订单,005=系统消息-产品,006=系统消息-付款/退款,007=系统消息-促销,008=系统消息-账户,009=系统消息-其它,010=平台公告-活动宣传,011=平台公告-政策通知,012=平台公告-商品营销,013=平台公告-其它
 */
    private $msgType;
    public function GetMsgType(){
        return $this->msgType;
    }
/*
 * param 	String 	可选 	附加参数 	当msgType=001时，此值为产品编码（即itemCode），当msgType =002时此值为订单号，其余为空值
 */
    private $param;
    public function GetParam(){
        return $this->param;
    }
/*
 * senderNickName 	String 	必须 	发送者昵称 	消息联系人昵称
 */
    private $senderNickName;
    public function GetSenderNickName(){
        return $this->senderNickName;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

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
        if (array_key_exists ( "senderNickName", $this->stdResult )) {
            $this->senderNickName = $this->stdResult->{"senderNickName"};
        }
        if (array_key_exists ( "msgDetailList", $this->stdResult )) {
            $this->msgDetailList = $this->stdResult->{"msgDetailList"};
        }
        if (array_key_exists ( "msgDetailList", $this->stdResult )) {
            $msgDetailListResult=$this->stdResult->{"msgDetailList"};
            $object = json_decode ( json_encode ( $msgDetailListResult ), true );
            $this->imageList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateMessageGetResultInfo=new DhgateMessageGetResultInfo();
                $DhgateMessageGetResultInfo->setArrayResult($arrayobject );
                $this->msgDetailList  [$i] = $DhgateMessageGetResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {

        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "lastReplyTime", $this->arrayResult )) {
            $this->lastReplyTime = $arrayResult['lastReplyTime'];
        }
        if (array_key_exists ( "msgDetailList", $this->arrayResult )) {
            $this->msgDetailList = $arrayResult['msgDetailList'];
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
         if (array_key_exists ( "senderNickName", $this->arrayResult )) {
             $this->senderNickName = $arrayResult['senderNickName'];
         }
    }
}