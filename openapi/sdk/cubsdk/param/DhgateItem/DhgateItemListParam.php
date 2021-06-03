<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/20
 * Time: 11:22
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemListParam
{
/*
 * downDateEnd 	String 	可选 	产品下架结束时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setDownDateEnd( $downDateEnd) {
        $this->sdkStdResult["downDateEnd"] = $downDateEnd;
    }
/*
 * downDateStart 	String 	可选 	产品下架开始时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setDownDateStart( $downDateStart) {
        $this->sdkStdResult["downDateStart"] = $downDateStart;
    }
/*
 * expireDateEnd 	String 	可选 	产品有效期截止时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setExpireDateEnd( $expireDateEnd) {
        $this->sdkStdResult["expireDateEnd"] = $expireDateEnd;
    }
/*
 * expireDateStart 	String 	可选 	产品有效期开始时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setExpireDateStart( $expireDateStart) {
        $this->sdkStdResult["expireDateStart"] = $expireDateStart;
    }
/*
 * itemCodes 	Long[] 	可选 	产品编码列表 	示例值：[100111332,123111641]
 */
    public function setItemCodes( $itemCodes) {
        $this->sdkStdResult["itemCodes"] = $itemCodes;
    }
/*
 * notGoldStall 	String 	可选 	是否为非黄金展位产品 	0=否,1=是；示例值：1
 */
    public function setNotGoldStall( $notGoldStall) {
        $this->sdkStdResult["notGoldStall"] = $notGoldStall;
    }
/*
 * notLocalReturn 	String 	可选 	是否为非海外退货产品 	0=否,1=是；示例值：1
 */
    public function setNotLocalReturn( $notLocalReturn) {
        $this->sdkStdResult["notLocalReturn"] = $notLocalReturn;
    }
/*
 * operateDateEnd 	String 	可选 	产品更新结束时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setOperateDateEnd( $operateDateEnd) {
        $this->sdkStdResult["operateDateEnd"] = $operateDateEnd;
    }
/*
 * operateDateStart 	String 	必须 	产品更新开始时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setOperateDateStart( $operateDateStart) {
        $this->sdkStdResult["operateDateStart"] = $operateDateStart;
    }
/*
 * orderBy 	String 	可选 	排序列(字段) 	支持按照operateDateStart，expireDateStart，itemCodes，downDateStart四个字段排序;示例值：1
 */
    public function setOrderBy( $orderBy) {
        $this->sdkStdResult["orderBy"] = $orderBy;
    }
/*
 * orderByAsc 	String 	可选 	排序方式 	0:降序；1：升序；示例值：1
 */
    public function setOrderByAsc( $orderByAsc) {
        $this->sdkStdResult["orderByAsc"] = $orderByAsc;
    }
/*
 * pages 	String 	必须 	搜索页码 	示例值：默认1
 */
    public function setPages( $pages) {
        $this->sdkStdResult["pages"] = $pages;
    }
/*
 * pageSize 	String 	必须 	每页记录数 	最多不超过60;示例值：20
 */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
/*
 * siteId 	String 	可选 	站点类型 	EN=英文站，RU=俄文站;示例值：EN
 */
    public function setSiteId( $siteId) {
        $this->sdkStdResult["siteId"] = $siteId;
    }
/*
 * state 	String 	必须 	产品状态 	100000=未定义;100100=上架产品;100200=待审核产品;100300=审核未通过产品;100400=下架产品;100500=品牌商投诉产品;100600=疑似侵权产品;示例值：100100
 */
    public function setState( $state) {
        $this->sdkStdResult["state"] = $state;
    }
/*
 * upDateEnd 	String 	可选 	产品上架结束时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setUpDateEnd( $upDateEnd) {
        $this->sdkStdResult["upDateEnd"] = $upDateEnd;
    }
/*
 * upDateStart 	String 	可选 	产品上架开始时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setUpDateStart( $upDateStart) {
        $this->sdkStdResult["upDateStart"] = $upDateStart;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}