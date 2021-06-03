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


class DhgateItemSkuListParam
{
/*
 * itemCode 	String 	必须 	产品编码itemCode 	示例值 ：132123254
 */
    public function setItemCode( $itemCode) {
        $this->sdkStdResult["itemCode"] = $itemCode;
    }
/*
 * siteId 	String 	可选 	多语言站点标识 	取值范围只能为：EN=英文站，RU=俄文站；为非必填项，默认值为EN;示例值：E
 */
    public function setSiteId( $siteId) {
        $this->sdkStdResult["siteId"] = $siteId;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}