<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 14:41
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategoryGetParam{
    /*
     * catePubId
     * String 	必须
     * 发布类目ID 	必须为有效的叶子类目ID，该入参参数可通过dh.category.list接口获得；示例值：019024004002
     */
    public function setCatePubId( $catePubId) {
        $this->sdkStdResult["catePubId"] = $catePubId;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}