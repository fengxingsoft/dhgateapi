<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 11:45
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateShippingTrackinfoGetParam
{
/*
 * language 	String 	必须 	语言，只能是EN或CN
 */
    public function setLanguage($language){
        $this->sdkStdResult["language"] =$language ;
    }
/*
 * shippingtype 	String 	必须 	物流方式，如e-ulink等
 */
    public function setShippingtype($shippingtype){
        $this->sdkStdResult["shippingtype"] =$shippingtype ;
    }
/*
 * trackno 	String 	必须 	运单号
 */
    public function setTrackno($trackno){
        $this->sdkStdResult["trackno"] =$trackno ;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}