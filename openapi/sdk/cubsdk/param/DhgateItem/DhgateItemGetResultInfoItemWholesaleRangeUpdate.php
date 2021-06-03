<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemGetResultInfoItemWholesaleRangeUpdate
{
/*
 * discount 	Double 	必须 	折扣率 	折扣百分比，如卖家想设置产品折扣率为95折，则该入参参数应输入为0.05；示例值：0.05
 */
    private $discount;
    public function GetDiscount(){
        return $this->discount ;
    }
/*
 * startQty 	Integer 	必须 	折扣限制数量 	从第几件开始是什么折扣；例如：3件以上0.05折扣，即3件以上95折。
 */
    private $startQty;
    public function GetStartQty(){
        return $this->startQty ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "discount", $this->stdResult )) {
            $this->discount = $this->stdResult->{"discount"};
        }
        if (array_key_exists ( "startQty", $this->stdResult )) {
            $this->startQty = $this->stdResult->{"startQty"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "discount", $this->arrayResult )) {
            $this->discount = $arrayResult['discount'];
        }
        if (array_key_exists ( "startQty", $this->arrayResult )) {
            $this->startQty = $arrayResult['startQty'];
        }
    }
}