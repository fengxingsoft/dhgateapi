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
class DhgateCategoryidListResult{
  /*
   * categoryIdList
   * String[] 	必须 	类目列表Id
   */
    private $categoryIdList;
    public function GetCategoryIdList(){
        return $this->categoryIdList;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "categoryIdList", $this->stdResult )) {
            $this->categoryIdList = $this->stdResult->{"categoryIdList"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "categoryIdList", $this->arrayResult )) {
            $this->categoryIdList = $arrayResult['categoryIdList'];
        }
    }
}
