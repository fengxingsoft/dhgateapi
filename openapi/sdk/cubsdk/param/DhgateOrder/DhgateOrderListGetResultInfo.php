<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOrderListGetResultInfo
{

/*
 * buyerConfirmDate 	String 	必须 	买家确认收货时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $buyerConfirmDate;
    public function GetBuyerConfirmDate(){
        return $this->buyerConfirmDate ;
    }
/*
 * buyerId 	String 	必须 	买家ID 	示例值：ff808081416839d5014168e43ab30033
 */
    private $buyerId;
    public function GetBuyerId(){
        return $this->buyerId ;
    }
/*
 * buyerNickName 	String 	必须 	买家别名 	买家昵称；示例值：zhangsan
 */
    private $buyerNickName;
    public function GetBuyerNickName(){
        return $this->buyerNickName ;
    }
/*
 * cancelDate 	String 	必须 	交易取消时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $cancelDate;
    public function GetCancelDate(){
        return $this->cancelDate ;
    }
/*
 * country 	String 	必须 	收货国家 	示例值：United States
 */
    private $country;
    public function GetCountry(){
        return $this->country ;
    }
/*
 * deliveryDate 	String 	必须 	发货时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $deliveryDate;
    public function GetDeliveryDate(){
        return $this->deliveryDate ;
    }
/*
 * deliveryDeadline 	String 	必须 	发货截止时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $deliveryDeadline;
    public function GetDeliveryDeadline(){
        return $this->deliveryDeadline ;
    }
/*
 * inAccountDate 	String 	必须 	入账时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $inAccountDate;
    public function GetInAccountDate(){
        return $this->inAccountDate ;
    }
/*
 * isWarn 	Boolean 	必须 	是否需要特别注意的订单（如高风险订单、售后纠纷订单等） 	值为false或null表示订单正常，true表示此订单需要特别注意一下，例如，防止高风险订单直接发货
 */
    private $isWarn;
    public function GetIsWarn(){
        return $this->isWarn ;
    }
/*
 * orderId 	String 	必须 	订单Id 	订单Id；示例值：ff808081416839d5014168e43ab30033
 */
    private $orderId;
    public function GetOrderId(){
        return $this->orderId ;
    }
/*
 * orderNo 	String 	必须 	订单号 	卖家后台登录能看到成交的订单号；示例值：1330312162
 */
    private $orderNo;
    public function GetOrderNo(){
        return $this->orderNo ;
    }
/*
 * orderRemark 	String 	可选 	订单备注 	蓝色要10个，加急，圣诞前要用到等等备注信息
 */
    private $orderRemark;
    public function GetOrderRemark(){
        return $this->orderRemark ;
    }
/*
 * orderStatus 	String 	必须 	订单状态 	111000,订单取消;101003,等待买家付款;102001,买家已付款，等待平台确认;103001,等待发货;105001,买家申请退款，等待协商结果;105002,退款协议已达成;105003,部分退款后，等待发货;105004,买家取消退款申请;103002,已部分发货;101009,等待买家确认收货;106001,退款/退货协商中，等待协议达成;106002,买家投诉到平台;106003,协议已达成，执行中;102006,人工确认收货;102007,超过预定期限，自动确认收货;102111,交易成功;111111,交易关闭
 */
    private $orderStatus;
    public function GetOrderStatus(){
        return $this->orderStatus ;
    }
/*
 * orderTotalPrice 	Double 	必须 	订单总金额 	示例值：100.00
 */
    private $orderTotalPrice;
    public function GetOrderTotalPrice(){
        return $this->orderTotalPrice ;
    }
/*
 * payDate 	String 	必须 	付款时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $payDate;
    public function GetPayDate(){
        return $this->payDate ;
    }
/*
 * startedDate 	String 	必须 	下单日期 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $startedDate;
    public function GetStartedDate(){
        return $this->startedDate ;
    }
/*
 * updateDate 	String 	必须 	更新时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $updateDate;
    public function GetUpdateDate(){
        return $this->updateDate ;
    }
/*
 * warnReason 	String 	必须 	警告原因 	示例值：高风险订单、订单发起售后纠纷、信用卡拒付等
 */
    private $warnReason;
    public function GetWarnReason(){
        return $this->warnReason ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "buyerConfirmDate", $this->stdResult )) {
            $this->buyerConfirmDate = $this->stdResult->{"buyerConfirmDate"};
        }
        if (array_key_exists ( "buyerId", $this->stdResult )) {
            $this->buyerId = $this->stdResult->{"buyerId"};
        }
        if (array_key_exists ( "buyerNickName", $this->stdResult )) {
            $this->buyerNickName = $this->stdResult->{"buyerNickName"};
        }
        if (array_key_exists ( "cancelDate", $this->stdResult )) {
            $this->cancelDate = $this->stdResult->{"cancelDate"};
        }
        if (array_key_exists ( "country", $this->stdResult )) {
            $this->country = $this->stdResult->{"country"};
        }
        if (array_key_exists ( "deliveryDate", $this->stdResult )) {
            $this->deliveryDate = $this->stdResult->{"deliveryDate"};
        }
        if (array_key_exists ( "deliveryDeadline", $this->stdResult )) {
            $this->deliveryDeadline = $this->stdResult->{"deliveryDeadline"};
        }
        if (array_key_exists ( "inAccountDate", $this->stdResult )) {
            $this->inAccountDate = $this->stdResult->{"inAccountDate"};
        }
        if (array_key_exists ( "isWarn", $this->stdResult )) {
            $this->isWarn = $this->stdResult->{"isWarn"};
        }
        if (array_key_exists ( "orderId", $this->stdResult )) {
            $this->orderId = $this->stdResult->{"orderId"};
        }
        if (array_key_exists ( "orderNo", $this->stdResult )) {
            $this->orderNo = $this->stdResult->{"orderNo"};
        }
        if (array_key_exists ( "orderRemark", $this->stdResult )) {
            $this->orderRemark = $this->stdResult->{"orderRemark"};
        }
        if (array_key_exists ( "orderStatus", $this->stdResult )) {
            $this->orderStatus = $this->stdResult->{"orderStatus"};
        }
        if (array_key_exists ( "orderTotalPrice", $this->stdResult )) {
            $this->orderTotalPrice = $this->stdResult->{"orderTotalPrice"};
        }
        if (array_key_exists ( "payDate", $this->stdResult )) {
            $this->payDate = $this->stdResult->{"payDate"};
        }
        if (array_key_exists ( "startedDate", $this->stdResult )) {
            $this->startedDate = $this->stdResult->{"startedDate"};
        }
        if (array_key_exists ( "updateDate", $this->stdResult )) {
            $this->updateDate = $this->stdResult->{"updateDate"};
        }
        if (array_key_exists ( "warnReason", $this->stdResult )) {
            $this->warnReason = $this->stdResult->{"warnReason"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "buyerConfirmDate", $this->arrayResult )) {
            $this->buyerConfirmDate = $arrayResult['buyerConfirmDate'];
        }
        if (array_key_exists ( "buyerId", $this->arrayResult )) {
            $this->buyerId = $arrayResult['buyerId'];
        }
        if (array_key_exists ( "buyerNickName", $this->arrayResult )) {
            $this->buyerNickName = $arrayResult['buyerNickName'];
        }
        if (array_key_exists ( "cancelDate", $this->arrayResult )) {
            $this->cancelDate = $arrayResult['cancelDate'];
        }
        if (array_key_exists ( "country", $this->arrayResult )) {
            $this->country = $arrayResult['country'];
        }
        if (array_key_exists ( "deliveryDate", $this->arrayResult )) {
            $this->deliveryDate = $arrayResult['deliveryDate'];
        }
        if (array_key_exists ( "deliveryDeadline", $this->arrayResult )) {
            $this->deliveryDeadline = $arrayResult['deliveryDeadline'];
        }
        if (array_key_exists ( "inAccountDate", $this->arrayResult )) {
            $this->inAccountDate = $arrayResult['inAccountDate'];
        }
        if (array_key_exists ( "isWarn", $this->arrayResult )) {
            $this->isWarn = $arrayResult['isWarn'];
        }
        if (array_key_exists ( "orderId", $this->arrayResult )) {
            $this->orderId = $arrayResult['orderId'];
        }
        if (array_key_exists ( "orderNo", $this->arrayResult )) {
            $this->orderNo = $arrayResult['orderNo'];
        }
        if (array_key_exists ( "orderRemark", $this->arrayResult )) {
            $this->orderRemark = $arrayResult['orderRemark'];
        }
        if (array_key_exists ( "orderStatus", $this->arrayResult )) {
            $this->orderStatus = $arrayResult['orderStatus'];
        }
        if (array_key_exists ( "orderTotalPrice", $this->arrayResult )) {
            $this->orderTotalPrice = $arrayResult['orderTotalPrice'];
        }
        if (array_key_exists ( "payDate", $this->arrayResult )) {
            $this->payDate = $arrayResult['payDate'];
        }
        if (array_key_exists ( "startedDate", $this->arrayResult )) {
            $this->startedDate = $arrayResult['startedDate'];
        }
        if (array_key_exists ( "updateDate", $this->arrayResult )) {
            $this->updateDate = $arrayResult['updateDate'];
        }
        if (array_key_exists ( "warnReason", $this->arrayResult )) {
            $this->warnReason = $arrayResult['warnReason'];
        }
    }
}