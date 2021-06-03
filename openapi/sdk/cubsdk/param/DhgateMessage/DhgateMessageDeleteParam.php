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


class DhgateMessageDeleteParam
{
    /*
     * msgIds 	String 	必须 	站内信ID信息 	多个主题ID用英文半角逗号隔开，示例：104943745,104943364
     */
    public function setMsgIds( $msgIds) {
        $this->sdkStdResult["msgIds"] = $msgIds;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}