<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemGetResultInfoItemSaleSetting
{
/*
 * leadingTime 	Integer 	必须 	备货期 	以天为单位，有备货的产品备货期小于等于2天，没有备货的产品为1—60天；示例值：30
 */
    private $leadingTime;
    public function GetLeadingTime(){
        return $this->leadingTime ;
    }
/*
 * maxSaleQty 	Integer 	必须 	买家一次最大购买量 	无备货时最大购买量必须填写，最大值10000；示例值：10
 */
    private $maxSaleQty;
    public function GetMaxSaleQty(){
        return $this->maxSaleQty ;
    }
/*
 * minWholesaleQty 	Integer 	可选 	最小起批量 	示例值：10（折扣起止数量大于1）
 */
    private $minWholesaleQty;
    public function GetMinWholesaleQty(){
        return $this->minWholesaleQty ;
    }
/*
 * priceConfigType 	Integer 	必须 	设置价格类型 	1分别设置价格，2 统一设置价格；若产品无规格，该字段设置为2(统一设置价格)；示例值：1；
 */
    private $priceConfigType;
    public function GetPriceConfigType(){
        return $this->priceConfigType ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "leadingTime", $this->stdResult )) {
            $this->leadingTime = $this->stdResult->{"leadingTime"};
        }
        if (array_key_exists ( "maxSaleQty", $this->stdResult )) {
            $this->maxSaleQty = $this->stdResult->{"maxSaleQty"};
        }
        if (array_key_exists ( "minWholesaleQty", $this->stdResult )) {
            $this->minWholesaleQty = $this->stdResult->{"minWholesaleQty"};
        }
        if (array_key_exists ( "priceConfigType", $this->stdResult )) {
            $this->priceConfigType = $this->stdResult->{"priceConfigType"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "leadingTime", $this->arrayResult )) {
            $this->leadingTime = $arrayResult['leadingTime'];
        }
        if (array_key_exists ( "maxSaleQty", $this->arrayResult )) {
            $this->maxSaleQty = $arrayResult['maxSaleQty'];
        }
        if (array_key_exists ( "minWholesaleQty", $this->arrayResult )) {
            $this->minWholesaleQty = $arrayResult['minWholesaleQty'];
        }
        if (array_key_exists ( "priceConfigType", $this->arrayResult )) {
            $this->priceConfigType = $arrayResult['priceConfigType'];
        }
    }
}