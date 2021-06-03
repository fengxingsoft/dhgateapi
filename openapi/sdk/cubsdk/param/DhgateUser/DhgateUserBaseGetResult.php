<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateUser;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateUserBaseGetResult{
    private $systemuserbase;
    public function GetSystemuserbase(){
        return $this->systemuserbase;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "systemuserbase", $this->stdResult )) {
            $this->systemuserbase = $this->stdResult->{"systemuserbase"};
        }
        if (array_key_exists ( "systemuserbase", $this->stdResult )) {
            $systemuserbaseResult=$this->stdResult->{"systemuserbase"};
            $object = json_decode ( json_encode ( $systemuserbaseResult ), true );
            $this->systemuserbase = array ();
                $arrayobject = new ArrayObject ( $object);
                $DhgateUserBaseGetResultInfo=new DhgateUserBaseGetResultInfo();
                $DhgateUserBaseGetResultInfo->setArrayResult($arrayobject );
                $this->systemuserbase = $DhgateUserBaseGetResultInfo;
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "systemuserbase", $this->arrayResult )) {
            $systemuserbaseResult=$arrayResult['resultList'];
            $this->systemuserbase = new DhgateUserBaseGetResultInfo();
            $this->systemuserbase->setStdResult ( $systemuserbaseResult);
        }
    }
}