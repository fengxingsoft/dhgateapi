<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:48
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateShippingComputeItemGetParam
{

    /**
     * @param $country
     * 必须 	国家编号 	国家的二字码，可通过dh.base.country.list获取；示例值：US，表示美国
     */
    public function setCountry($country){
        $this->sdkStdResult["country"] =$country ;
    }

    /**
     * @param $itemCode String 	必须 	产品编码itemCode 	产品编码；示例值：154002234
     */
    public function setItemCode($itemCode){
        $this->sdkStdResult["itemCode"] =$itemCode ;
    }

    /**
     * @param $quantity int 	必须 	产品数量 	示例值：15
     */
    public function setQuantity($quantity){
        $this->sdkStdResult["quantity"] =$quantity ;
    }

    /**
     * @param $shippingTypeId
     * String 	必须 	物流方式ID 	物流方式ID；示例值：ePacket
     */
    public function setShippingTypeId($shippingTypeId){
        $this->sdkStdResult["shippingTypeId"] =$shippingTypeId ;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }

}