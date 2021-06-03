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


class DhgateMessageGetParam
{
    /*
     * msgId 	Long 	必须 	站内信ID 	每条站内信都有且仅有一个ID，这里指这个站内信的ID
     */
    public function setMsgId( $msgId) {
        $this->sdkStdResult["msgId"] = $msgId;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}