<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:53
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateShippingTrackinfoGetResultInfo
{
/*
 * info 	String 	必须 	发生事件 	发生事件
 */
    private $info;
    public function GetInfo(){
        return $this->info ;
    }
/*
 * language 	String 	必须 	语言 	语言
 */
    private $language;
    public function GetLanguage(){
        return $this->language ;
    }
/*
 * occurDate 	String 	必须 	发生时间 	发生时间
 */
    private $occurDate;
    public function GetOccurDate(){
        return $this->occurDate ;
    }
/*
 * place 	String 	必须 	发生地点 	发生地点
 */
    private $place;
    public function GetPlace(){
        return $this->place ;
    }
/*
 * shippingtype 	String 	必须 	物流方式 	物流方式
 */
    private $shippingtype;
    public function GetShippingtype(){
        return $this->shippingtype ;
    }
/*
 * trackno 	String 	必须 	运单号 	运单号
 */
    private $trackno;
    public function GetTrackno(){
        return $this->trackno ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "info", $this->stdResult )) {
            $this->info = $this->stdResult->{"info"};
        }
        if (array_key_exists ( "language", $this->stdResult )) {
            $this->language = $this->stdResult->{"language"};
        }
        if (array_key_exists ( "occurDate", $this->stdResult )) {
            $this->occurDate = $this->stdResult->{"occurDate"};
        }
        if (array_key_exists ( "place", $this->stdResult )) {
            $this->place = $this->stdResult->{"place"};
        }
        if (array_key_exists ( "shippingtype", $this->stdResult )) {
            $this->shippingtype = $this->stdResult->{"shippingtype"};
        }
        if (array_key_exists ( "trackno", $this->stdResult )) {
            $this->trackno = $this->stdResult->{"trackno"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "info", $this->arrayResult )) {
            $this->info = $arrayResult['info'];
        }
        if (array_key_exists ( "language", $this->arrayResult )) {
            $this->language = $arrayResult['language'];
        }
        if (array_key_exists ( "occurDate", $this->arrayResult )) {
            $this->occurDate = $arrayResult['occurDate'];
        }
        if (array_key_exists ( "place", $this->arrayResult )) {
            $this->place = $arrayResult['place'];
        }
        if (array_key_exists ( "shippingtype", $this->arrayResult )) {
            $this->shippingtype = $arrayResult['shippingtype'];
        }
        if (array_key_exists ( "trackno", $this->arrayResult )) {
            $this->trackno = $arrayResult['trackno'];
        }
    }
}
