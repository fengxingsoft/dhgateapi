<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateOnlineTrackinfoListResultInfoDetail
{
/*
 * info 	String 	必须 	事件信息 	例如：签收
 */
    private $info;
    public function GetInfo(){
        return $this->info;
    }
/*
 * place 	String 	必须 	事件地点 	例如：北京
 */
    private $place;
    public function GetPlace(){
        return $this->place;
    }
/*
 * time 	String 	必须 	事件发生时间 	例如：2018-05-01
 */
    private $time;
    public function GetTime(){
        return $this->time;
    }



    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "info", $this->stdResult )) {
            $this->info = $this->stdResult->{"info"};
        }
        if (array_key_exists ( "place", $this->stdResult )) {
            $this->place = $this->stdResult->{"place"};
        }
        if (array_key_exists ( "time", $this->stdResult )) {
            $this->time = $this->stdResult->{"time"};
        }

    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "info", $this->arrayResult )) {
            $this->info = $arrayResult['info'];
        }
        if (array_key_exists ( "place", $this->arrayResult )) {
            $this->place = $arrayResult['place'];
        }
        if (array_key_exists ( "time", $this->arrayResult )) {
            $this->time = $arrayResult['time'];
        }


    }
}