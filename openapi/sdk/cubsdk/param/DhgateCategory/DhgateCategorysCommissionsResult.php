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
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategorysCommissionsResultInfo;
class DhgateCategorysCommissionsResult{

    private $list;
    public function GetList(){
        return $this->list;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "list", $this->stdResult )) {
            $this->list = $this->stdResult->{"list"};

        }
        if (array_key_exists ( "list", $this->stdResult )) {
            $list=$this->stdResult->{"list"};
            $object = json_decode ( json_encode ( $list ), true );
            $this->list = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategoryListGetResultInfo=new DhgateCategorysCommissionsResultInfo();
                $DhgateCategoryListGetResultInfo->setArrayResult($arrayobject );
                $this->list[$i] = $DhgateCategoryListGetResultInfo;
            }
        }

    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "list", $this->arrayResult )) {
            $listResult=$arrayResult['list'];
            $this->list = new DhgateCategorysCommissionsResultInfo();
            $this->list->setStdResult ( $listResult);
        }
    }
}