<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateCategorysGetResult{
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
/*
 * attributeList 	CategoryPublishAttributeVO[] 	必须 	发布类目属性 	发布类目属性
 */
    public function setAttributeList($attributeList){
        $this->sdkStdResult["attributeList"] = $attributeList;
    }

    private $attributeList;
    public function GetAttributeList(){
        return $this->attributeList;
    }
/*
 * categoryPath 	String 	必须 	英文类目路径 	英文类目路径
 */
    public function setCategoryPath($categoryPath){
        $this->sdkStdResult["categoryPath"] = $categoryPath;
    }

    private $categoryPath;
    public function GetCategoryPath(){
        return $this->categoryPath;
    }
/*
 * categoryPathChinese 	String 	必须 	中文类目路径 	中文类目路径
 */
    private $categoryPathChinese;
    public function GetCategoryPathChinese(){
        return $this->categoryPathChinese;
    }
/*
 * categoryPubAttrgroupList 	CategoryPublishAttrGroupVO[] 	必须 	兼容性属性 	兼容性属性
 */
    private $categoryPubAttrgroupList;
    public function GetCategoryPubAttrgroupList(){
        return $this->categoryPubAttrgroupList;
    }
/*
 * catePubId 	String 	必须 	发布类目id（物理父级类目id + 自身id 每段为3位） 	发布类目id（物理父级类目id + 自身id 每段为3位）
 */
    private $catePubId;
    public function GetCatePubId(){
        return $this->catePubId;
    }
/*
 * excludeKeywords 	String 	必须 	不能包含的关键词 	不能包含的关键词
 */
    private $excludeKeywords;
    public function GetExcludeKeywords(){
        return $this->excludeKeywords;
    }
/*
 * inlucdeKeywords 	String 	必须 	必须包含的关键词 	必须包含的关键词
 */
    private $inlucdeKeywords;
    public function GetInlucdeKeywords(){
        return $this->inlucdeKeywords;
    }
/*
 * leaf 	String 	必须 	是否叶子类目（1：是， 0：不是） 	是否叶子类目（1：是， 0：不是）
 */
    private $leaf;
    public function GetLeaf(){
        return $this->leaf;
    }
/*
 * minPrice 	Double 	必须 	最小价格 	最小价格
 */
    private $minPrice;
    public function GetMinPrice(){
        return $this->minPrice;
    }
/*
 * pareCatePubId 	String 	必须 	父级发布类目（物理父级类目） 	父级发布类目（物理父级类目）
 */
    private $pareCatePubId;
    public function GetPareCatePubId(){
        return $this->pareCatePubId;
    }
/*
 * prodLineId 	Long 	必须 	产品线编号（只有叶子类目才有） 	产品线编号（只有叶子类目才有）
 */
    private $prodLineId;
    public function GetProdLineId(){
        return $this->prodLineId;
    }
/*
 * pubName 	String 	必须 	英文名称 	英文名称
 */
    private $pubName;
    public function GetPubName(){
        return $this->pubName;
    }
/*
 * pubNameCn 	String 	必须 	中文名称 	中文名称
 */
    private $pubNameCn;
    public function GetPubNameCn(){
        return $this->pubNameCn;
    }
/*
 * remark 	String 	必须 	说明 	说明
 */
    private $remark;
    public function GetRemark(){
        return $this->remark;
    }
/*
 * stockPeriod 	Long 	必须 	备货期 	备货期
 */
    private $stockPeriod;
    public function GetStockPeriod(){
        return $this->stockPeriod;
    }
/*
 * stockWarnRatio 	Double 	必须 	备货数量不足提醒， 比例(<1, 例如:0.8) 	备货数量不足提醒， 比例(<1, 例如:0.8)
 */
    private $stockWarnRatio;
    public function GetStockWarnRatio(){
        return $this->stockWarnRatio;
    }
/*
 * updateBy 	String 	必须 	更新人 	更新人
 */
    private $updateBy;
    public function GetUpdateBy(){
        return $this->updateBy;
    }
/*
 * updateTime 	Date 	必须 	更新时间 	更新时间
 */
    private $updateTime;
    public function GetUpdateTime(){
        return $this->updateTime;
    }
/*
 * valid 	String 	必须 	是否有效类目（1：是， 0：不是） 	是否有效类目（1：是， 0：不是）
 */

    private $valid;
    public function GetValid(){
        return $this->valid;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "attributeList", $this->stdResult )) {
            $this->attributeList = $this->stdResult->{"attributeList"};

        }
        if (array_key_exists ( "attributeList", $this->stdResult )) {
            $iattributeListResult=$this->stdResult->{"attributeList"};
            $object = json_decode ( json_encode ( $iattributeListResult ), true );
            $this->attributeList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategoryAttrvalListGetResult=new DhgateCategoryAttrvalListGetResult();
                $DhgateCategoryAttrvalListGetResult->setArrayResult($arrayobject );
                $this->attributeList[$i] = $DhgateCategoryAttrvalListGetResult;
            }
        }
        if (array_key_exists ( "categoryPath", $this->stdResult )) {
            $this->categoryPath = $this->stdResult->{"categoryPath"};

        }
        if (array_key_exists ( "categoryPathChinese", $this->stdResult )) {
            $this->categoryPathChinese = $this->stdResult->{"categoryPathChinese"};

        }
        if (array_key_exists ( "categoryPubAttrgroupList", $this->stdResult )) {
            $this->categoryPubAttrgroupList = $this->stdResult->{"categoryPubAttrgroupList"};

        }
        if (array_key_exists ( "categoryPubAttrgroupList", $this->stdResult )) {
            $categoryPubAttrgroupListResult=$this->stdResult->{"categoryPubAttrgroupList"};
            $object = json_decode ( json_encode ( $categoryPubAttrgroupListResult ), true );
            $this->categoryPubAttrgroupList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategoryAttrvalListGetResult=new DhgateCategoryAttrvalListGetResult();
                $DhgateCategoryAttrvalListGetResult->setArrayResult($arrayobject );
                $this->categoryPubAttrgroupList[$i] = $DhgateCategoryAttrvalListGetResult;
            }
        }
        if (array_key_exists ( "catePubId", $this->stdResult )) {
            $this->catePubId = $this->stdResult->{"catePubId"};
        }
        if (array_key_exists ( "excludeKeywords", $this->stdResult )) {
            $this->excludeKeywords = $this->stdResult->{"excludeKeywords"};
        }
        if (array_key_exists ( "inlucdeKeywords", $this->stdResult )) {
            $this->inlucdeKeywords = $this->stdResult->{"inlucdeKeywords"};
        }
        if (array_key_exists ( "leaf", $this->stdResult )) {
            $this->leaf = $this->stdResult->{"leaf"};
        }
        if (array_key_exists ( "minPrice", $this->stdResult )) {
            $this->minPrice = $this->stdResult->{"minPrice"};
        }
        if (array_key_exists ( "pareCatePubId", $this->stdResult )) {
            $this->pareCatePubId = $this->stdResult->{"pareCatePubId"};
        }
        if (array_key_exists ( "prodLineId", $this->stdResult )) {
            $this->prodLineId = $this->stdResult->{"prodLineId"};
        }
        if (array_key_exists ( "pubName", $this->stdResult )) {
            $this->pubName = $this->stdResult->{"pubName"};
        }
        if (array_key_exists ( "pubNameCn", $this->stdResult )) {
            $this->pubNameCn = $this->stdResult->{"pubNameCn"};
        }
        if (array_key_exists ( "remark", $this->stdResult )) {
            $this->remark = $this->stdResult->{"remark"};
        }
        if (array_key_exists ( "stockPeriod", $this->stdResult )) {
            $this->stockPeriod = $this->stdResult->{"stockPeriod"};
        }
        if (array_key_exists ( "stockWarnRatio", $this->stdResult )) {
            $this->stockWarnRatio = $this->stdResult->{"stockWarnRatio"};
        }
        if (array_key_exists ( "updateBy", $this->stdResult )) {
            $this->updateBy = $this->stdResult->{"updateBy"};
        }
        if (array_key_exists ( "updateTime", $this->stdResult )) {
            $this->updateTime = $this->stdResult->{"updateTime"};
        }
        if (array_key_exists ( "valid", $this->stdResult )) {
            $this->valid = $this->stdResult->{"valid"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "attributeList", $this->arrayResult )) {
            $attributeListResult=$arrayResult['attributeList'];
            $this->attributeList = new DhgateCategoryAttrvalListGetResult();
            $this->attributeList->setStdResult ( $attributeListResult);
        }
        if (array_key_exists ( "categoryPath", $this->arrayResult )) {
            $this->categoryPath = $arrayResult['categoryPath'];
        }
        if (array_key_exists ( "categoryPathChinese", $this->arrayResult )) {
            $this->categoryPathChinese = $arrayResult['categoryPathChinese'];
        }
        if (array_key_exists ( "categoryPubAttrgroupList", $this->arrayResult )) {
            $categoryPubAttrgroupListResult=$arrayResult['categoryPubAttrgroupList'];
            $this->categoryPubAttrgroupList = new DhgateCategoryAttrvalListGetResult();
            $this->categoryPubAttrgroupList->setStdResult ( $categoryPubAttrgroupListResult);
        }
        if (array_key_exists ( "catePubId", $this->arrayResult )) {
            $this->catePubId = $arrayResult['catePubId'];
        }
        if (array_key_exists ( "excludeKeywords", $this->arrayResult )) {
            $this->excludeKeywords = $arrayResult['excludeKeywords'];
        }
        if (array_key_exists ( "inlucdeKeywords", $this->arrayResult )) {
            $this->inlucdeKeywords = $arrayResult['inlucdeKeywords'];
        }
        if (array_key_exists ( "leaf", $this->arrayResult )) {
            $this->leaf = $arrayResult['leaf'];
        }
        if (array_key_exists ( "minPrice", $this->arrayResult )) {
            $this->minPrice = $arrayResult['minPrice'];
        }
        if (array_key_exists ( "pareCatePubId", $this->arrayResult )) {
            $this->pareCatePubId = $arrayResult['pareCatePubId'];
        }
        if (array_key_exists ( "prodLineId", $this->arrayResult )) {
            $this->prodLineId = $arrayResult['prodLineId'];
        }
        if (array_key_exists ( "pubName", $this->arrayResult )) {
            $this->pubName = $arrayResult['pubName'];
        }
        if (array_key_exists ( "pubNameCn", $this->arrayResult )) {
            $this->pubNameCn = $arrayResult['pubNameCn'];
        }
        if (array_key_exists ( "remark", $this->arrayResult )) {
            $this->remark = $arrayResult['remark'];
        }
        if (array_key_exists ( "stockPeriod", $this->arrayResult )) {
            $this->stockPeriod = $arrayResult['stockPeriod'];
        }
        if (array_key_exists ( "stockWarnRatio", $this->arrayResult )) {
            $this->stockWarnRatio = $arrayResult['stockWarnRatio'];
        }
        if (array_key_exists ( "updateBy", $this->arrayResult )) {
            $this->updateBy = $arrayResult['updateBy'];
        }
        if (array_key_exists ( "updateTime", $this->arrayResult )) {
            $this->updateTime = $arrayResult['updateTime'];
        }
        if (array_key_exists ( "valid", $this->arrayResult )) {
            $this->valid = $arrayResult['valid'];
        }
    }
}