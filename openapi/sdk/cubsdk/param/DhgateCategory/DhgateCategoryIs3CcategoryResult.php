<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 17:59
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategoryIs3CcategoryResult{
/*
 * categoryIdStr
 * String 	必须
 * 所有3C类目父类目，以其开头的子类目均为3C类目 	以英文状态下逗号分隔；所有3C类目父类目，以其开头的子类目均为3C类目
 */
    private $categoryIdStr;
    public function GetCategoryIdStr(){
        return $this->categoryIdStr;
    }

     /*
      * isvalid 	String 	必须 	类目是否为3C类目 	1:是，0:否
      */
    private $isvalid;
    public function GetIsvalid(){
        return $this->isvalid;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "categoryIdStr", $this->stdResult )) {
            $this->categoryIdStr = $this->stdResult->{"categoryIdStr"};
        }
        if (array_key_exists ( "isvalid", $this->stdResult )) {
            $this->isvalid = $this->stdResult->{"isvalid"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "categoryIdStr", $this->arrayResult )) {
            $this->categoryIdStr = $arrayResult['categoryIdStr'];
        }
        if (array_key_exists ( "isvalid", $this->arrayResult )) {
            $this->isvalid = $arrayResult['isvalid'];
        }
    }
}
