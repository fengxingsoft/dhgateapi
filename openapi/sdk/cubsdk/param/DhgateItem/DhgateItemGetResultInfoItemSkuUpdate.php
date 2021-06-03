<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateItemGetResultInfoItemSkuUpdate{

/*
 * inventory 	Integer 	可选 	产品备货数量 	有备货为必选，无备货为可选,数值不可小于0；示例值：200；
 */
    private $inventory;
    public function GetInventory(){
        return $this->inventory;
    }
/*
 * itemSkuAttrValueList 	ItemSkuAttrvalUpdate[] 	必须 	产品SKU属性值列表 	产品SKU属性值列表
 */
    private $itemSkuAttrValueList;
    public function GetItemSkuAttrValueList(){
        return $this->itemSkuAttrValueList;
    }
/*
 * itemSkuInventoryList 	ItemSkuInventoryUpdate[] 	可选 	有备货时产品sku与备货地址关联信息 	有产品备货时必填，无产品备货时选填或者不填
 */
    private $itemSkuInventoryList;
    public function GetItemSkuInventoryList(){
        return $this->itemSkuInventoryList;
    }
/*
 * picUrl 	String 	可选 	卖家产品sku图片地址 	示例值：/aaa/a.jpg
 */
    private $picUrl;
    public function GetPicUrl(){
        return $this->picUrl;
    }
/*
 * retailPrice 	Double 	必须 	产品sku零售价 	示例值：尺寸不同设置零售价价格不同：L：10.0，XL：11.0
 */
    private $retailPrice;
    public function GetRetailPrice(){
        return $this->retailPrice;
    }
/*
 * saleStatus 	Integer 	必须 	是否可销售 	0 不可销售，1 可销售；示例值：1
 */
    private $saleStatus;
    public function GetSaleStatus(){
        return $this->saleStatus;
    }
/*
 * skuCode 	String 	可选 	卖家自定义产品sku编码 	示例值：12345
 */
    private $skuCode;
    public function GetSkuCode(){
        return $this->skuCode;
    }
/*
 * skuId 	Long 	可选 	skuId值 	产品skuId值
 */
    private $skuId;
    public function GetSkuId(){
        return $this->skuId;
    }
/*
 * skuMD5 	String 	可选 	skuMD5值 	SKU属性的MD5值，区分产品属性
 */
    private $skuMD5;
    public function GetSkuMD5(){
        return $this->skuMD5;
    }
    private $stdResult;

    public function setStdResult($stdResult) {

        $this->stdResult = $stdResult;
        if (array_key_exists ( "inventory", $this->stdResult )) {
            $this->inventory = $this->stdResult->{"inventory"};
        }
        if (array_key_exists ( "itemSkuAttrValueList", $this->stdResult )) {
            $this->itemSkuAttrValueList = $this->stdResult->{"itemSkuAttrValueList"};

        }
        if (array_key_exists ( "itemSkuAttrValueList", $this->stdResult )) {
            $itemSkuAttrValueListResult=$this->stdResult->{"itemSkuAttrValueList"};
            $object = json_decode ( json_encode ( $itemSkuAttrValueListResult ), true );
            $this->itemSkuAttrValueList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemGetResultInfoItemSkuUpdateItemSkuAttrvalUpdate=new DhgateItemGetResultInfoItemSkuUpdateItemSkuAttrvalUpdate();
                $DhgateItemGetResultInfoItemSkuUpdateItemSkuAttrvalUpdate->setArrayResult($arrayobject );
                $this->itemSkuAttrValueList[$i] = $DhgateItemGetResultInfoItemSkuUpdateItemSkuAttrvalUpdate;
            }
        }
        if (array_key_exists ( "itemSkuInventoryList", $this->stdResult )) {
            $this->itemSkuInventoryList = $this->stdResult->{"itemSkuInventoryList"};

        }
        if (array_key_exists ( "itemSkuInventoryList", $this->stdResult )) {
            $itemSkuInventoryListResult=$this->stdResult->{"itemSkuInventoryList"};
            $object = json_decode ( json_encode ( $itemSkuInventoryListResult ), true );
            $this->itemSkuInventoryList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemGetResultInfoItemSkuUpdateItemSkuInventoryUpdate=new DhgateItemGetResultInfoItemSkuUpdateItemSkuInventoryUpdate();
                $DhgateItemGetResultInfoItemSkuUpdateItemSkuInventoryUpdate->setStdResult($arrayobject );
                $this->itemSkuInventoryList[$i] = $DhgateItemGetResultInfoItemSkuUpdateItemSkuInventoryUpdate;
            }
        }
        if (array_key_exists ( "picUrl", $this->stdResult )) {
            $this->picUrl = $this->stdResult->{"picUrl"};
        }
        if (array_key_exists ( "retailPrice", $this->stdResult )) {
            $this->retailPrice = $this->stdResult->{"retailPrice"};
        }
        if (array_key_exists ( "saleStatus", $this->stdResult )) {
            $this->saleStatus = $this->stdResult->{"saleStatus"};
        }
        if (array_key_exists ( "skuCode", $this->stdResult )) {
            $this->skuCode = $this->stdResult->{"skuCode"};
        }
        if (array_key_exists ( "skuId", $this->stdResult )) {
            $this->skuId = $this->stdResult->{"skuId"};
        }
        if (array_key_exists ( "skuMD5", $this->stdResult )) {
            $this->skuMD5 = $this->stdResult->{"skuMD5"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "inventory", $this->arrayResult )) {
            $this->inventory = $arrayResult['inventory'];
        }
        if (array_key_exists ( "itemSkuAttrValueList", $this->arrayResult )) {
            $this->itemSkuAttrValueList = $arrayResult['itemSkuAttrValueList'];
            $itemSkuAttrValueListResult=$arrayResult['itemSkuAttrValueList'];
            $object = json_decode ( json_encode ( $itemSkuAttrValueListResult ), true );
            $this->itemSkuAttrValueList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemGetResultInfoItemSkuUpdateItemSkuAttrvalUpdate=new DhgateItemGetResultInfoItemSkuUpdateItemSkuAttrvalUpdate();
                $DhgateItemGetResultInfoItemSkuUpdateItemSkuAttrvalUpdate->setArrayResult($arrayobject );
                $this->itemSkuAttrValueList[$i] = $DhgateItemGetResultInfoItemSkuUpdateItemSkuAttrvalUpdate;
            }
        }
        if (array_key_exists ( "itemSkuInventoryList", $this->arrayResult )) {
            $itemSkuInventoryListResult= $arrayResult['itemSkuInventoryList'];
            for($i = 0; $i < count ( $itemSkuInventoryListResult ); $i ++) {
                $DhgateItemGetResultInfoItemSkuUpdateItemSkuInventoryUpdate=new DhgateItemGetResultInfoItemSkuUpdateItemSkuInventoryUpdate();
                $DhgateItemGetResultInfoItemSkuUpdateItemSkuInventoryUpdate->setArrayResult($itemSkuInventoryListResult[$i] );
                $this->itemSkuInventoryList[$i] = $DhgateItemGetResultInfoItemSkuUpdateItemSkuInventoryUpdate;
            }
        }
        if (array_key_exists ( "picUrl", $this->arrayResult )) {
            $this->picUrl = $arrayResult['picUrl'];
        }
        if (array_key_exists ( "retailPrice", $this->arrayResult )) {
            $this->retailPrice = $arrayResult['retailPrice'];
        }
        if (array_key_exists ( "saleStatus", $this->arrayResult )) {
            $this->saleStatus = $arrayResult['saleStatus'];
        }
        if (array_key_exists ( "skuCode", $this->arrayResult )) {
            $this->skuCode = $arrayResult['skuCode'];
        }
        if (array_key_exists ( "skuId", $this->arrayResult )) {
            $this->skuId = $arrayResult['skuId'];
        }
        if (array_key_exists ( "skuMD5", $this->arrayResult )) {
            $this->skuMD5 = $arrayResult['skuMD5'];
        }
    }
}