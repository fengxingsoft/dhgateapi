<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 12:27
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;

class DhgateShippingTypeListResult
{
    private $shippingTypeList;
    public function GetShippingTypeList(){
        return $this->shippingTypeList;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "shippingTypeList", $this->stdResult )) {
            $this->shippingTypeList = $this->stdResult->{"shippingTypeList"};
        }
        if (array_key_exists ( "shippingTypeList", $this->stdResult )) {
            $shippingTypeListResult = $this->stdResult->{"shippingTypeList"};
            $object = json_decode(json_encode($shippingTypeListResult), true);
            $this->shippingTypeList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateShippingTypeListResultInfo = new DhgateShippingTypeListResultInfo();
                $DhgateShippingTypeListResultInfo->setArrayResult($arrayobject);
                $this->shippingTypeList[$i] = $DhgateShippingTypeListResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "shippingTypeList", $this->arrayResult )) {
            $this->shippingTypeList = $arrayResult['shippingTypeList'];
        }
    }
}