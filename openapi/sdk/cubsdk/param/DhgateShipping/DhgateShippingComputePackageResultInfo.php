<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:53
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateShippingComputePackageResultInfo extends SDKDomain
{
/*
 * shippingCost 	Double 	必须 	运费价格 	示例值：12.30
 */
    private $shippingCost ;
    public function GetShippingCost (){
        return $this->shippingCost ;
    }
/*
 * shippingSetting 	String 	必须 	运费设置 	0免运费,1标准运费,2自定义运费,3合作物流,4仓库发货,5不发货
 */
    private $shippingSetting;
    public function GetShippingSetting (){
        return $this->shippingSetting ;
    }
/*
 * shippingType 	String 	必须 	运输方式 	物流方式，对应dh.shipping.type.list接口中的shippingType字段；示例值：e-ulink
 */
    private $shippingType;
    public function GetShippingType(){
        return $this->shippingType ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "shippingCost", $this->stdResult )) {
            $this->shippingCost = $this->stdResult->{"shippingCost"};
        }
        if (array_key_exists ( "shippingSetting", $this->stdResult )) {
            $this->shippingSetting = $this->stdResult->{"shippingSetting"};
        }
        if (array_key_exists ( "shippingType", $this->stdResult )) {
            $this->shippingType = $this->stdResult->{"shippingType"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "shippingCost", $this->arrayResult )) {
            $this->shippingCost = $arrayResult['shippingCost'];
        }
        if (array_key_exists ( "shippingSetting", $this->arrayResult )) {
            $this->shippingSetting = $arrayResult['shippingSetting'];
        }
        if (array_key_exists ( "shippingType", $this->arrayResult )) {
            $this->shippingType = $arrayResult['shippingType'];
        }
    }
}
