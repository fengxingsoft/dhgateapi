<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/23
 * Time: 20:54
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateWeigthRangeParam extends SDKDomain
{
   private $baseQuantity;

    public function getBaseQuantity() {
        return $this->baseQuantity;
    }


    public function setBaseQuantity($baseQuantity) {
        $this->baseQuantity = $baseQuantity;
    }

    private $stepQuantity;

    public function getStepQuantity() {
        return $this->stepQuantity;
    }

    public function setStepQuantity($stepQuantity) {
        $this->stepQuantity = $stepQuantity;
    }
    private $stepWeight;

    public function getStepWeight() {
        return $this->stepWeight;
    }

    public function setStepWeight( $stepWeight) {
        $this->stepWeight = $stepWeight;
    }
}
