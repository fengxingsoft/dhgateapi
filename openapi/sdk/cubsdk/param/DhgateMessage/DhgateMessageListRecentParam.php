<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/18
 * Time: 17:41
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateMessageListRecentParam
{
/*
 * beforeDay 	int 	必须 	查询的时间范围 	当前日期的前几天,单位为天数,取值必须在1到366之间
 */
    public function setBeforeDay( $beforeDay) {
        $this->sdkStdResult["beforeDay"] = $beforeDay;
    }
/*
 * isMark 	String 	可选 	是否标记 	0:未标记,1:已标记,-1:全部。默认：全部
 */
    public function setIsMark( $isMark) {
        $this->sdkStdResult["isMark"] = $isMark;
    }
/*
 * isRead 	String 	可选 	是否已读 	0:未读,1:已读,-1:全部。默认：全部
 */
    public function setIsRead( $isRead) {
        $this->sdkStdResult["isRead"] = $isRead;
    }
/*
 * msgType 	String 	必须 	站内信展现类型 	001:买卖家消息-询盘,002:买卖家消息-订单,003:买卖家消息-其它,004:系统消息-订单,005:系统消息-产品,006:系统消息-付款/退款,007:系统消息-促销,008:系统消息-账户,009:系统消息-其它,010:平台公告-活动宣传,011:平台公告-政策通知,012:平台公告-商品营销,013:平台公告-其它。该参数支持传入多个展现类型值，以逗号分隔，如：001,002,003
 */
    public function setMsgType( $msgType) {
        $this->sdkStdResult["msgType"] = $msgType;
    }
/*
 * orderField 	String 	可选 	查询结果的排序字段 	支持两个字段:msgreplycount:站内信回复数量；lastreplytime：最后回复时间。默认为：最后回复时间
 */
    public function setOrderField( $orderField) {
        $this->sdkStdResult["orderField"] = $orderField;
    }
/*
 * orderType 	String 	可选 	排序类型 	支持两种排序：asc:升序;desc:降序。默认：降序
 */
    public function setOrderType( $orderType) {
        $this->sdkStdResult["orderType"] = $orderType;
    }
/*
 * pageNo 	int 	必须 	当前页号 	分页参数,表示查询的第几页
 */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
/*
 * pageSize 	int 	必须 	页面大小 	分页参数,表示每个页的记录条数
 */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
/*
 * searchKey 	String 	可选 	输入的搜索关键字 	暂时只支持订单号；示例值：1Z68A9X70467731838
 */
    public function setSearchKey( $searchKey) {
        $this->sdkStdResult["searchKey"] = $searchKey;
    }
/*
 * status 	String 	可选 	显示状态 	0:正常,1:垃圾箱,-1:全部。默认：全部
 */

    public function setStatus( $status) {
        $this->sdkStdResult["status"] = $status;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}