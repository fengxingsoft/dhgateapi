<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 17:57
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategoryItemnameValidParam{

/*
 * catePubId 	String 	必须 	发布类目ID 	该入参参数可通过获取类目列表接口(dh.categorys.get)获得；示例值：019034023;
 */
    public function setCatePubId( $catePubId) {
        $this->sdkStdResult["catePubId"] = $catePubId;
    }
/*
 * itemName 	String 	必须 	发布产品名称 	多个以逗号分隔；示例值：160,Gold,Chair,Gift
 */
    public function setItemName( $itemName) {
        $this->sdkStdResult["itemName"] = $itemName;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}