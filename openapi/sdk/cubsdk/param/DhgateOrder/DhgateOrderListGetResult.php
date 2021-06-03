<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateOrderListGetResult{
/*
 * count 	int 	必须 	总记录数 	1000,表示总记录数为1000
 */
    private $count;
    public function GetCount(){
        return $this->count;
    }
/*
 * orderBaseInfoList 	OrderBaseInfo[] 	必须 	订单基础信息列表 	订单基础信息列表
 */
    private $orderBaseInfoList;
    public function GetOrderBaseInfoList(){
        return $this->orderBaseInfoList;
    }
/*
 * pages 	int 	必须 	总页数 	20,表示总共20页
 */
    private $pages;
    public function GetPages(){
        return $this->pages;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "count", $this->stdResult )) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists ( "orderBaseInfoList", $this->stdResult )) {
            $this->orderBaseInfoList = $this->stdResult->{"orderBaseInfoList"};

        }
        if (array_key_exists ( "pages", $this->stdResult )) {
            $this->pages = $this->stdResult->{"pages"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "count", $this->arrayResult )) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists ( "orderBaseInfoList", $this->arrayResult )) {
            $orderBaseInfoListResult = $arrayResult['orderBaseInfoList'];
            for ($i = 0; $i < count($object); $i++) {
                $DhgateOrderListGetResultInfo = new DhgateOrderListGetResultInfo();
                $DhgateOrderListGetResultInfo->setArrayResult($orderBaseInfoListResult);
                $this->orderBaseInfoList[$i] = $DhgateOrderListGetResultInfo;
            }
        }
        if (array_key_exists ( "pages", $this->arrayResult )) {
            $this->pages = $arrayResult['pages'];
        }
    }
}