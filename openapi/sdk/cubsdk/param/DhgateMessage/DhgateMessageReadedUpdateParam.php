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

class DhgateMessageReadedUpdateParam
{
  /*
   * messageTopicIdList 	String 	必须 	站内信主题ID列表 	多个ID用英文逗号隔开，如104943745,104943364
   */
    public function setMessageTopicIdList( $messageTopicIdList) {
        $this->sdkStdResult["messageTopicIdList"] = $messageTopicIdList;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}