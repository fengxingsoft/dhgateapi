<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class DhgateCategoryPronameValidParam
{
/*
 * catePubId 	String 	必须 	发布类目ID
 */
    public function setCatePubId( $catePubId) {
        $this->sdkStdResult["catePubId"] = $catePubId;
    }
/*
 * productName 	String 	必须 	发布产品名称
 */
    public function setProductName( $productName) {
        $this->sdkStdResult["productName"] = $productName;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}