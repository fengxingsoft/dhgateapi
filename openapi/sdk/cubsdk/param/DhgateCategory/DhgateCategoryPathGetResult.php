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

class DhgateCategoryPathGetResult{
    private $categoryPublishList;
    public function GetCategoryPublishList(){
        return $this->categoryPublishList;
    }

    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "categoryPublishList", $this->stdResult )) {
            $this->categoryPublishList = $this->stdResult->{"categoryPublishList"};

        }
        if (array_key_exists ( "categoryPublishList", $this->stdResult )) {
            $categoryPublishListResult=$this->stdResult->{"categoryPublishList"};
            $object = json_decode ( json_encode ( $categoryPublishListResult ), true );
            $this->categoryPublishList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategoryPathGetResultInfo=new DhgateCategoryPathGetResultInfo();
                $DhgateCategoryPathGetResultInfo->setArrayResult($arrayobject );
                $this->categoryPublishList[$i] = $DhgateCategoryPathGetResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "categoryPublishList", $this->arrayResult )) {
            $categoryPublishListResult=$arrayResult['categoryPublishList'];
            $this->categoryPublishList = new DhgateCategoryPathGetResultInfo();
            $this->categoryPublishList->setStdResult ( $categoryPublishListResult);
        }
    }
}