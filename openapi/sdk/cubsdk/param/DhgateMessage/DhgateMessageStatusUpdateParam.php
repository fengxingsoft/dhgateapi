<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/18
 * Time: 20:04
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateMessageStatusUpdateParam
{
    /*
     * markStatus 	String 	可选 	标记状态值 	0:未标记;1:已标记
     */

    public function setMarkStatus( $markStatus) {
        $this->sdkStdResult["markStatus"] = $markStatus;
    }
    /*
     * msgIds 	String 	必须 	站内信主题ID列表 	多个主题ID用逗号隔开，如:104943745,104943364
     */

    public function setMsgIds( $msgIds) {
        $this->sdkStdResult["msgIds"] = $msgIds;
    }
    /*
     * readStatus 	String 	可选 	已读未读状态值 	0:未读;1:已读
     */
    public function setReadStatus( $readStatus) {
        $this->sdkStdResult["readStatus"] = $readStatus;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}