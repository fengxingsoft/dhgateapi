<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use  com\alibaba\openapi\client\entity\SDKDomain;
use  com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemGroupListParam
{
/*
 * containChildGroup 	String 	可选 	是否包含子组,true含子组,false不包含子组,默认false,若包含子组，将获取子组的信息 	示例值：false
 */
    public function setContainChildGroup( $containChildGroup) {
        $this->sdkStdResult["containChildGroup"] = $containChildGroup;
    }
/*
 * groupCnName 	String 	可选 	产品组中文名称 	可通过卖家获取产品列表（dh. product.list）获得；示例值：ce shi shu ju
 */
    public function setGroupCnName( $groupCnName) {
        $this->sdkStdResult["groupCnName"] = $groupCnName;
    }
/*
 * groupEnName 	String 	可选 	产品组英文名称 	示例值：test
 */
    public function setGroupEnName( $groupEnName) {
        $this->sdkStdResult["groupEnName"] = $groupEnName;
    }
/*
 * pageNo 	String 	必须 	当前页页码 	示例值：2
 */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
/*
 * pageSize 	String 	必须 	每页所包含的记录条数 	示例值：20
 */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
/*
  * parentGroupId 	String 	可选 	产品组父类ID 	可通过卖家获取产品列表（dh.product.list）获得)；示例值：ff8080813fc8484b013fcb7d54980008
  */

    public function setParentGroupId( $parentGroupId) {
        $this->sdkStdResult["parentGroupId"] = $parentGroupId;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}