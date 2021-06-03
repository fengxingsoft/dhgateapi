<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/12
 * Time: 17:11
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateBase;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateBase\DhgateBaseCountrysGetInfo;
use ArrayObject;
class DhgateBaseCountrysGet{
    private $countryList;
    public function GetCountryList(){
        return $this->countryList;
    }

    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "countryList", $this->stdResult )) {
            $this->countryList = $this->stdResult->{"countryList"};

        }
        if (array_key_exists ( "countryList", $this->stdResult )) {
            $countryList=$this->stdResult->{"countryList"};
            $object = json_decode ( json_encode ( $countryList ), true );
            $this->countryList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateBaseCountrysGetInfo=new DhgateBaseCountrysGetInfo();
                $DhgateBaseCountrysGetInfo->setArrayResult($arrayobject );
                $this->countryList[$i] = $DhgateBaseCountrysGetInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "countryList", $this->arrayResult )) {
            $countryListResult=$arrayResult['countryList'];
            $this->countryList = new DhgateBaseCountrysGetInfo();
            $this->countryList->setStdResult ( $countryListResult);
        }
    }

}








