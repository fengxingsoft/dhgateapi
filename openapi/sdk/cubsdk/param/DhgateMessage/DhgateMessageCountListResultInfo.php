<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:53
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateMessageCountListResultInfo
{
/*
 * msgCount 	Integer 	必须 	消息总量 	消息总量
 */
    private $msgCount;
    public function GetMsgCount(){
        return $this->msgCount ;
    }
/*
 * msgType 	String 	必须 	站内信消息类型
 * 001=买卖家消息-询盘,
 * 002=买卖家消息-订单,
 * 003=买卖家消息-其它,
 * 004=系统消息-订单,
 * 005=系统消息-产品,
 * 006=系统消息-付款/退款,
 * 007=系统消息-促销,
 * 008=系统消息-账户,
 * 009=系统消息-其它,
 * 010=平台公告-活动宣传,
 * 011=平台公告-政策通知,
 * 012=平台公告-商品营销,
 * 013=平台公告-其它
 */
    private $msgType;
    public function GetMsgType(){
        return $this->msgType ;
    }
/*
 * unReadCount 	Integer 	必须 	未读消息量 	未读消息量
 */
    private $unReadCount;
    public function GetUnReadCount(){
        return $this->unReadCount ;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "msgCount", $this->stdResult )) {
            $this->msgCount = $this->stdResult->{"msgCount"};
        }
        if (array_key_exists ( "msgType", $this->stdResult )) {
            $this->msgType = $this->stdResult->{"msgType"};
        }
        if (array_key_exists ( "unReadCount", $this->stdResult )) {
            $this->unReadCount = $this->stdResult->{"unReadCount"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "msgCount", $this->arrayResult )) {
            $this->msgCount = $arrayResult['msgCount'];
        }
        if (array_key_exists ( "msgType", $this->arrayResult )) {
            $this->msgType = $arrayResult['msgType'];
        }
        if (array_key_exists ( "unReadCount", $this->arrayResult )) {
            $this->unReadCount = $arrayResult['unReadCount'];
        }
    }
}
