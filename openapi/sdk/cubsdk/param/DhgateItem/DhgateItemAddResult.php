<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;

use ArrayObject;
use com\alibaba\openapi\client\entity\SDKDomain;

class DhgateItemAddResult extends SDKDomain
{
    /*
     * itemCode 	String 	必须 	产品ITEMCODE 	示例值：202411996
     */
    private $itemCode;

    public function GetItemCode()
    {
        return $this->itemCode;
    }

    /*
     * itemId 	String 	必须 	产品ID 	示例值：ff80808147a06b5c0147a123665f0421
     */
    private $itemId;

    public function GetItemId()
    {
        return $this->itemId;
    }

    private $code;

    public function GetCode()
    {
        return $this->code;
    }

    private $status;

    public function GetStatus()
    {
        return $this->status;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;

        if (array_key_exists("itemCode", $this->stdResult)) {
            $this->itemCode = $this->stdResult->{"itemCode"};
        }
        if (array_key_exists("itemId", $this->stdResult)) {
            $this->itemId = $this->stdResult->{"itemId"};
        }
        if (array_key_exists("code", $this->stdResult)) {
            $this->code = $this->stdResult->{"code"};
        }
        if (array_key_exists("status", $this->stdResult)) {
            $statusResult = $this->stdResult->{"status"};
            $object = json_decode(json_encode($statusResult), true);
            $this->status = array();
            $arrayobject = new ArrayObject ($object);
            $DhgateItemAddStatusInfo = new DhgateItemAddStatus();
            $DhgateItemAddStatusInfo->setArrayResult($arrayobject);
            $this->status = $DhgateItemAddStatusInfo;
        }

    }

    private $arrayResult;

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;

        if (array_key_exists("itemCode", $this->arrayResult)) {
            $this->itemCode = $arrayResult['itemCode'];
        }

        if (array_key_exists("itemId", $this->arrayResult)) {
            $this->itemId = $arrayResult['itemId'];
        }
        if (array_key_exists("code", $this->arrayResult)) {
            $this->code = $arrayResult['code'];
        }
        if (array_key_exists("status", $this->arrayResult)) {
            $statusResult = $arrayResult['status'];
            $DhgateItemAddStatus = new DhgateItemAddStatus();
            $DhgateItemAddStatus->setStdResult($statusResult);
            $this->status = $DhgateItemAddStatus;
        }
    }
    
}