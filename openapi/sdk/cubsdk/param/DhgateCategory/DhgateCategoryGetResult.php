<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 9:26
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;

use ArrayObject;

class DhgateCategoryGetResult
{

    /*
     * categoryPubAttrgroupList 	CategoryPubAttrGroup[] 	必须 	兼容性属性
     */
    private $categoryPubAttrgroupList;

    public function GetCategoryPubAttrgroupList()
    {
        return $this->categoryPubAttrgroupList;
    }

    /*
     * categoryPubAttrList 	CategoryPubAttr[] 	必须 	发布类目属性
     */
    private $categoryPubAttrList;

    public function GetCategoryPubAttrList()
    {
        return $this->categoryPubAttrList;
    }

    /*
     * catePubId 	String 	必须 	发布类目id 	物理父级类目id + 自身id 每段为3位，共6位；示例值：014024
     */
    private $catePubId;

    public function GetCatePubId()
    {
        return $this->catePubId;
    }

    /*
     * excludeKeyWords 	String 	必须 	该类目不能包含的关键词 	不是所有类目有该值， 如没有则为null, 关键词之间用逗号隔开。示例值：jean,jeans,shorts
     */
    private $excludeKeyWords;

    public function GetExcludeKeyWords()
    {
        return $this->excludeKeyWords;
    }

    /*
     * inlucdeKeyWords 	String 	必须 	该类目必须包含的该关键词 	不是所有类目有该值， 如没有则为null, 关键词之间用逗号隔开。示例值：skirt,skirts
     */
    private $inlucdeKeyWords;

    public function GetInlucdeKeyWords()
    {
        return $this->inlucdeKeyWords;
    }

    /*
     * leaf 	String 	必须 	该类目是否为叶子类目 	1：是， 0：不是;示例值：1
     */
    private $leaf;

    public function GetLeaf()
    {
        return $this->leaf;
    }

    /*
     * pareCatePubId 	String 	必须 	该类目的父级发布类目 	物理父级类目;示例值：014
     */
    private $pareCatePubId;

    public function GetPareCatePubId()
    {
        return $this->pareCatePubId;
    }

    /*
     * pubName 	String 	必须 	英文名称 	示例值：Clothing Fabric
     */
    private $pubName;

    public function GetPubName()
    {
        return $this->pubName;
    }

    /*
     * pubNameCn 	String 	必须 	中文名称 	示例值：服装面料
     */
    private $pubNameCn;

    public function GetPubNameCn()
    {
        return $this->pubNameCn;
    }

    /*
     * remark 	String 	必须 	类目备注说明 	示例值：this cloth
     */
    private $remark;

    public function GetRemark()
    {
        return $this->remark;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;

        if (array_key_exists("catePubId", $this->stdResult)) {
            $this->catePubId = $this->stdResult->{"catePubId"};

        }
        if (array_key_exists("excludeKeyWords", $this->stdResult)) {
            $this->excludeKeyWords = $this->stdResult->{"excludeKeyWords"};

        }
        if (array_key_exists("inlucdeKeyWords", $this->stdResult)) {
            $this->inlucdeKeyWords = $this->stdResult->{"inlucdeKeyWords"};

        }
        if (array_key_exists("leaf", $this->stdResult)) {
            $this->leaf = $this->stdResult->{"leaf"};

        }
        if (array_key_exists("pareCatePubId", $this->stdResult)) {
            $this->pareCatePubId = $this->stdResult->{"pareCatePubId"};

        }
        if (array_key_exists("pubName", $this->stdResult)) {
            $this->pubName = $this->stdResult->{"pubName"};

        }
        if (array_key_exists("pubNameCn", $this->stdResult)) {
            $this->pubNameCn = $this->stdResult->{"pubNameCn"};

        }
        if (array_key_exists("remark", $this->stdResult)) {
            $this->remark = $this->stdResult->{"remark"};

        }
        if (array_key_exists("categoryPubAttrgroupList", $this->stdResult)) {
            $categoryPubAttrgroupListResult = $this->stdResult->{"categoryPubAttrgroupList"};
            $object = json_decode(json_encode($categoryPubAttrgroupListResult), true);
            $this->categoryPubAttrgroupList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateCategoryPubAttrGroupListInfo = new DhgateCategoryPubAttrGroupListInfo();
                $DhgateCategoryPubAttrGroupListInfo->setArrayResult($arrayobject);
                $this->categoryPubAttrgroupList[$i] = $DhgateCategoryPubAttrGroupListInfo;
            }
        }

        if (array_key_exists("categoryPubAttrList", $this->stdResult)) {
            $categoryPubAttrList = $this->stdResult->{"categoryPubAttrList"};
            $object = json_decode(json_encode($categoryPubAttrList), true);
            $this->categoryPubAttrList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateCategoryListGetResultInfo = new DhgateCategoryPubAttrListInfo();
                $DhgateCategoryListGetResultInfo->setArrayResult($arrayobject);
                $this->categoryPubAttrList[$i] = $DhgateCategoryListGetResultInfo;
            }
        }
    }

    private $arrayResult;

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("categoryPubAttrgroupList", $this->arrayResult)) {
            $categoryPubAttrgroupListResult = $arrayResult['categoryPubAttrgroupList'];
            $this->categoryPubAttrgroupList = new DhgateCategoryPubAttrGroupListInfo();
            $this->categoryPubAttrgroupList->setStdResult($categoryPubAttrgroupListResult);
        }
        if (array_key_exists("categoryPubAttrList", $this->arrayResult)) {
            $categoryPubAttrListResult = $arrayResult['categoryPubAttrList'];
            for ($i = 0; $i < count($categoryPubAttrListResult); $i++) {
                $this->categoryPubAttrList = new DhgateCategoryPubAttrListInfo();
                $this->categoryPubAttrList->setStdResult($categoryPubAttrListResult[$i]);
            }
        }
    }
}