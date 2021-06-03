<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/20
 * Time: 11:22
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use  com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemLeadingUpdateListParam
{
    /*
     * itemCodes 	String 	必须 	产品编码字符串信息 	产品编码字符串信息，多个产品编码用英文半角逗号分隔;示例值：211198221,211198222
     */
    public function setItemCodes( $itemCodes) {
        $this->sdkStdResult["itemCodes"] = $itemCodes;
    }
    /*
     * leadTime 	String 	必须 	产品备货期 	产品备货期。有备货产品，备货期为1~4天；无备货产品，备货期为1~60天。
     */
    public function setLeadTime( $leadTime) {
        $this->sdkStdResult["leadTime"] = $leadTime;
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