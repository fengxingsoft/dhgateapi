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
class DhgateItemSkuListResultInfo{
    /*
     * inventory 	Integer 	必须 	产品备货数量 	有备货为必选，无备货为可选,数值不可小于0；示例值：200；
     */
    private $inventory;
    public function GetInventory(){
        return $this->inventory;
    }
    /*
     * itemCode 	Long 	必须 	产品编码 	示例值：202869901
     */
    private $itemCode;
    public function GetItemCode(){
        return $this->itemCode;
    }
    /*
     * itemSkuAttrvalList 	ItemSkuAttrval[] 	必须 	产品SKU属性值列表 	产品SKU属性值列表
     */
    private $itemSkuAttrvalList;
    public function GetItemSkuAttrvalList(){
        return $this->itemSkuAttrvalList;
    }
    /*
     * itemSkuInvenList 	ItemSkuInventory[] 	可选 	有备货时产品sku与备货地址关联信息 	有产品备货时必填，无产品备货时选填或者不填
     */
    private $itemSkuInvenList;
    public function GetItemSkuInvenList(){
        return $this->itemSkuInvenList;
    }
    /*
     * priceType 	Integer 	必须 	SKU价格的类型 	0 null，1 buyer价格，2 seller价格；示例值：2
     */
    private $priceType;
    public function GetPriceType(){
        return $this->priceType;
    }
    /*
     * retailPrice 	Double 	必须 	产品sku零售价 	示例值：尺寸不同设置零售价价格不同：L：10.0，XL：11.0
     */
    private $retailPrice;
    public function GetRetailPrice(){
        return $this->retailPrice;
    }
    /*
     * skuCode 	String 	必须 	卖家自定义产品sku编码 	示例值：632870918
     */
    private $skuCode;
    public function GetSkuCode(){
        return $this->skuCode;
    }
    /*
     * skuId 	Long 	必须 	主键ID 	示例值：1165661007
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
            $itemSkuAttrvalListResult=$this->stdResult->{"itemSkuAttrvalList"};
            $object = json_decode ( json_encode ( $itemSkuAttrvalListResult ), true );
            $this->itemSkuAttrvalList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemSkuListResultInfoItemSkuAttrval=new DhgateItemSkuListResultInfoItemSkuAttrval();
                $DhgateItemSkuListResultInfoItemSkuAttrval->setArrayResult($arrayobject );
                $this->itemSkuAttrvalList [$i] = $DhgateItemSkuListResultInfoItemSkuAttrval;
            }
        }
        if (array_key_exists ( "itemSkuInvenList", $this->stdResult )) {
            $itemSkuInvenListResult=$this->stdResult->{"itemSkuInvenList"};
            $object = json_decode ( json_encode ( $itemSkuInvenListResult ), true );
            $this->itemSkuInvenList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemSkuListResultInfoItemSkuInventory=new DhgateItemSkuListResultInfoItemSkuInventory();
                $DhgateItemSkuListResultInfoItemSkuInventory->setArrayResult($arrayobject );
                $this->itemSkuInvenList [$i] = $DhgateItemSkuListResultInfoItemSkuInventory;
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
            $itemSkuAttrvalListResult= $arrayResult['itemSkuAttrvalList'];
            for($i = 0; $i < count ( $itemSkuAttrvalListResult ); $i ++) {
                $DhgateItemSkuListResultInfoItemSkuAttrval=new DhgateItemSkuListResultInfoItemSkuAttrval();
                $DhgateItemSkuListResultInfoItemSkuAttrval->setArrayResult($itemSkuAttrvalListResult[$i] );
                $this->itemSkuAttrvalList[$i] = $DhgateItemSkuListResultInfoItemSkuAttrval;
            }
        }
        if (array_key_exists ( "itemSkuInvenList", $this->arrayResult )) {
            $itemSkuInvenListResult= $arrayResult['itemSkuInvenList'];
            for($i = 0; $i < count ( $itemSkuInvenListResult ); $i ++) {
                $DhgateItemSkuListResultInfoItemSkuInventory=new DhgateItemSkuListResultInfoItemSkuInventory();
                $DhgateItemSkuListResultInfoItemSkuInventory->setArrayResult($itemSkuInvenListResult[$i] );
                $this->itemSkuInvenList[$i] = $DhgateItemSkuListResultInfoItemSkuInventory;
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