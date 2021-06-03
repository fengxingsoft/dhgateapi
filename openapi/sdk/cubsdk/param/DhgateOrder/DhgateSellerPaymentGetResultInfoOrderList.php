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

class DhgateSellerPaymentGetResultInfoOrderList
{

/*
 * isfactory 	Long 	必须 	是否是工厂订单 	是否是工厂订单
 */
    private $isfactory;
    public function GetIsfactory(){
        return $this->isfactory ;
    }
/*
 * money 	String 	必须 	应转金额 	应转金额
 */
    private $money;
    public function GetMoney(){
        return $this->money ;
    }
/*
 * paymenttype 	String 	必须 	资金类型 	资金类型
 */
    private $paymenttype;
    public function GetPaymenttype(){
        return $this->paymenttype ;
    }
/*
 * remark 	String 	必须 	备注 	备注
 */
    private $remark;
    public function GetRemark(){
        return $this->remark ;
    }
/*
 * rfxId 	String 	必须 	订单 id 	订单 id
 */
    private $rfxId;
    public function GetRfxId(){
        return $this->rfxId ;
    }
/*
 * rfxNo 	String 	必须 	订单号 	订单号
 */
    private $rfxNo;
    public function GetRfxNo(){
        return $this->rfxNo ;
    }
/*
 * updateDate 	Date 	必须 	更新时间 	更新时间
 */
    private $updateDate;
    public function GetUpdateDate(){
        return $this->updateDate ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "isfactory", $this->stdResult )) {
            $this->isfactory = $this->stdResult->{"isfactory"};
        }
        if (array_key_exists ( "money", $this->stdResult )) {
            $this->money = $this->stdResult->{"money"};
        }
        if (array_key_exists ( "paymenttype", $this->stdResult )) {
            $this->paymenttype = $this->stdResult->{"paymenttype"};
        }
        if (array_key_exists ( "remark", $this->stdResult )) {
            $this->remark = $this->stdResult->{"remark"};
        }
        if (array_key_exists ( "rfxId", $this->stdResult )) {
            $this->rfxId = $this->stdResult->{"rfxId"};
        }
        if (array_key_exists ( "rfxNo", $this->stdResult )) {
            $this->rfxNo = $this->stdResult->{"rfxNo"};
        }
        if (array_key_exists ( "updateDate", $this->stdResult )) {
            $this->updateDate = $this->stdResult->{"updateDate"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "isfactory", $this->arrayResult )) {
            $this->isfactory = $arrayResult['isfactory'];
        }
        if (array_key_exists ( "money", $this->arrayResult )) {
            $this->money = $arrayResult['money'];
        }
        if (array_key_exists ( "paymenttype", $this->arrayResult )) {
            $this->paymenttype = $arrayResult['paymenttype'];
        }
        if (array_key_exists ( "remark", $this->arrayResult )) {
            $this->remark = $arrayResult['remark'];
        }
        if (array_key_exists ( "rfxId", $this->arrayResult )) {
            $this->rfxId = $arrayResult['rfxId'];
        }
        if (array_key_exists ( "rfxNo", $this->arrayResult )) {
            $this->rfxNo = $arrayResult['rfxNo'];
        }
        if (array_key_exists ( "updateDate", $this->arrayResult )) {
            $this->updateDate = $arrayResult['updateDate'];
        }
    }
}