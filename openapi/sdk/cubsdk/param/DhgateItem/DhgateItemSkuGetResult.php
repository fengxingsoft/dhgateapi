<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use  com\alibaba\openapi\client\entity\SDKDomain;
use  com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateItemSkuGetResult{

/*
 * inventory 	Integer 	必须 	备货量 	示例值：100
 */
    private $inventory;
    public function GetInventory(){
        return $this->inventory;
    }
/*
 * itemCode 	Long 	必须 	产品编码 	示例值：202411996
 */
    private $itemCode;
    public function GetItemCode(){
        return $this->itemCode;
    }
/*
 * itemSkuAttrvalList 	itemSkuAttrval[] 	必须 	产品SKU属性值列表 	产品SKU属性值列表
 */
    private $itemSkuAttrvalList;
    public function GetItemSkuAttrvalList(){
        return $this->itemSkuAttrvalList;
    }
/*
 * priceType 	Integer 	必须 	SKU价格的类型 	0=null，1=buyer价格，2=seller价格,示例值：1
 */
    private $priceType;
    public function GetPriceType(){
        return $this->priceType;
    }
/*
 * retailPrice 	Double 	必须 	零售价 	示例值：12.2
 */
    private $retailPrice;
    public function GetRetailPrice(){
        return $this->retailPrice;
    }
/*
 * skuCode 	String 	必须 	sku编码 	示例值：123212
 */
    private $skuCode;
    public function GetSkuCode(){
        return $this->skuCode;
    }
/*
 * skuId 	Long 	必须 	主键ID 	示例值：1159406191
 */
    private $skuId;
    public function GetSkuId(){
        return $this->skuId;
    }
/*
 * skuMD5 	String 	必须 	产品skuMD5 	区分产品的唯一性，可通过获取产品详情(dh.item.get 2.0)接口获得
 */
    private $skuMD5;
    public function GetSkuMD5(){
        return $this->skuMD5;
    }
/*
 * supplierId 	String 	必须 	卖家ID 	示例值：402880f100f59ccd0100f59cd37d0004
 */
    private $supplierId;
    public function GetSupplierId(){
        return $this->supplierId;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "inventory", $this->stdResult )) {
            $this->inventory = $this->stdResult->{"inventory"};
        }
        if (array_key_exists ( "itemCode", $this->stdResult )) {
            $this->itemCode = $this->stdResult->{"itemCode"};
        }
        if (array_key_exists ( "itemSkuAttrvalList", $this->stdResult )) {
            $this->itemSkuAttrvalList = $this->stdResult->{"itemSkuAttrvalList"};
        }


        if (array_key_exists ( "itemSkuAttrvalList", $this->stdResult )) {
            $itemSkuAttrvalListResult=$this->stdResult->{"itemSkuAttrvalList"};
            $object = json_decode ( json_encode ( $itemSkuAttrvalListResult ), true );
            $this->itemSkuAttrvalList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemSkuGetResultInfo=new DhgateItemSkuGetResultInfo();
                $DhgateItemSkuGetResultInfo->setArrayResult($arrayobject );
                $this->itemSkuAttrvalList[$i] = $DhgateItemSkuGetResultInfo;
            }
        }
        if (array_key_exists ( "priceType", $this->stdResult )) {
            $this->priceType = $this->stdResult->{"priceType"};
        }
        if (array_key_exists ( "retailPrice", $this->stdResult )) {
            $this->retailPrice = $this->stdResult->{"retailPrice"};
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
        if (array_key_exists ( "supplierId", $this->stdResult )) {
            $this->supplierId = $this->stdResult->{"supplierId"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "inventory", $this->arrayResult )) {
            $this->inventory = $arrayResult['inventory'];
        }
        if (array_key_exists ( "itemCode", $this->arrayResult )) {
            $this->itemCode = $arrayResult['itemCode'];
        }
        if (array_key_exists ( "itemSkuAttrvalList", $this->arrayResult )) {
            $itemSkuAttrvalListResult = $arrayResult['itemSkuAttrvalList'];
            for($i=0;$i<count($itemSkuAttrvalListResult);$i++){
                $this->itemSkuAttrvalList[$i] =new DhgateItemSkuGetResultInfo ();
                $this->itemSkuAttrvalList[$i]->setArrayResult ( $itemSkuAttrvalListResult );
            }


        }
        if (array_key_exists ( "priceType", $this->arrayResult )) {
            $this->priceType = $arrayResult['priceType'];
        }
        if (array_key_exists ( "retailPrice", $this->arrayResult )) {
            $this->retailPrice = $arrayResult['retailPrice'];
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
        if (array_key_exists ( "supplierId", $this->arrayResult )) {
            $this->supplierId = $arrayResult['supplierId'];
        }
    }
}