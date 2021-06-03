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


class DhgateOrderListGetParam
{
/*
 * buyerNickName 	String 	可选 	买家昵称 	示例值：zhangsan
 */
    public function setBuyerNickName( $buyerNickName) {
        $this->sdkStdResult["buyerNickName"] = $buyerNickName;
    }

/*
 * deliveryNo 	String 	可选 	运单号 	示例值：1Z68A9X70467731838
 */
    public function setDeliveryNo( $deliveryNo) {
        $this->sdkStdResult["deliveryNo"] = $deliveryNo;
    }

/*
 * endDate 	String 	必须 	结束时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setEndDate( $endDate) {
        $this->sdkStdResult["endDate"] = $endDate;
    }

/*
 * itemCode 	String 	可选 	产品编号 	产品号在页面详情的URL中即可查看到；示例值：180366586
 */
    public function setItemCode( $itemCode) {
        $this->sdkStdResult["itemCode"] = $itemCode;
    }

/*
 * orderNo 	String 	可选 	订单号 	卖家后台能查看；示例值：1455953150
 */
    public function setOrderNo( $orderNo) {
        $this->sdkStdResult["orderNo"] = $orderNo;
    }

/*
 * orderStatus 	String 	可选 	订单状态列表 	111000,订单取消;101003,等待买家付款;102001,买家已付款，等待平台确认;103001,等待发货;105001,买家申请退款，等待协商结果;105002,退款协议已达成;105003,部分退款后，等待发货;105004,买家取消退款申请;103002,已部分发货;101009,等待买家确认收货;106001,退款/退货协商中，等待协议达成;106002,买家投诉到平台;106003,协议已达成，执行中;102006,人工确认收货;102007,超过预定期限，自动确认收货;102111,交易成功;111111,交易关闭；示例值：101009,101003,多种状态时用英文逗号分隔，默认为空，查询所有订单
 */
    public function setOrderStatus( $orderStatus) {
        $this->sdkStdResult["orderStatus"] = $orderStatus;
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

/*
 * querytimeType 	String 	必须 	查询时间类型 	按哪种时间类型查询订单列表，值：1、下单时间 ,2、付款时间,3、更新时间 仅支持此三种时间类型查询
 */
    public function setQuerytimeType( $querytimeType) {
        $this->sdkStdResult["querytimeType"] = $querytimeType;
    }

/*
 * startDate 	String 	必须 	开始时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setStartDate( $startDate) {
        $this->sdkStdResult["startDate"] = $startDate;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}