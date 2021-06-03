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

class DhgateItemPeriodUpdateListResultInfo
{

/*
 * failReason 	String 	必须 	操作失败原因 	操作失败原因；示例值：产品itemCode不存在
 */
    private $failReason;
    public function GetFailReason(){
        return $this->failReason ;
    }
/*
 * isSuccess 	Boolean 	必须 	是否操作成功 	true=成功，false=失败；示例值：false
 */
    private $isSuccess;
    public function GetIsSuccess(){
        return $this->isSuccess ;
    }
/*
 * itemCode 	String 	必须 	产品itemCode 	示例值：154002234
 */
    private $itemCode;
    public function GetItemCode(){
        return $this->itemCode ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "failReason", $this->stdResult )) {
            $this->failReason = $this->stdResult->{"failReason"};
        }
        if (array_key_exists ( "isSuccess", $this->stdResult )) {
            $this->isSuccess = $this->stdResult->{"isSuccess"};
        }
        if (array_key_exists ( "itemCode", $this->stdResult )) {
            $this->itemCode = $this->stdResult->{"itemCode"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "failReason", $this->arrayResult )) {
            $this->failReason = $arrayResult['failReason'];
        }
        if (array_key_exists ( "isSuccess", $this->arrayResult )) {
            $this->isSuccess = $arrayResult['isSuccess'];
        }
        if (array_key_exists ( "itemCode", $this->arrayResult )) {
            $this->itemCode = $arrayResult['itemCode'];
        }
    }
}