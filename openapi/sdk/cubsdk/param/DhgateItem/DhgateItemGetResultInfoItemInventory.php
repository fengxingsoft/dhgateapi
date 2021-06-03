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
class DhgateItemGetResultInfoItemInventory{

/*
 * inventoryLocation 	String 	必须 	产品备货地 	示例值：CN
 */
    private $inventoryLocation;
    public function GetInventoryLocation(){
        return $this->inventoryLocation;
    }
/*
 * inventoryLocationList 	ItemInventoryLocationUpdate[] 	可选 	产品备货地址信息列表 	产品备货地址信息列表
 */
    private $inventoryLocationList;
    public function GetInventoryLocationList(){
        return $this->inventoryLocationList;
    }
/*
 * inventoryOriQty 	Integer 	可选 	产品原备货量 	示例值：100；设置该值时，与产品备货数量一致
 */
    private $inventoryOriQty;
    public function GetInventoryOriQty(){
        return $this->inventoryOriQty;
    }
/*
 * inventoryQty 	Integer 	必须 	产品备货数量 	备货状态为有备货时必填，设置该值时，与产品中可销售的SKU之和一致；示例值：100
 */
    private $inventoryQty;
    public function GetInventoryQty(){
        return $this->inventoryQty;
    }
/*
 * inventoryStatus 	String 	可选 	是否有备货：0否，1是 	0：没有备货，1：有备货（有备货的产品备货期小于等于2天，没有备货的产品备货期为1—60天）；示例值：1
 */
    private $inventoryStatus;
    public function GetInventoryStatus(){
        return $this->inventoryStatus;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "inventoryLocation", $this->stdResult )) {
            $this->inventoryLocation = $this->stdResult->{"inventoryLocation"};
        }
        if (array_key_exists ( "inventoryLocationList", $this->stdResult )) {
            $this->inventoryLocationList = $this->stdResult->{"inventoryLocationList"};
        }
        if (array_key_exists ( "inventoryLocationList", $this->stdResult )) {
            $inventoryLocationListResult=$this->stdResult->{"inventoryLocationList"};
            $object = json_decode ( json_encode ( $inventoryLocationListResult ), true );
            $this->inventoryLocationList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemGetResultInfoItemInventoryLocationList=new DhgateItemGetResultInfoItemInventoryLocationList();
                $DhgateItemGetResultInfoItemInventoryLocationList->setArrayResult($arrayobject );
                $this->inventoryLocationList[$i] = $DhgateItemGetResultInfoItemInventoryLocationList;
            }
        }
        if (array_key_exists ( "inventoryOriQty", $this->stdResult )) {
            $this->inventoryOriQty = $this->stdResult->{"inventoryOriQty"};
        }
        if (array_key_exists ( "inventoryQty", $this->stdResult )) {
            $this->inventoryQty = $this->stdResult->{"inventoryQty"};
        }
        if (array_key_exists ( "inventoryStatus", $this->stdResult )) {
            $this->inventoryStatus = $this->stdResult->{"inventoryStatus"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "inventoryLocation", $this->arrayResult )) {
            $this->inventoryLocation = $arrayResult['inventoryLocation'];
        }
        if (array_key_exists ( "inventoryLocationList", $this->arrayResult )) {

            for($i=0;$i<count($arrayResult['inventoryLocationList']);$i++){
                $inventoryLocationListResult=$arrayResult['inventoryLocationList'][$i];
                $DhgateItemGetResultInfoItemInventoryLocationList=new DhgateItemGetResultInfoItemInventoryLocationList();
                $DhgateItemGetResultInfoItemInventoryLocationList->setArrayResult($inventoryLocationListResult);
                $this->inventoryLocationList[$i] = $DhgateItemGetResultInfoItemInventoryLocationList;

            }
        }
        if (array_key_exists ( "inventoryOriQty", $this->arrayResult )) {
            $this->inventoryOriQty = $arrayResult['inventoryOriQty'];
        }
        if (array_key_exists ( "inventoryQty", $this->arrayResult )) {
            $this->inventoryQty = $arrayResult['inventoryQty'];
        }
        if (array_key_exists ( "inventoryStatus", $this->arrayResult )) {
            $this->inventoryStatus = $arrayResult['inventoryStatus'];
        }
    }
}