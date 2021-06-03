<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 13:17
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategoryAttrvalListBrandGetParam{
    /*
     * brandId 	String 	可选 	品牌值id。dh.category.attrval.listBrand接口方法用这个值 	通过调用dh.category.brandList2.0接口获取品牌id
     */
    public function setBrandId( $brandId) {
        $this->sdkStdResult["brandId"] = $brandId;
    }

    /*
     * catePubAttrValId 	String 	可选
     * 发布属性值ID，如果获取自定义属性，值传入0即可。如果父级属性是品牌属性则可不传dh.category.attrval.list接口用这个值
     * 通过调用dh.category.get2.0接口获取属性的发布属性值id,示例值：11106880
     */
    public function setCatePubAttrValId( $catePubAttrValId) {
        $this->sdkStdResult["catePubAttrValId"] = $catePubAttrValId;
    }

    /*
     * catePubId 	String 	必须 	发布类目ID 	发布类目ID,示例值：195001002
     */
    public function setCatePubId( $catePubId) {
        $this->sdkStdResult["catePubId"] = $catePubId;
    }

    /*
     * childAtrrId 	String 	必须 	子属性ID 	通过调用dh.category.get2.0接口获取属性的子属性id
     */
    public function setChildAtrrId( $childAtrrId) {
        $this->sdkStdResult["childAtrrId"] = $childAtrrId;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}