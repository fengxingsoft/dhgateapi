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

class DhgateOrderProductGetResultInfo
{

/*
 * buyerRemark 	String 	必须 	买家备注 	示例值：易碎，轻拿轻放
 */
    private $buyerRemark;
    public function GetBuyerRemark(){
        return $this->buyerRemark ;
    }
/*
 * categoryName 	String 	必须 	产品类目 	示例值：Martial Arts Clothing, Shoes & Accessories
 */
    private $categoryName;
    public function GetCategoryName(){
        return $this->categoryName ;
    }
/*
 * grossWeight 	Double 	必须 	包装重量 	示例值：10.00
 */
    private $grossWeight;
    public function GetGrossWeight(){
        return $this->grossWeight ;
    }
/*
 * height 	Double 	必须 	产品包装尺寸:高 	单位：cm，示例值：10.00
 */
    private $height;
    public function GetHeight(){
        return $this->height ;
    }
/*
 * itemAttr 	String 	必须 	产品属性 	示例值：颜色、大小、尺码等
 */
    private $itemAttr;
    public function GetItemAttr(){
        return $this->itemAttr ;
    }
/*
 * itemcode 	String 	必须 	产品编号 	产品最终页的URL中有产品编码；示例值:184942450
 */
    private $itemcode;
    public function GetItemcode(){
        return $this->itemcode ;
    }
/*
 * itemCount 	Long 	必须 	产品数量 	示例值：10,如果单位是件，则为10件，如果单位是包，则是10包
 */
    private $itemCount;
    public function GetItemCount(){
        return $this->itemCount ;
    }
/*
 * itemImage 	String 	必须 	产品图片URL 	示例值：100x100/albu_255699841_00
 */
    private $itemImage;
    public function GetItemImage(){
        return $this->itemImage ;
    }
/*
 * itemName 	String 	必须 	产品名称 	示例值:Bluetooth Mini Speakers
 */
    private $itemName;
    public function GetItemName(){
        return $this->itemName ;
    }
/*
 * itemPrice 	Double 	必须 	产品单价 	示例值：100.00
 */
    private $itemPrice;
    public function GetItemPrice(){
        return $this->itemPrice ;
    }
/*
 * itemUrl 	String 	必须 	产品地址URL 	示例值：product/test-20130828001/151000415.html
 */
    private $itemUrl;
    public function GetItemUrl(){
        return $this->itemUrl ;
    }
/*
 * length 	Double 	必须 	产品包装尺寸:长 	单位：cm，示例值：10.00
 */
    private $length;
    public function GetLength(){
        return $this->length ;
    }
/*
 * measureName 	String 	必须 	商品售卖单位 	示例值：包、件、套、千克、千米
 */
    private $measureName;
    public function GetMeasureName(){
        return $this->measureName ;
    }
/*
 * packingQuantity 	long 	必须 	产品打包数量 	大于1表示按包买，同时也代表每包的数量,<=1表示非按包买，itemCount代表购买数量，示例值：10
 */
    private $packingQuantity;
    public function GetPackingQuantity(){
        return $this->packingQuantity ;
    }
/*
 * skuCode 	String 	必须 	商品编码 	示例值：W00000001
 */
    private $skuCode;
    public function GetSkuCode(){
        return $this->skuCode ;
    }
/*
 * skuId 	String 	必须 	商品编码Id 	示例值：000000000000000000000
 */
    private $skuId;
    public function GetSkuId(){
        return $this->skuId ;
    }
/*
 * width 	Double 	必须 	产品包装尺寸:宽 	单位：cm，示例值：10.00
 */
    private $width;
    public function GetWidth(){
        return $this->width ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "buyerRemark", $this->stdResult )) {
            $this->buyerRemark = $this->stdResult->{"buyerRemark"};
        }
        if (array_key_exists ( "categoryName", $this->stdResult )) {
            $this->categoryName = $this->stdResult->{"categoryName"};
        }
        if (array_key_exists ( "grossWeight", $this->stdResult )) {
            $this->grossWeight = $this->stdResult->{"grossWeight"};
        }
        if (array_key_exists ( "height", $this->stdResult )) {
            $this->height = $this->stdResult->{"height"};
        }
        if (array_key_exists ( "itemAttr", $this->stdResult )) {
            $this->itemAttr = $this->stdResult->{"itemAttr"};
        }
        if (array_key_exists ( "itemcode", $this->stdResult )) {
            $this->itemcode = $this->stdResult->{"itemcode"};
        }
        if (array_key_exists ( "itemCount", $this->stdResult )) {
            $this->itemCount = $this->stdResult->{"itemCount"};
        }
        if (array_key_exists ( "itemImage", $this->stdResult )) {
            $this->itemImage = $this->stdResult->{"itemImage"};
        }
        if (array_key_exists ( "itemName", $this->stdResult )) {
            $this->itemName = $this->stdResult->{"itemName"};
        }
        if (array_key_exists ( "itemPrice", $this->stdResult )) {
            $this->itemPrice = $this->stdResult->{"itemPrice"};
        }
        if (array_key_exists ( "itemUrl", $this->stdResult )) {
            $this->itemUrl = $this->stdResult->{"itemUrl"};
        }
        if (array_key_exists ( "length", $this->stdResult )) {
            $this->length = $this->stdResult->{"length"};
        }
        if (array_key_exists ( "measureName", $this->stdResult )) {
            $this->measureName = $this->stdResult->{"measureName"};
        }
        if (array_key_exists ( "packingQuantity", $this->stdResult )) {
            $this->packingQuantity = $this->stdResult->{"packingQuantity"};
        }
        if (array_key_exists ( "skuCode", $this->stdResult )) {
            $this->skuCode = $this->stdResult->{"skuCode"};
        }
        if (array_key_exists ( "skuId", $this->stdResult )) {
            $this->skuId = $this->stdResult->{"skuId"};
        }
        if (array_key_exists ( "width", $this->stdResult )) {
            $this->width = $this->stdResult->{"width"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

         if (array_key_exists ( "buyerRemark", $this->arrayResult )) {
             $this->buyerRemark = $arrayResult['buyerRemark'];
         }
        if (array_key_exists ( "categoryName", $this->arrayResult )) {
            $this->categoryName = $arrayResult['categoryName'];
        }
        if (array_key_exists ( "grossWeight", $this->arrayResult )) {
            $this->grossWeight = $arrayResult['grossWeight'];
        }
        if (array_key_exists ( "height", $this->arrayResult )) {
            $this->height = $arrayResult['height'];
        }
        if (array_key_exists ( "itemAttr", $this->arrayResult )) {
            $this->itemAttr = $arrayResult['itemAttr'];
        }
        if (array_key_exists ( "itemcode", $this->arrayResult )) {
            $this->itemcode = $arrayResult['itemcode'];
        }
         if (array_key_exists ( "itemCount", $this->arrayResult )) {
             $this->itemCount = $arrayResult['itemCount'];
         }
        if (array_key_exists ( "itemImage", $this->arrayResult )) {
            $this->itemImage = $arrayResult['itemImage'];
        }
        if (array_key_exists ( "itemName", $this->arrayResult )) {
            $this->itemName = $arrayResult['itemName'];
        }
        if (array_key_exists ( "itemPrice", $this->arrayResult )) {
            $this->itemPrice = $arrayResult['itemPrice'];
        }
        if (array_key_exists ( "itemUrl", $this->arrayResult )) {
            $this->itemUrl = $arrayResult['itemUrl'];
        }
        if (array_key_exists ( "length", $this->arrayResult )) {
            $this->length = $arrayResult['length'];
        }
        if (array_key_exists ( "measureName", $this->arrayResult )) {
            $this->measureName = $arrayResult['measureName'];
        }
        if (array_key_exists ( "packingQuantity", $this->arrayResult )) {
            $this->packingQuantity = $arrayResult['packingQuantity'];
        }
        if (array_key_exists ( "skuCode", $this->arrayResult )) {
            $this->skuCode = $arrayResult['skuCode'];
        }
        if (array_key_exists ( "skuId", $this->arrayResult )) {
            $this->skuId = $arrayResult['skuId'];
        }
        if (array_key_exists ( "width", $this->arrayResult )) {
            $this->width = $arrayResult['width'];
        }

    }
}