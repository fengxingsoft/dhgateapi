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
class DhgateCategoryidListParam{

    /*
     * siteId 	String 	可选 	产品所属语言站点 	默认为英文站点,参数值为：EN英文站点,RU俄语站点;示例值：EN
     */
    public function setSiteId( $siteId) {
        $this->sdkStdResult["siteId"] = $siteId;
    }
    /*
     * updateDate 	String 	必须 	过期时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
     */
    public function setUpdateDate( $updateDate) {
        $this->sdkStdResult["updateDate"] = $updateDate;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}