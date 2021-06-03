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


class DhgateItemDeleteListParam
{

    /*
     * itemCodes 	String 	必须 	产品编码字符串信息 	产品编码字符串信息，多个产品编码用英文半角逗号分隔;示例值：211198221,211198222
     */
    public function setItemCodes( $itemCodes) {
        $this->sdkStdResult["itemCodes"] = $itemCodes;
    }
    /*
     * siteId 	String 	可选 	产品站点编号 	产品站点编号，EN:英文站，RU：俄文站；默认值:EN;示例值：EN
     */
    public function setSiteId( $siteId) {
        $this->sdkStdResult["siteId"] = $siteId;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}