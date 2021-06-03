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


class DhgateItemSkuGetParam
{
/*
 * itemCode 	String 	必须 	产品编码itemCode 	通过获取产品列表接口（dh.item.list），获取产品详情接口（dh.item.get），上传产品接口（dh.item.add）返回的itemCode参数；示例值：154002234
 */
    public function setItemCode( $itemCode) {
        $this->sdkStdResult["itemCode"] = $itemCode;
    }
/*
 * siteId 	String 	可选 	多语言站点标识 	取值范围只能为：EN=英文站，RU=俄文站；为非必填项，默认值为EN。
 */
    public function setSiteId( $siteId) {
        $this->sdkStdResult["siteId"] = $siteId;
    }
/*
 * skuId 	String 	必须 	产品SKU主键 	通过获得产品sku列表接口(dh.item.skuList.get)获取；示例值：1159406191
 */
    public function setSkuId( $skuId) {
        $this->sdkStdResult["skuId"] = $skuId;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}