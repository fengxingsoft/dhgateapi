<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateCategoryPronameValidResult
{

    /*
     * isvalid 	boolean 	必须 	是否合法
     */
    private $isvalid;
    public function GetIsvalid(){
        return $this->isvalid ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "isvalid", $this->stdResult )) {
            $this->isvalid = $this->stdResult->{"isvalid"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;


        if (array_key_exists ( "isvalid", $this->arrayResult )) {
            $this->isvalid = $arrayResult['isvalid'];
        }
    }
}