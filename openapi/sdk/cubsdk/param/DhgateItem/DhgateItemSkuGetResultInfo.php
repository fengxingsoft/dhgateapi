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

class DhgateItemSkuGetResultInfo
{
/*
 * attrId 	Integer 	必须 	属性id 	示例值：700229
 */
    private $attrId;
    public function GetAttrId(){
        return $this->attrId ;
    }
/*
 * attrValId 	Integer 	必须 	属性值id 	示例值：985416
 */
    private $attrValId;
    public function GetAttrValId(){
        return $this->attrValId ;
    }
/*
 * itemCode 	Long 	必须 	产品编码 	示例值：202869901
 */
    private $itemCode;
    public function GetItemCode(){
        return $this->itemCode ;
    }
/*
 * itemSkuAttrvalId 	Long 	必须 	主键ID 	产品sku属性值主键id;示例值：3150467099
 */
    private $itemSkuAttrvalId;
    public function GetItemSkuAttrvalId(){
        return $this->itemSkuAttrvalId ;
    }
/*
 * sizeSpecType 	Integer 	必须 	规格类型 	1 销售规格，2，规格，3自定义规格；示例值：2
 */
    private $sizeSpecType;
    public function GetSizeSpecType(){
        return $this->sizeSpecType ;
    }
/*
 * skuId 	Long 	必须 	产品skuId 	和ItemSku中skuId相同，为关联外键；示例值：1165661007
 */
    private $skuId;
    public function GetSkuId(){
        return $this->skuId ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "attrId", $this->stdResult )) {
            $this->attrId = $this->stdResult->{"attrId"};
        }
        if (array_key_exists ( "attrValId", $this->stdResult )) {
            $this->attrValId = $this->stdResult->{"attrValId"};
        }
        if (array_key_exists ( "itemCode", $this->stdResult )) {
            $this->itemCode = $this->stdResult->{"itemCode"};
        }
        if (array_key_exists ( "itemSkuAttrvalId", $this->stdResult )) {
            $this->itemSkuAttrvalId = $this->stdResult->{"itemSkuAttrvalId"};
        }
        if (array_key_exists ( "sizeSpecType", $this->stdResult )) {
            $this->sizeSpecType = $this->stdResult->{"sizeSpecType"};
        }
        if (array_key_exists ( "skuId", $this->stdResult )) {
            $this->skuId = $this->stdResult->{"skuId"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "attrId", $this->arrayResult )) {
            $this->attrId = $arrayResult['attrId'];
        }
        if (array_key_exists ( "attrValId", $this->arrayResult )) {
            $this->attrValId = $arrayResult['attrValId'];
        }
        if (array_key_exists ( "itemCode", $this->arrayResult )) {
            $this->itemCode = $arrayResult['itemCode'];
        }
        if (array_key_exists ( "itemSkuAttrvalId", $this->arrayResult )) {
            $this->itemSkuAttrvalId = $arrayResult['itemSkuAttrvalId'];
        }
        if (array_key_exists ( "sizeSpecType", $this->arrayResult )) {
            $this->sizeSpecType = $arrayResult['sizeSpecType'];
        }
        if (array_key_exists ( "skuId", $this->arrayResult )) {
            $this->skuId = $arrayResult['skuId'];
        }
    }
}