<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class DhgateOrderDeliverySaveParam
{
/*
 * deliveryNo 	String 	必须 	运单号 	对应UPS的运单号；示例值：1Z68A9X70467731838
 */
    public function setDeliveryNo( $deliveryNo) {
        $this->sdkStdResult["deliveryNo"] = $deliveryNo;
    }
/*
 * deliveryRemark 	String 	可选 	运单备注 	备注信息，不允许有中文，备注长度不大于1000，可选
 */
    public function setDeliveryRemark( $deliveryRemark) {
        $this->sdkStdResult["deliveryRemark"] = $deliveryRemark;
    }
/*
 * deliveryState 	String 	必须 	发货状态 	1、全部发货，2、部分发货
 */
    public function setDeliveryState( $deliveryState) {
        $this->sdkStdResult["deliveryState"] = $deliveryState;
    }
/*
 * orderNo 	String 	必须 	订单号 	不要和订单ID混淆，订单号没有十六进制字符；示例值：1330312162
 */
    public function setOrderNo( $orderNo) {
        $this->sdkStdResult["orderNo"] = $orderNo;
    }
/*
 * shippingType 	String 	必须 	运输方式 	运输方式可以通过接口dh.shipping.types.get获取；示例值：UPS
 */
    public function setShippingType( $shippingType) {
        $this->sdkStdResult["shippingType"] = $shippingType;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}