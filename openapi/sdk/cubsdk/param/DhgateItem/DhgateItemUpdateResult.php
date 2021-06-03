<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateItemUpdateResult
{
    /*
     * itemCode 	String 	必须 	产品itemCode 	示例值：202411996
     */
    private $itemCode;
    public function GetItemCode(){
        return $this->itemCode ;
    }
    /*
     * itemId 	String 	必须 	产品ID 	示例值：ff80808147a06b5c0147a123665f0421
     */
    private $itemId;
    public function GetItemId(){
        return $this->itemId ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "itemCode", $this->stdResult )) {
            $this->itemCode = $this->stdResult->{"itemCode"};
        }
        if (array_key_exists ( "itemId", $this->stdResult )) {
            $this->itemId = $this->stdResult->{"itemId"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "itemCode", $this->arrayResult )) {
            $this->itemCode = $arrayResult['itemCode'];
        }
        if (array_key_exists ( "itemId", $this->arrayResult )) {
            $this->itemId = $arrayResult['itemId'];
        }
    }
}