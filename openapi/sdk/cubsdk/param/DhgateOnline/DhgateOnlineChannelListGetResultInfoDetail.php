<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 17:06
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateOnlineChannelListGetResultInfoDetail{
/*
 * code 	String 	必须 	仓库编号 	仓库编号
 */
    private $code;
    public function GetCode(){
        return $this->code;
    }

/*
 * contactAddress 	String 	可选 	联系地址 	联系地址
 */
    private $contactAddress;
    public function GetContactAddress(){
        return $this->contactAddress;
    }

/*
 * contactPerson 	String 	可选 	联系人 	联系人
 */
    private $contactPerson;
    public function GetContactPerson(){
        return $this->contactPerson;
    }

/*
 * contactPhone 	String 	可选 	联系电话 	联系电话
 */
    private $contactPhone;
    public function GetContactPhone(){
        return $this->contactPhone;
    }

/*
 * memo 	String 	可选 	备注 	备注
 */
    private $memo;
    public function GetMemo(){
        return $this->memo;
    }

/*
 * name 	String 	必须 	仓库名称 	仓库名称
 */
    private $name;
    public function GetName(){
        return $this->name;
    }

    private $stdResult;
    public function setStdResult($stdResult) {

        $this->stdResult = $stdResult;
        if (array_key_exists ( "code", $this->stdResult )) {
            $this->code = $this->stdResult->{"code"};
        }
        if (array_key_exists ( "contactAddress", $this->stdResult )) {
            $this->contactAddress = $this->stdResult->{"contactAddress"};
        }
        if (array_key_exists ( "contactPerson", $this->stdResult )) {
            $this->contactPerson = $this->stdResult->{"contactPerson"};
        }
        if (array_key_exists ( "contactPhone", $this->stdResult )) {
            $this->contactPhone = $this->stdResult->{"contactPhone"};
        }
        if (array_key_exists ( "memo", $this->stdResult )) {
            $this->memo = $this->stdResult->{"memo"};
        }
        if (array_key_exists ( "name", $this->stdResult )) {
            $this->name = $this->stdResult->{"name"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "code", $this->arrayResult )) {
            $this->code = $arrayResult['code'];
        }
        if (array_key_exists ( "contactAddress", $this->arrayResult )) {
            $this->contactAddress = $arrayResult['contactAddress'];
        }
        if (array_key_exists ( "contactPerson", $this->arrayResult )) {
            $this->contactPerson = $arrayResult['contactPerson'];
        }
        if (array_key_exists ( "contactPhone", $this->arrayResult )) {
            $this->contactPhone = $arrayResult['contactPhone'];
        }
        if (array_key_exists ( "memo", $this->arrayResult )) {
            $this->memo = $arrayResult['memo'];
        }
        if (array_key_exists ( "name", $this->arrayResult )) {
            $this->name = $arrayResult['name'];
        }
    }
}