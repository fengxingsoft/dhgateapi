<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 11:15
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;

class DhgateShippingTemplateGetResultInfoDetailTwo extends SDKDomain
{
/*
 * countryCode 	String 	必须 	当前运输方式支持的国家Id列表 	多个以英文半角逗号分隔
 */
    private $countryCode;
    public function GetCountryCode(){
        return $this->countryCode ;
    }
/*
 * countryName 	String 	必须 	当前运输方式支持的国家Name列表 	多个以英文半角逗号分隔
 */
    private $countryName;
    public function GetCountryName(){
        return $this->countryName ;
    }
/*
 * endQuantity 	Long 	必须 	截至数量 	截至数量
 */
    private $endQuantity;
    public function GetEndQuantity(){
        return $this->endQuantity ;
    }
/*
 * priceStep 	Double 	必须 	显示价格阶梯 	显示价格阶梯
 */
    private $priceStep;
    public function GetPriceStep(){
        return $this->priceStep ;
    }
/*
 * quantityStep 	Long 	必须 	数量阶梯 	数量阶梯
 */
    private $quantityStep;
    public function GetQuantityStep(){
        return $this->quantityStep ;
    }
/*
 * startPrice 	Double 	必须 	显示起始价格 	显示起始价格
 */
    private $startPrice;
    public function GetStartPrice(){
        return $this->startPrice ;
    }
/*
 * startQuantity 	Long 	必须 	起始数量 	起始数量
 */
    private $startQuantity;
    public function GetStartQuantity(){
        return $this->startQuantity ;
    }
/*
 * supportGlobal 	String 	必须 	是否支持到世界各地 	1=支持，0=不支持
 */
    private $supportGlobal;
    public function GetSupportGlobal(){
        return $this->supportGlobal ;
    }


    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "countryCode", $this->stdResult )) {
            $this->countryCode = $this->stdResult->{"countryCode"};
        }
        if (array_key_exists ( "countryName", $this->stdResult )) {
            $this->countryName = $this->stdResult->{"countryName"};
        }
        if (array_key_exists ( "endQuantity", $this->stdResult )) {
            $this->endQuantity = $this->stdResult->{"endQuantity"};
        }
        if (array_key_exists ( "priceStep", $this->stdResult )) {
            $this->priceStep = $this->stdResult->{"priceStep"};
        }
        if (array_key_exists ( "quantityStep", $this->stdResult )) {
            $this->quantityStep = $this->stdResult->{"quantityStep"};
        }
        if (array_key_exists ( "startPrice", $this->stdResult )) {
            $this->startPrice = $this->stdResult->{"startPrice"};
        }
        if (array_key_exists ( "startQuantity", $this->stdResult )) {
            $this->startQuantity = $this->stdResult->{"startQuantity"};
        }
        if (array_key_exists ( "supportGlobal", $this->stdResult )) {
            $this->supportGlobal = $this->stdResult->{"supportGlobal"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "countryCode", $this->arrayResult )) {
            $this->countryCode = $arrayResult['countryCode'];
        }
        if (array_key_exists ( "countryName", $this->arrayResult )) {
            $this->countryName = $arrayResult['countryName'];
        }
        if (array_key_exists ( "endQuantity", $this->arrayResult )) {
            $this->endQuantity = $arrayResult['endQuantity'];
        }
        if (array_key_exists ( "priceStep", $this->arrayResult )) {
            $this->priceStep = $arrayResult['priceStep'];
        }
        if (array_key_exists ( "quantityStep", $this->arrayResult )) {
            $this->quantityStep = $arrayResult['quantityStep'];
        }
        if (array_key_exists ( "startPrice", $this->arrayResult )) {
            $this->startPrice = $arrayResult['startPrice'];
        }
        if (array_key_exists ( "startQuantity", $this->arrayResult )) {
            $this->startQuantity = $arrayResult['startQuantity'];
        }
        if (array_key_exists ( "supportGlobal", $this->arrayResult )) {
            $this->supportGlobal = $arrayResult['supportGlobal'];
        }
    }
}