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


class DhgateItemSkuAttrValGetParam
{
/*
 * itemCode 	String 	必须 	产品编码itemCode 	通过获取产品列表接口（dh.item.list），获取产品详情接口（dh.item.get），上传产品接口（dh.item.add）返回的itemCode参数；示例值：154002234
 */
    public function setItemCode( $itemCode) {
        $this->sdkStdResult["itemCode"] = $itemCode;
    }
/*
 * siteId 	String 	可选 	产品所属语言站点 	默认为英文站点,参数值为：EN英文站点,RU俄语站点;示例值：EN
 */
    public function setSiteId( $siteId) {
        $this->sdkStdResult["siteId"] = $siteId;
    }
/*
 * skuMD5 	String 	必须 	产品skuMD5 	区分产品的唯一性，可通过获取产品详情(dh.item.get 2.0)接口获得
 */
    public function setSkuMD5( $skuMD5) {
        $this->sdkStdResult["skuMD5"] = $skuMD5;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}