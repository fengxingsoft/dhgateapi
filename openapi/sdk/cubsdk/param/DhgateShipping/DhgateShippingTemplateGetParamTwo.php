<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 11:04
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateShippingTemplateGetParamTwo
{
    /*
     * shippingTempId
     * String 	必须
     * 运输模板ID 	32位无规则字符串，通过接口dh.shipping.template.list获取；示例值：ff8080811b87a915011b890f3aa857d6
     */
    public function setShippingTempId($shippingTempId){
        $this->sdkStdResult["shippingTempId"] =$shippingTempId;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}