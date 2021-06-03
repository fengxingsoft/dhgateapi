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


class DhgateSellerPaymentGetParam extends SDKDomain
{
    /*
     * paymentList 	PaymentList 	必须 	请款接口 	SellerOrderAccount的JSON字符串
     */
    public function setPaymentList( DhgateSellerPaymentListParam  $paymentList) {
        $this->sdkStdResult["paymentList"] = $paymentList;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}