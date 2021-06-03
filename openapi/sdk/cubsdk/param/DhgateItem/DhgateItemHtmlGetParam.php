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


class DhgateItemHtmlGetParam
{

    /*
     * itemCode 	String 	必须 	产品编码itemCode 	产品编码；示例值：154002234
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

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}