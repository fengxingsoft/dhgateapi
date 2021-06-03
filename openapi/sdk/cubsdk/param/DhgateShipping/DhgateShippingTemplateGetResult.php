<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 10:06
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateShippingTemplateGetResult
{
    private $shippingmodel;

    public function GetShippingmodel()
    {
        return $this->shippingmodel;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("shippingmodel", $this->stdResult)) {
            $shippingmodelResult = $this->stdResult->{"shippingmodel"};
            $object = json_decode(json_encode($shippingmodelResult), true);
            $this->shippingmodel = array();
                     $arrayobject = new ArrayObject ($object);
                    $DhgateShippingTemplateGetResultInfo = new DhgateShippingTemplateGetResultInfo();
                    $DhgateShippingTemplateGetResultInfo->setArrayResult($arrayobject);
                    $this->shippingmodel = $DhgateShippingTemplateGetResultInfo;
            }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        $shippingmodelResult = $arrayResult ['shippingmodel'];
        $this->shippingmodel =new DhgateShippingTemplateGetResultInfo ();
        $this->shippingmodel->setStdResult ( $shippingmodelResult);
    }
}