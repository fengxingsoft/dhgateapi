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


class DhgateMessageDetailGetParam
{
/*
 * appid 	String 	可选 	平台ID
 */
    public function setAppid( $appid) {
        $this->sdkStdResult["appid"] = $appid;
    }
/*
 * messageTopicId 	Long 	必须 	站内信主题ID
 */

    public function setMessageTopicId( $messageTopicId) {
        $this->sdkStdResult["messageTopicId"] = $messageTopicId;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}