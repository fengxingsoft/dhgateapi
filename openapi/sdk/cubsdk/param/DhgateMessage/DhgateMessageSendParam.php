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


class DhgateMessageSendParam
{
/*
 * attNames 	String 	可选 	附件名称列表 	附件真实名称。多个文件名以逗号分隔，文件保存的真实名称
 */
    public function setAttNames( $attNames) {
        $this->sdkStdResult["attNames"] = $attNames;
    }
/*
 * attUrls 	String 	可选 	附件URL列表 	附件在文件服务器上的URL相对地址。多个地址以逗号分隔，如果存在附件，则需要调用上传接口，上传文件到文件服务器，得到返回信息
 */
    public function setAttUrls( $attUrls) {
        $this->sdkStdResult["attUrls"] = $attUrls;
    }
/*
 * content 	String 	可选 	站内信内容 	发送的文字内容,建议采用英文
 */
    public function setContent( $content) {
        $this->sdkStdResult["content"] = $content;
    }
/*
 * msgTitle 	String 	必须 	消息主题 	一条站内信有且仅有一个主题，且一旦生成不可修改。（当发订单类型站内信时，主题格式为PO#+订单号;当发询盘站内信时，主题为产品名称）
 */
    public function setMsgTitle( $msgTitle) {
        $this->sdkStdResult["msgTitle"] = $msgTitle;
    }
/*
 * param 	String 	可选 	附加参数 	仅仅当sendMsgType=2或者3时，为必填参数，sendMsgType=2订单类型时，这里必须传入订单号；sendMsgType =3询盘类型时,这里必须传入产品的编码（即itemCode）
 */
    public function setParam( $param) {
        $this->sdkStdResult["param"] = $param;
    }
/*
 * reciverId 	String 	必须 	收信人ID 	收信人的唯一ID标识
 */
    public function setReciverId( $reciverId) {
        $this->sdkStdResult["reciverId"] = $reciverId;
    }
/*
 * sendMsgType 	String 	必须 	站内信发送类型 	可选值：2=订单，3=询盘，4=我的买家，13=卖家店铺；示例值：2
 */
    public function setSendMsgType( $sendMsgType) {
        $this->sdkStdResult["sendMsgType"] = $sendMsgType;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}