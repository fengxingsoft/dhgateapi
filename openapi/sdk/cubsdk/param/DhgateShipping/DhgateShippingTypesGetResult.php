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

class DhgateShippingTypesGetResult
{
    private $shippingtypeList;
    public function GetShippingtypeList(){
        return $this->shippingtypeList;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "shippingtypeList", $this->stdResult )) {
            $this->shippingtypeList = $this->stdResult->{"shippingtypeList"};
        }
        if (array_key_exists ( "shippingtypeList", $this->stdResult )) {
            $shippingTypeListResult = $this->stdResult->{"shippingtypeList"};
            $object = json_decode(json_encode($shippingTypeListResult), true);
            $this->shippingtypeList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateShippingTypesGetResultInfo = new DhgateShippingTypesGetResultInfo();
                $DhgateShippingTypesGetResultInfo->setArrayResult($arrayobject);
                $this->shippingtypeList[$i] = $DhgateShippingTypesGetResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "shippingtypeList", $this->arrayResult )) {
            $this->shippingtypeList = $arrayResult['shippingtypeList'];
        }
    }
}