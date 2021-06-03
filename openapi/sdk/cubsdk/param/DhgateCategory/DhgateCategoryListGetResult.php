<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 9:26
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryListGetResultInfo;
class DhgateCategoryListGetResult{
    private $catePubList;
    public function GetCatePubList(){
        return $this->catePubList;
    }

    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "catePubList", $this->stdResult )) {
            $this->catePubList = $this->stdResult->{"catePubList"};

        }
        if (array_key_exists ( "catePubList", $this->stdResult )) {
            $catePubList=$this->stdResult->{"catePubList"};
            $object = json_decode ( json_encode ( $catePubList ), true );
            $this->catePubList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategoryListGetResultInfo=new DhgateCategoryListGetResultInfo();
                $DhgateCategoryListGetResultInfo->setArrayResult($arrayobject );
                $this->catePubList[$i] = $DhgateCategoryListGetResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "catePubList", $this->arrayResult )) {
            $catePubListResult=$arrayResult['catePubList'];
            $this->catePubList = new DhgateCategoryListGetResultInfo();
            $this->catePubList->setStdResult ( $catePubListResult);
        }
    }
}