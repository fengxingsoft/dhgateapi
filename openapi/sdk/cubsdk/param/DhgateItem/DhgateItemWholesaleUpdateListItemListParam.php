<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/29
 * Time: 9:34
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateItemWholesaleUpdateListItemListParam extends SDKDomain
{
/*
 * itemCode 	Long 	必须 	产品itemCode 	通过获取产品列表接口（dh.item.list），获取产品详情接口（dh.item.get）获取；示例值：154002234
 */
    private $itemCode;
    public function setItemCode( $itemCode) {
        $this->itemCode = $itemCode;
    }
    public function getItemCode() {
        return $this->itemCode;
    }
    /*
     * //itemWholesaleRangeList 	ItemWholesaleRangeBatch[] 	必须 	产品批发折扣区间列表 	折扣第二区间必须要比第一区间大，比如起批数量为10，截止数量为20，折扣为0.05，起批数量为11，截止数量为30，折扣为0.06，以此类推；该列表包含以下参数：startQty=起批开始数量，endQty=起批截止数量，disCount=折扣，disCountType=设置价格类型。
    DhgateItemWholesaleUpdateListItemListParamitemWholesaleRangeList
    */
    private $itemWholesaleRangeList;
    public function setItemWholesaleRangeList($itemWholesaleRangeList) {
        $this->itemWholesaleRangeList = $itemWholesaleRangeList;
    }
    public function getItemWholesaleRangeList() {
       return $this->itemWholesaleRangeList;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }


}