<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 12:04
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateShippingTrackinfoListParam
{
    /*
     * language 	String 	必须 	语言，只能是EN或CN
     */
    public function setLanguage($language){
        $this->sdkStdResult["language"] =$language ;
    }
    /*
     * shippingType 	String 	必须 	物流方式，如e-ulink等
     */
    public function setShippingType($shippingType){
        $this->sdkStdResult["shippingType"] =$shippingType ;
    }
    /*
     * trackNo 	String 	必须 	运单号
     */
    public function setTrackNo($trackNo){
        $this->sdkStdResult["trackNo"] =$trackNo ;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}