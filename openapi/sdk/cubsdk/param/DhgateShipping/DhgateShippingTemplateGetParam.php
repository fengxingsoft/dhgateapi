<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 10:04
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateShippingTemplateGetParam
{
/*
 * shippingmodelid 	String 	必须 	运输模板ID
 */
    public function setShippingmodelid($shippingmodelid){
        $this->sdkStdResult["shippingmodelid"] =$shippingmodelid ;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}