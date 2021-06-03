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
class DhgateCategoryListGetParam{
/*
 * parentId 	String 	可选
 * 父类目ID 	传空则默认为根类目ID；
 * 若不知道父类目ID，则传空值可获取所有根类目列表，然后将根类目列表返回的类目ID值作为父类目ID查询,可以此循环查找更细粒度的类目列表；例如：014;
 */
    public function setParentId( $parentId) {
        $this->sdkStdResult["parentId"] = $parentId;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}