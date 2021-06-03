<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 19:04
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOnlineOrderBatchResultInfo
{

/*
 * actureCost 	BigDecimal 	可选 	运费（单位：人民币） 	运费（单位：人民币）
 */
    private $actureCost;
    public function GetActureCost(){
        return $this->actureCost;
    }
/*
 * billId 	String 	必须 	发货流水号 	发货流水号
 */
    private $billId;
    public function GetBillId(){
        return $this->billId;
    }
/*
 * channelId 	String 	必须 	渠道ID 	渠道ID
 */
    private $channelId;
    public function GetChannelId(){
        return $this->channelId;
    }
/*
 * customerOrderNo 	String 	必须 	客户订单号 	客户订单号
 */
    private $customerOrderNo;
    public function GetCustomerOrderNo(){
        return $this->customerOrderNo;
    }
/*
 * remark 	String 	可选 	备注 	备注
 */
    private $remark;
    public function GetRemark(){
        return $this->remark;
    }
/*
 * state 	String 	必须 	当前状态 	A:转单中 ,B:待发货,C:已收货,D:已支付,E:已发货
 */
    private $state;
    public function GetState(){
        return $this->state;
    }
/*
 * trackno 	String 	必须 	运单号 	运单号
 */
    private $trackno;
    public function GetTrackno(){
        return $this->trackno;
    }
/*
 * vTrackno 	String 	可选 	转单号 	转单号
 */
    private $vTrackno;
    public function GetVTrackno(){
        return $this->vTrackno;
    }
/*
 * weight 	BigDecimal 	可选 	包裹真实重量KG 	包裹真实重量KG
 */
    private $weight;
    public function GetWeight(){
        return $this->weight;
    }



    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

         if (array_key_exists ( "actureCost", $this->stdResult )) {
             $this->actureCost = $this->stdResult->{"actureCost"};
         }
        if (array_key_exists ( "billId", $this->stdResult )) {
            $this->billId = $this->stdResult->{"billId"};
        }
        if (array_key_exists ( "channelId", $this->stdResult )) {
            $this->channelId = $this->stdResult->{"channelId"};
        }
         if (array_key_exists ( "customerOrderNo", $this->stdResult )) {
             $this->customerOrderNo = $this->stdResult->{"customerOrderNo"};
         }
        if (array_key_exists ( "remark", $this->stdResult )) {
            $this->remark = $this->stdResult->{"remark"};
        }
        if (array_key_exists ( "state", $this->stdResult )) {
            $this->state = $this->stdResult->{"state"};
        }
        if (array_key_exists ( "trackno", $this->stdResult )) {
            $this->trackno = $this->stdResult->{"trackno"};
        }
        if (array_key_exists ( "vTrackno", $this->stdResult )) {
            $this->vTrackno = $this->stdResult->{"vTrackno"};
        }
        if (array_key_exists ( "weight", $this->stdResult )) {
            $this->weight = $this->stdResult->{"weight"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "actureCost", $this->arrayResult )) {
            $this->actureCost = $arrayResult['actureCost'];
        }
        if (array_key_exists ( "billId", $this->arrayResult )) {
            $this->billId = $arrayResult['billId'];
        }
        if (array_key_exists ( "channelId", $this->arrayResult )) {
            $this->channelId = $arrayResult['channelId'];
        }
        if (array_key_exists ( "customerOrderNo", $this->arrayResult )) {
            $this->customerOrderNo = $arrayResult['customerOrderNo'];
        }
        if (array_key_exists ( "remark", $this->arrayResult )) {
            $this->remark = $arrayResult['remark'];
        }
        if (array_key_exists ( "state", $this->arrayResult )) {
            $this->state = $arrayResult['state'];
        }
        if (array_key_exists ( "trackno", $this->arrayResult )) {
            $this->trackno = $arrayResult['trackno'];
        }
        if (array_key_exists ( "vTrackno", $this->arrayResult )) {
            $this->vTrackno = $arrayResult['vTrackno'];
        }
        if (array_key_exists ( "weight", $this->arrayResult )) {
            $this->weight = $arrayResult['weight'];
        }

    }
}