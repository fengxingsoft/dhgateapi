<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class DhgateMessageCountListParam
{
/*
 * endDate 	String 	必须 	站内信最后回复时间 	站内信最后回复时间开始时间。例：2014-9-15 16:59:15
 */
    public function setEndDate( $endDate) {
        $this->sdkStdResult["endDate"] = $endDate;
    }
/*
 * startDate 	String 	必须 	站内信最开始回复时间 	站内信最开始回复时间开始时间。 例：2014-9-15 16:59:15
 */
    public function setStartDate( $startDate) {
        $this->sdkStdResult["startDate"] = $startDate;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}