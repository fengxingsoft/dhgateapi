<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

use ArrayObject;
class DhgateItemWholesaleUpdateListParam extends SDKDomain
{
/*
 * itemList 	ItemUpdate[] 	必须 	产品折扣列表 	包含的参数信息：itemCode=产品itemCode，itemWholesaleRangeList=产品批发折扣区间列表，包含以下：startQty=起批开始数量，endQty=起批截止数量，disCount=折扣，disCountType=设置价格类型
  DhgateItemWholesaleUpdateListItemListParam
*/
    private $itemList;
    public function setItemList($itemList) {
        $this->sdkStdResult["itemList"] = $itemList;
    }
    public function getItemList() {
        return $this->itemList;
    }
/*
 * siteId 	String 	可选 	产品站点编号 	产品站点编号，EN=英文站点，RU=俄文站点，默认值:EN;示例值：EN
 */
    private $siteId;
    public function setSiteId( $siteId) {
        $this->sdkStdResult["siteId"] = $siteId;
    }
    public function getSiteId( ) {
        $this->siteId;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
    private $stdResult;
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;

        if (array_key_exists("itemList", $this->stdResult)) {
            $itemListResult = $this->stdResult->{"itemList"};
            $object = json_decode ( json_encode ( $itemListList ), true );
            $this->itemList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemWholesaleUpdateListItemListParam = new DhgateItemWholesaleUpdateListItemListParam ();
                $DhgateItemWholesaleUpdateListItemListParam->setArrayResult ( $arrayobject );
                $this->itemList[$i] = $DhgateItemWholesaleUpdateListItemListParam;
            }
        }
    }
}