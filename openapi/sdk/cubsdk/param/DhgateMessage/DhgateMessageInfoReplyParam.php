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


class DhgateMessageInfoReplyParam
{
/*
 * attNames 	String 	可选 	附件名称列表 	附件真实名称。多个文件名以逗号分隔
 */
    public function setAttNames( $attNames) {
        $this->sdkStdResult["attNames"] = $attNames;
    }

/*
 * attUrls 	String 	可选 	附件URL 	附件在文件服务器上的URL相对地址。多个地址以逗号分隔
 */
    public function setAttUrls( $attUrls) {
        $this->sdkStdResult["attUrls"] = $attUrls;
    }

/*
 * content 	String 	必须 	回复内容 	回复的文字内容,建议采用英文
 */
    public function setContent( $content) {
        $this->sdkStdResult["content"] = $content;
    }

/*
 * msgId 	Long 	必须 	站内信ID 	站内信主题ID，每个站内信拥有唯一的一个主题ID标识
 */
    public function setMsgId( $msgId) {
        $this->sdkStdResult["msgId"] = $msgId;
    }

/*
 * receiverId 	String 	必须 	收信人ID 	收信人的位置ID标识
 */
    public function setReceiverId( $receiverId) {
        $this->sdkStdResult["receiverId"] = $receiverId;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}