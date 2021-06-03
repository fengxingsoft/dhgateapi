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


class DhgateOrderDisputeopenListParam
{
/*
 * buyerNickName 	String 	可选 	买家昵称 	示例值：zhangsan
 */
    public function setBuyerNickName( $buyerNickName) {
        $this->sdkStdResult["buyerNickName"] = $buyerNickName;
    }
/*
 * disputeType 	String 	可选 	纠纷类型 	1、协议纠纷，2、平台纠纷，3、售后纠纷，默认全部纠纷中订单
 */
    public function setDisputeType( $disputeType) {
        $this->sdkStdResult["disputeType"] = $disputeType;
    }
/*
 * orderNo 	String 	可选 	订单号 	卖家后台能查看；示例值：1455953150
 */
    public function setOrderNo( $orderNo) {
        $this->sdkStdResult["orderNo"] = $orderNo;
    }
/*
 * pageNo 	int 	必须 	第几页 	示例值：10,表示第10页
 */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
/*
 * pageSize 	int 	必须 	每页记录数 	示例值：10,表示每页10条记录
 */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}