<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 10:39
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
use com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory\DhgateCategoryAttrvalListBrandGetCategoryPubAttrInfo;
class DhgateCategoryAttrvalListBrandGetResult{
    /*
     * categoryPubAttr
     * CategoryPubAttr 	必须
     * 发布类目属性
     */
    private $categoryPubAttr;
    public function GetCategoryPubAttr(){
        return $this->categoryPubAttr;
    }

    /*
     * catePubId
     * String 	必须
     * 发布类目id 	物理父级类目id + 自身id 每段为3位，共6位；示例值：014024
     */
    private $catePubId;
    public function GetCatePubId(){
        return $this->catePubId;
    }


    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "catePubId", $this->stdResult )) {
            $this->catePubId = $this->stdResult->{"catePubId"};

        }
        if (array_key_exists ( "categoryPubAttr", $this->stdResult )) {
            $this->categoryPubAttr = $this->stdResult->{"categoryPubAttr"};

        }
        if (array_key_exists ( "categoryPubAttr", $this->stdResult )) {
            $categoryPubAttr=$this->stdResult->{"categoryPubAttr"};
            $object = json_decode ( json_encode ( $categoryPubAttr), true );
            $this->categoryPubAttr = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategoryBrandListGetBrandsListInfo=new DhgateCategoryAttrvalListBrandGetCategoryPubAttrInfo();
                $DhgateCategoryBrandListGetBrandsListInfo->setArrayResult($arrayobject );
                $this->categoryPubAttr[$i] = $DhgateCategoryBrandListGetBrandsListInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "categoryPubAttr", $this->arrayResult )) {
            $categoryPubAttrResult=$arrayResult['categoryPubAttr'];
            $this->categoryPubAttr = new DhgateCategoryAttrvalListBrandGetCategoryPubAttrInfo();
            $this->categoryPubAttr->setStdResult ( $categoryPubAttrResult);
        }
    }
}