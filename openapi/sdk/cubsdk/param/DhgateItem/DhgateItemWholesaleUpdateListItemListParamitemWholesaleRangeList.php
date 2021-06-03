<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/29
 * Time: 9:58
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateItemWholesaleUpdateListItemListParamitemWholesaleRangeList extends SDKDomain
{
   /*
    * disCount 	Double 	必须 	折扣率 	折扣率（折扣百分比，如卖家想设置产品折扣率为95折，则该入参参数应输入为0.05）；示例值：0.05

    */
    private $disCount;
    public function getDisCount(){
        return $this->disCount;
    }
    public function setDisCount( $disCount) {
        $this->disCount = $disCount;
    }
    /*
     * disCountType 	Integer 	必须 	设置价格类型 	设置价格类型。1：分别设置价格，2：统一设置价格；示例值：1

     */
    private $disCountType;
    public function getDisCountType(){
        return $this->disCountType;
    }
    public function setDisCountType($disCountType) {
        $this->disCountType = $disCountType;
    }
/*
 * endQty 	Integer 	必须 	起批截止数量 	取值大于起批开始数量；示例值：20

 */

    private $endQty;
    public function getEndQty(){
        return $this->endQty;
    }
    public function setEndQty($endQty) {
        $this->endQty = $endQty;
    }
/*
 * startQty 	Integer 	必须 	起批开始数量 	从第几件开始是什么折扣；例如：3件以上0.05折扣，即3件以上95折。
 */

    private $startQty;
    public function getStartQty(){
        return $this->startQty;
    }
    public function setStartQty($startQty) {
        $this->startQty = $startQty;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "disCount", $this->stdResult )) {
            $this->disCount = $this->stdResult->{"disCount"};
        }
        if (array_key_exists ( "disCountType", $this->stdResult )) {
            $this->disCountType = $this->stdResult->{"disCountType"};
        }
        if (array_key_exists ( "endQty", $this->stdResult )) {
            $this->endQty = $this->stdResult->{"endQty"};
        }
        if (array_key_exists ( "startQty", $this->stdResult )) {
            $this->startQty = $this->stdResult->{"startQty"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "disCount", $this->arrayResult )) {
            $this->disCount = $arrayResult ['disCount'];
        }
        if (array_key_exists ( "disCountType", $this->arrayResult )) {
            $this->disCountType = $arrayResult ['disCountType'];
        }
        if (array_key_exists ( "endQty", $this->arrayResult )) {
            $this->endQty = $arrayResult ['endQty'];
        }
        if (array_key_exists ( "startQty", $this->arrayResult )) {
            $this->startQty = $arrayResult ['startQty'];
        }
    }

}