<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateMessageDetailGetResultGetMessageTopic
{
/*
 * appid 	String 	必须 	appid 	appid
 */
    private $appid;
    public function GetAppid(){
        return $this->appid ;
    }

/*
 * bgcolor 	String 	必须 	背景色 	背景色
 */
    private $bgcolor;
    public function GetBgcolor(){
        return $this->bgcolor ;
    }

/*
 * lastreplytime 	Date 	必须 	最后回复时间 	最后回复时间
 */
    private $lastreplytime;
    public function GetLastreplytime(){
        return $this->lastreplytime ;
    }

/*
 * mcLock 	Long 	必须 	消息类型 	消息类型
 */
    private $mcLock;
    public function GetMcLock(){
        return $this->mcLock ;
    }

/*
 * msgreplycount 	Long 	必须 	消息回复数 	消息回复数
 */
    private $msgreplycount;
    public function GetMsgreplycount(){
        return $this->msgreplycount ;
    }

/*
 * msgtype 	Long 	必须 	消息类型 	消息类型
 */
    private $msgtype;
    public function GetMsgtype(){
        return $this->msgtype ;
    }

/*
 * parm 	String 	必须 	参数 	参数
 */
    private $parm;
    public function GetParm(){
        return $this->parm ;
    }

/*
 * receiverNickname 	String 	必须 	收件人名称 	收件人名称
 */
    private $receiverNickname;
    public function GetReceiverNickname(){
        return $this->receiverNickname ;
    }

/*
 * recieverid 	String 	必须 	收件人id,用于发送与回复站内信 	收件人id,用于发送与回复站内信
 */
    private $recieverid;
    public function GetRecieverid(){
        return $this->recieverid ;
    }

/*
 * recieverOrganizationid 	String 	必须 	收件人原始id,无效值 	收件人原始id,无效值
 */
    private $recieverOrganizationid;
    public function GetRecieverOrganizationid(){
        return $this->recieverOrganizationid ;
    }

/*
 * reciveMarked 	Long 	必须 	接收标记 	接收标记
 */
    private $reciveMarked;
    public function GetReciveMarked(){
        return $this->reciveMarked ;
    }

/*
 * recivereaded 	Long 	必须 	接收读取 	接收读取
 */
    private $recivereaded;
    public function GetRecivereaded(){
        return $this->recivereaded ;
    }

/*
 * recivestat 	Long 	必须 	接收状态 	接收状态
 */
    private $recivestat;
    public function GetRecivestat(){
        return $this->recivestat ;
    }

/*
 * senderid 	String 	必须 	发送者id,用于发送与回复站内信 	发送者id,用于发送与回复站内信
 */
    private $senderid;
    public function GetSenderid(){
        return $this->senderid ;
    }

/*
 * senderMarked 	Long 	必须 	发送标记 	发送标记
 */
    private $senderMarked;
    public function GetSnderMarked(){
        return $this->senderMarked ;
    }

/*
 * senderNickname 	String 	必须 	发送者别名 	发送者别名
 */
    private $senderNickname;
    public function GetSenderNickname(){
        return $this->senderNickname ;
    }

/*
 * senderOrganizationid 	String 	必须 	发送者原始id,无效值 	发送者原始id,无效值
 */
    private $senderOrganizationid;
    public function GetSenderOrganizationid(){
        return $this->senderOrganizationid ;
    }

/*
 * senderreaded 	Long 	必须 	发送者读取 	发送者读取
 */
    private $senderreaded;
    public function GetSenderreaded(){
        return $this->senderreaded ;
    }

/*
 * senderstat 	Long 	必须 	发送状态 	发送状态
 */
    private $senderstat;
    public function GetSenderstat(){
        return $this->senderstat ;
    }

/*
 * tdMessageTopicId 	Long 	必须 	主题ID 	主题ID
 */
    private $tdMessageTopicId;
    public function GetTdMessageTopicId(){
        return $this->tdMessageTopicId ;
    }

/*
 * title 	String 	必须 	标题 	标题
 */
    private $title;
    public function GetTitle(){
        return $this->title ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "appid", $this->stdResult )) {
            $this->appid = $this->stdResult->{"appid"};
        }
        if (array_key_exists ( "bgcolor", $this->stdResult )) {
            $this->bgcolor = $this->stdResult->{"bgcolor"};
        }
        if (array_key_exists ( "lastreplytime", $this->stdResult )) {
            $this->lastreplytime = $this->stdResult->{"lastreplytime"};
        }
        if (array_key_exists ( "mcLock", $this->stdResult )) {
            $this->mcLock = $this->stdResult->{"mcLock"};
        }
        if (array_key_exists ( "msgreplycount", $this->stdResult )) {
            $this->msgreplycount = $this->stdResult->{"msgreplycount"};
        }
        if (array_key_exists ( "msgtype", $this->stdResult )) {
            $this->msgtype = $this->stdResult->{"msgtype"};
        }
        if (array_key_exists ( "parm", $this->stdResult )) {
            $this->parm = $this->stdResult->{"parm"};
        }
        if (array_key_exists ( "receiverNickname", $this->stdResult )) {
            $this->receiverNickname = $this->stdResult->{"receiverNickname"};
        }
        if (array_key_exists ( "recieverid", $this->stdResult )) {
            $this->recieverid = $this->stdResult->{"recieverid"};
        }
        if (array_key_exists ( "recieverOrganizationid", $this->stdResult )) {
            $this->recieverOrganizationid = $this->stdResult->{"recieverOrganizationid"};
        }
        if (array_key_exists ( "reciveMarked", $this->stdResult )) {
            $this->reciveMarked = $this->stdResult->{"reciveMarked"};
        }
        if (array_key_exists ( "recivereaded", $this->stdResult )) {
            $this->recivereaded = $this->stdResult->{"recivereaded"};
        }
        if (array_key_exists ( "recivestat", $this->stdResult )) {
            $this->recivestat = $this->stdResult->{"recivestat"};
        }
        if (array_key_exists ( "senderid", $this->stdResult )) {
            $this->senderid = $this->stdResult->{"senderid"};
        }
        if (array_key_exists ( "senderMarked", $this->stdResult )) {
            $this->senderMarked = $this->stdResult->{"senderMarked"};
        }
        if (array_key_exists ( "senderNickname", $this->stdResult )) {
            $this->senderNickname = $this->stdResult->{"senderNickname"};
        }
        if (array_key_exists ( "senderOrganizationid", $this->stdResult )) {
            $this->senderOrganizationid = $this->stdResult->{"senderOrganizationid"};
        }
        if (array_key_exists ( "senderreaded", $this->stdResult )) {
            $this->senderreaded = $this->stdResult->{"senderreaded"};
        }
        if (array_key_exists ( "senderstat", $this->stdResult )) {
            $this->senderstat = $this->stdResult->{"senderstat"};
        }
        if (array_key_exists ( "tdMessageTopicId", $this->stdResult )) {
            $this->tdMessageTopicId = $this->stdResult->{"tdMessageTopicId"};
        }
        if (array_key_exists ( "title", $this->stdResult )) {
            $this->title = $this->stdResult->{"title"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "appid", $this->arrayResult )) {
            $this->appid = $arrayResult['appid'];
        }
        if (array_key_exists ( "bgcolor", $this->arrayResult )) {
            $this->bgcolor = $arrayResult['bgcolor'];
        }
        if (array_key_exists ( "lastreplytime", $this->arrayResult )) {
            $this->lastreplytime = $arrayResult['lastreplytime'];
        }
        if (array_key_exists ( "mcLock", $this->arrayResult )) {
            $this->mcLock = $arrayResult['mcLock'];
        }
        if (array_key_exists ( "msgreplycount", $this->arrayResult )) {
            $this->msgreplycount = $arrayResult['msgreplycount'];
        }
        if (array_key_exists ( "msgtype", $this->arrayResult )) {
            $this->msgtype = $arrayResult['msgtype'];
        }
        if (array_key_exists ( "parm", $this->arrayResult )) {
            $this->parm = $arrayResult['parm'];
        }
        if (array_key_exists ( "receiverNickname", $this->arrayResult )) {
            $this->receiverNickname = $arrayResult['receiverNickname'];
        }
        if (array_key_exists ( "recieverid", $this->arrayResult )) {
            $this->recieverid = $arrayResult['recieverid'];
        }
        if (array_key_exists ( "recieverOrganizationid", $this->arrayResult )) {
            $this->recieverOrganizationid = $arrayResult['recieverOrganizationid'];
        }
        if (array_key_exists ( "reciveMarked", $this->arrayResult )) {
            $this->reciveMarked = $arrayResult['reciveMarked'];
        }
        if (array_key_exists ( "recivereaded", $this->arrayResult )) {
            $this->recivereaded = $arrayResult['recivereaded'];
        }
        if (array_key_exists ( "recivestat", $this->arrayResult )) {
            $this->recivestat = $arrayResult['recivestat'];
        }
        if (array_key_exists ( "senderid", $this->arrayResult )) {
            $this->senderid = $arrayResult['senderid'];
        }
        if (array_key_exists ( "senderMarked", $this->arrayResult )) {
            $this->senderMarked = $arrayResult['senderMarked'];
        }
        if (array_key_exists ( "senderNickname", $this->arrayResult )) {
            $this->senderNickname = $arrayResult['senderNickname'];
        }
        if (array_key_exists ( "senderOrganizationid", $this->arrayResult )) {
            $this->senderOrganizationid = $arrayResult['senderOrganizationid'];
        }
        if (array_key_exists ( "senderreaded", $this->arrayResult )) {
            $this->senderreaded = $arrayResult['senderreaded'];
        }
        if (array_key_exists ( "senderstat", $this->arrayResult )) {
            $this->senderstat = $arrayResult['senderstat'];
        }
        if (array_key_exists ( "tdMessageTopicId", $this->arrayResult )) {
            $this->tdMessageTopicId = $arrayResult['tdMessageTopicId'];
        }
        if (array_key_exists ( "title", $this->arrayResult )) {
            $this->title = $arrayResult['title'];
        }
    }
}