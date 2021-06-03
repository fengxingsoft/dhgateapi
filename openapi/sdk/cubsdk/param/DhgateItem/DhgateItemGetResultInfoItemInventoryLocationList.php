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

class DhgateItemGetResultInfoItemInventoryLocationList
{

/*
 * inventoryLocation 	String 	可选 	产品备货地址编码 	示例值：CN
 */
    private $inventoryLocation;
    public function GetInventoryLocation(){
        return $this->inventoryLocation ;
    }
/*
 * leadingTime 	Integer 	必须 	备货期 	以天为单位，有备货的产品备货期小于等于4天，没有备货的产品为1—60天；示例值：30
 */
    private $leadingTime;
    public function GetLeadingTime(){
        return $this->leadingTime ;
    }
/*
 * sortVal 	Integer 	可选 	产品备货地址排序 	第几个备货地址，示例值：0 第0个
 */
    private $sortVal;
    public function GetSortVal(){
        return $this->sortVal ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "inventoryLocation", $this->stdResult )) {
            $this->inventoryLocation = $this->stdResult->{"inventoryLocation"};
        }
        if (array_key_exists ( "leadingTime", $this->stdResult )) {
            $this->leadingTime = $this->stdResult->{"leadingTime"};
        }
        if (array_key_exists ( "sortVal", $this->stdResult )) {
            $this->sortVal = $this->stdResult->{"sortVal"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "inventoryLocation", $this->arrayResult )) {
            $this->inventoryLocation = $arrayResult['inventoryLocation'];
        }
        if (array_key_exists ( "leadingTime", $this->arrayResult )) {
            $this->leadingTime = $arrayResult['leadingTime'];
        }
        if (array_key_exists ( "sortVal", $this->arrayResult )) {
            $this->sortVal = $arrayResult['sortVal'];
        }
    }
}