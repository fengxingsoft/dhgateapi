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

class DhgateItemGetResultInfoItemSkuUpdateItemSkuInventoryUpdate
{

/*
 * inventoryLocation 	String 	可选 	有备货时，产品备货地址编码 	示例值：CN
 */
    private $inventoryLocation;
    public function GetInventoryLocation(){
        return $this->inventoryLocation ;
    }
/*
 * saleStatus 	Integer 	可选 	是否可销售 	0 不可销售，1 可销售示例值：1
 */
    private $saleStatus;
    public function GetSaleStatus(){
        return $this->saleStatus ;
    }
/*
 * skuCode 	String 	可选 	卖家自定义产品sku编码 	示例值：12345
 */
    private $skuCode;
    public function GetSkuCode(){
        return $this->skuCode ;
    }
/*
 * skuInventoryQty 	Integer 	可选 	有备货时，备货地址下sku的备货数量 	示例值：10
 */
    private $skuInventoryQty;
    public function GetSkuInventoryQty(){
        return $this->skuInventoryQty ;
    }
/*
 * skuMD5 	String 	可选 	skuMD5值 	SKU属性的MD5值，区分产品属性
 */
    private $skuMD5;
    public function GetSkuMD5(){
        return $this->skuMD5 ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "inventoryLocation", $this->stdResult )) {
            $this->inventoryLocation = $this->stdResult->{"inventoryLocation"};
        }
        if (array_key_exists ( "saleStatus", $this->stdResult )) {
            $this->saleStatus = $this->stdResult->{"saleStatus"};
        }
        if (array_key_exists ( "skuCode", $this->stdResult )) {
            $this->skuCode = $this->stdResult->{"skuCode"};
        }
        if (array_key_exists ( "skuInventoryQty", $this->stdResult )) {
            $this->skuInventoryQty = $this->stdResult->{"skuInventoryQty"};
        }
        if (array_key_exists ( "skuMD5", $this->stdResult )) {
            $this->skuMD5 = $this->stdResult->{"skuMD5"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "inventoryLocation", $this->arrayResult )) {
            $this->inventoryLocation = $arrayResult['inventoryLocation'];
        }
        if (array_key_exists ( "saleStatus", $this->arrayResult )) {
            $this->saleStatus = $arrayResult['saleStatus'];
        }
        if (array_key_exists ( "skuCode", $this->arrayResult )) {
            $this->skuCode = $arrayResult['skuCode'];
        }
        if (array_key_exists ( "skuInventoryQty", $this->arrayResult )) {
            $this->skuInventoryQty = $arrayResult['skuInventoryQty'];
        }
        if (array_key_exists ( "skuMD5", $this->arrayResult )) {
            $this->skuMD5 = $arrayResult['skuMD5'];
        }
    }
}