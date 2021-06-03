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
class DhgateShippingTrackinfoListResultInfo
{
/*
 * evtDate 	String 	必须 	事件发生时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $evtDate;
    public function GetEvtDate(){
        return $this->evtDate ;
    }
/*
 * evtDesc 	String 	必须 	事件描述信息 	根据语言返回不同语言描述信息；示例值：您的订单已打包完毕
 */
    private $evtDesc;
    public function GetEvtDesc(){
        return $this->evtDesc ;
    }
/*
 * evtPlace 	String 	必须 	事件发生地点 	china north sea
 */
    private $evtPlace;
    public function GetEvtPlace(){
        return $this->evtPlace ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "evtDate", $this->stdResult )) {
            $this->evtDate = $this->stdResult->{"evtDate"};
        }
        if (array_key_exists ( "evtDesc", $this->stdResult )) {
            $this->evtDesc = $this->stdResult->{"evtDesc"};
        }
        if (array_key_exists ( "evtPlace", $this->stdResult )) {
            $this->evtPlace = $this->stdResult->{"evtPlace"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "evtDate", $this->arrayResult )) {
            $this->evtDate = $arrayResult['evtDate'];
        }
        if (array_key_exists ( "evtDesc", $this->arrayResult )) {
            $this->evtDesc = $arrayResult['evtDesc'];
        }
        if (array_key_exists ( "evtPlace", $this->arrayResult )) {
            $this->evtPlace = $arrayResult['evtPlace'];
        }
    }
}
