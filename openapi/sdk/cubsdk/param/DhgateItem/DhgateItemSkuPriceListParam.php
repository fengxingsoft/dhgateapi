<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/27
 * Time: 12:54
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateItemSkuPriceListParam extends SDKDomain
{
/*
 * skuMD5 	String 	必须 	产品skuMD5值 	通过获取产品列表接口（dh.item.sku.list）获取；示例值：2970895b6eae9294479e26a0cc457e6b
 */
    private $skuMD5;
    public function getSkuMd5(){
        return $this->skuMD5;
    }
    public function setSkuMD5( $skuMD5) {
        $this->skuMD5 = $skuMD5;
    }
    public function setSkuMD5Arr( $skuMD5) {
        $this->param["skuMD5"] = $skuMD5;
    }
/*
 * skuPrice 	Double 	必须 	SKU产品的价格 	SKU产品的价格
 */
    private $skuPrice;
    public function getSkuPrice(){
        return $this->skuPrice;
    }
    public function setSkuPrice($skuPrice) {
        $this->skuPrice = $skuPrice;
    }
    public function setSkuPriceArr($skuPrice) {
        $this->param["skuPrice"] = $skuPrice;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "skuMD5", $this->stdResult )) {
            $this->skuMD5 = $this->stdResult->{"skuMD5"};
        }
        if (array_key_exists ( "skuPrice", $this->stdResult )) {
            $this->skuPrice = $this->stdResult->{"skuPrice"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "skuMD5", $this->arrayResult )) {
            $this->skuMD5 = $arrayResult ['skuMD5'];
        }
        if (array_key_exists ( "skuPrice", $this->arrayResult )) {
            $this->skuPrice = $arrayResult ['skuPrice'];
        }
    }
//    private $sdkStdResult=array();
//
//    public function getSdkStdResult(){
//        return $this->sdkStdResult;
//
//    }
}