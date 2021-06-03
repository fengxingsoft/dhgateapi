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

class DhgateItemPeroidListResultInfo
{
/*
 * itemCode 	String 	必须 	产品itemCode 	示例值：154002234
 */
    private $itemCode;
    public function GetItemCode(){
        return $this->itemCode ;
    }
/*
 * vaildDay 	String 	必须 	有效期 	示例值：90
 */
    private $vaildDay;
    public function GetVaildDay(){
        return $this->vaildDay ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "itemCode", $this->stdResult )) {
            $this->itemCode = $this->stdResult->{"itemCode"};
        }
        if (array_key_exists ( "vaildDay", $this->stdResult )) {
            $this->vaildDay = $this->stdResult->{"vaildDay"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "itemCode", $this->arrayResult )) {
            $this->itemCode = $arrayResult['itemCode'];
        }
        if (array_key_exists ( "vaildDay", $this->arrayResult )) {
            $this->vaildDay = $arrayResult['vaildDay'];
        }
    }
}