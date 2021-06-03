<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateUser;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVODhtalkSupplierSubVO
{
/*
 * level 	String 	必须 	级别 	级别
 */
    private $level;
    public function GetLevel(){
        return $this->level ;
    }
/*
 * sub_nickname 	String 	必须 	卖家子账号昵称 	卖家子账号昵称
 */
    private $sub_nickname;
    public function GetSubnickname(){
        return $this->sub_nickname ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "level", $this->stdResult )) {
            $this->level = $this->stdResult->{"level"};
        }
        if (array_key_exists ( "sub_nickname", $this->stdResult )) {
            $this->sub_nickname = $this->stdResult->{"sub_nickname"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "level", $this->arrayResult )) {
            $this->level = $arrayResult['level'];
        }
        if (array_key_exists ( "sub_nickname", $this->arrayResult )) {
            $this->sub_nickname = $arrayResult['sub_nickname'];
        }
    }
}