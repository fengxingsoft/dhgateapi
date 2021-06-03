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
class DhgateCategoryAttrvalListGetResult{

/*
 * attrId 	Long 	必须 	属性Id 	选择发布类目基本信息的属性Id值, 示例值：844400。特殊的属性Id有：品牌属性的属性Id:99。
 */
    private $attrId;
    public function GetAttrId(){
        return $this->attrId;
    }
/*
 * buyAttr 	String 	必须 	是否购买属性 	是否购买属性
 */
    private $buyAttr;
    public function GetBuyAttr(){
        return $this->buyAttr;
    }
/*
 * categoryPubAttrValList 	CategoryPubAttrVal[] 	必须 	发布类目属性值 	发布类目属性值
 */
    private $categoryPubAttrValList;
    public function GetCategoryPubAttrValList(){
        return $this->categoryPubAttrValList;
    }
/*
 * catePubAttrId 	Long 	必须 	主键 	发布类目属性编号, 示例值：43757
 */
    private $catePubAttrId;
    public function GetCatePubAttrId(){
        return $this->catePubAttrId;
    }
/*
 * catePubId 	String 	必须 	叶子发布类目id 	示例值：143103105001
 */
    private $catePubId;
    public function GetCatePubId(){
        return $this->catePubId;
    }
/*
 * childAttrId 	Long 	必须 	子属性id 	子属性id
 */
    private $childAttrId;
    public function GetChildAttrId(){
        return $this->childAttrId;
    }
/*
 * defined 	String 	必须 	属性的属性值是否可以自定义修改 	1：是 0：否 ，只对多选、单选有效;示例值：1
 */
    private $defined;
    public function GetDefined(){
        return $this->defined;
    }
/*
 * isBrand 	String 	必须 	是否是品牌属性 	1：是，0：不是;示例值：1
 */
    private $isBrand;
    public function GetIsBrand(){
        return $this->isBrand;
    }
/*
 * isother 	String 	必须 	是否有other属性值 	是否有other属性值
 */
    private $isother;
    public function GetIsother(){
        return $this->isother;
    }
/*
 * lineAttrName 	String 	必须 	属性英文名称 	示例值：color
 */
    private $lineAttrName;
    public function GetLineAttrName(){
        return $this->lineAttrName;
    }
/*
 * lineAttrNameCn 	String 	必须 	属性中文名称 	示例值：颜色
 */
    private $lineAttrNameCn;
    public function GetLineAttrNameCn(){
        return $this->lineAttrNameCn;
    }
/*
 * located 	String 	必须 	是否定位属性 	1：定位属性，0：非定位属性，定位属性不可能是销售或购买属性;为平台定义好的属性值卖家不可更改;示例值：1
 */
    private $located;
    public function GetLocated(){
        return $this->located;
    }
/*
 * required 	String 	必须 	是否为必填项 	设置该属性设置是否为必填项；1：必填项， 0：非必填项;示例值：1
 */
    private $required;
    public function GetRequired(){
        return $this->required;
    }
/*
 * saleAttr 	String 	必须 	是否销售属性 	1：是销售属性，0：非销售属性，通过该属性定义价格;示例值：1
 */
    private $saleAttr;
    public function GetSaleAttr(){
        return $this->saleAttr;
    }
    /*
     * sortval 	Long 	必须 	排序值 	排序值
     */
    private $sortval;
    public function GetSortval(){
        return $this->sortval;
    }
/*
 * style 	String 	必须 	类目选择样式 	类目相关参数的选择样式 ；1：文本 2：图片 3：图文；示例值：1
 */
    private $style;
    public function GetStyle(){
        return $this->style;
    }
/*
 * type 	String 	必须 	类目选择形式 	类目相关参数选择形式 ；1：多选框 2：下拉框 4：字符型输入框 5：数值型输入框;示例值：1
 */
    private $type;
    public function GetType(){
        return $this->type;
    }
/*
 * updateBy 	String 	必须 	操作人 	操作人
 */
    private $updateBy;
    public function GetUpdateBy(){
        return $this->updateBy;
    }
/*
 * updateTime 	Date 	必须 	操作时间 	操作时间
 */
    private $updateTime;
    public function GetUpdateTime(){
        return $this->updateTime;
    }
/*
 * valid 	String 	必须 	是否有效（1：有效，0：无效） 	是否有效（1：有效，0：无效）
 */
    private $valid;
    public function GetValid(){
        return $this->valid;
    }
    /*
     * valueList 	CategoryPublishAttributeValueVO[] 	必须 	发布类目属性值 	发布类目属性值
     */
    private $valueList;
    public function GetValueList(){
        return $this->valueList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "attrId", $this->stdResult )) {
            $this->attrId = $this->stdResult->{"attrId"};
        }
        if (array_key_exists ( "buyAttr", $this->stdResult )) {
            $this->buyAttr = $this->stdResult->{"buyAttr"};
        }
        if (array_key_exists ( "categoryPubAttrValList", $this->stdResult )) {
            $this->categoryPubAttrValList = $this->stdResult->{"categoryPubAttrValList"};

        }
        if (array_key_exists ( "categoryPubAttrValList", $this->stdResult )) {
            $categoryPubAttrValListResult=$this->stdResult->{"categoryPubAttrValList"};
            $object = json_decode ( json_encode ( $categoryPubAttrValListResult ), true );
            $this->categoryPubAttrValList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategoryAttrvalListGetResultCategoryPubAttrVal=new DhgateCategoryAttrvalListGetResultCategoryPubAttrVal();
                $DhgateCategoryAttrvalListGetResultCategoryPubAttrVal->setArrayResult($arrayobject );
                $this->categoryPubAttrValList[$i] = $DhgateCategoryAttrvalListGetResultCategoryPubAttrVal;
            }
        }
        if (array_key_exists ( "catePubAttrId", $this->stdResult )) {
            $this->catePubAttrId = $this->stdResult->{"catePubAttrId"};
        }
        if (array_key_exists ( "catePubId", $this->stdResult )) {
            $this->catePubId = $this->stdResult->{"catePubId"};
        }
        if (array_key_exists ( "childAttrId", $this->stdResult )) {
            $this->childAttrId = $this->stdResult->{"childAttrId"};
        }
        if (array_key_exists ( "defined", $this->stdResult )) {
            $this->defined = $this->stdResult->{"defined"};
        }
        if (array_key_exists ( "isBrand", $this->stdResult )) {
            $this->isBrand = $this->stdResult->{"isBrand"};
        }
        if (array_key_exists ( "isother", $this->stdResult )) {
            $this->isother = $this->stdResult->{"isother"};
        }
        if (array_key_exists ( "lineAttrName", $this->stdResult )) {
            $this->lineAttrName = $this->stdResult->{"lineAttrName"};
        }
        if (array_key_exists ( "lineAttrNameCn", $this->stdResult )) {
            $this->lineAttrNameCn = $this->stdResult->{"lineAttrNameCn"};
        }
        if (array_key_exists ( "located", $this->stdResult )) {
            $this->located = $this->stdResult->{"located"};
        }
        if (array_key_exists ( "required", $this->stdResult )) {
            $this->required = $this->stdResult->{"required"};
        }
        if (array_key_exists ( "saleAttr", $this->stdResult )) {
            $this->saleAttr = $this->stdResult->{"saleAttr"};
        }
        if (array_key_exists ( "sortval", $this->stdResult )) {
            $this->sortval = $this->stdResult->{"sortval"};
        }
        if (array_key_exists ( "style", $this->stdResult )) {
            $this->style = $this->stdResult->{"style"};
        }
        if (array_key_exists ( "type", $this->stdResult )) {
            $this->type = $this->stdResult->{"type"};
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
        if (array_key_exists ( "valueList", $this->stdResult )) {
            $valueListResult=$this->stdResult->{"valueList"};
            $object = json_decode ( json_encode ( $valueListResult ), true );
            $this->valueList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategoryAttrvalListGetResultCategoryPubAttrVal=new DhgateCategoryAttrvalListGetResultCategoryPubAttrVal();
                $DhgateCategoryAttrvalListGetResultCategoryPubAttrVal->setArrayResult($arrayobject );
                $this->valueList[$i] = $DhgateCategoryAttrvalListGetResultCategoryPubAttrVal;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "attrId", $this->arrayResult )) {
            $this->attrId = $arrayResult['attrId'];
        }
        if (array_key_exists ( "buyAttr", $this->arrayResult )) {
            $this->buyAttr = $arrayResult['buyAttr'];
        }
        if (array_key_exists ( "categoryPubAttrValList", $this->arrayResult )) {
            $this->categoryPubAttrValList = $arrayResult['categoryPubAttrValList'];
        }

        if (array_key_exists ( "categoryPubAttrValList", $this->arrayResult )) {
            $categoryPubAttrValListResult=$arrayResult['categoryPubAttrValList'];
            $this->categoryPubAttrValList = new DhgateCategoryAttrvalListBrandGetCategoryPubAttrInfo();
            $this->categoryPubAttrValList->setStdResult ( $categoryPubAttrValListResult);
        }

        if (array_key_exists ( "catePubAttrId", $this->arrayResult )) {
            $this->catePubAttrId = $arrayResult['catePubAttrId'];
        }
        if (array_key_exists ( "catePubId", $this->arrayResult )) {
            $this->catePubId = $arrayResult['catePubId'];
        }
        if (array_key_exists ( "childAttrId", $this->arrayResult )) {
            $this->childAttrId = $arrayResult['childAttrId'];
        }
        if (array_key_exists ( "defined", $this->arrayResult )) {
            $this->defined = $arrayResult['defined'];
        }
        if (array_key_exists ( "isBrand", $this->arrayResult )) {
            $this->isBrand = $arrayResult['isBrand'];
        }
        if (array_key_exists ( "isother", $this->arrayResult )) {
            $this->isother = $arrayResult['isother'];
        }
        if (array_key_exists ( "lineAttrName", $this->arrayResult )) {
            $this->lineAttrName = $arrayResult['lineAttrName'];
        }
        if (array_key_exists ( "lineAttrNameCn", $this->arrayResult )) {
            $this->lineAttrNameCn = $arrayResult['lineAttrNameCn'];
        }
        if (array_key_exists ( "located", $this->arrayResult )) {
            $this->located = $arrayResult['located'];
        }
        if (array_key_exists ( "required", $this->arrayResult )) {
            $this->required = $arrayResult['required'];
        }
        if (array_key_exists ( "saleAttr", $this->arrayResult )) {
            $this->saleAttr = $arrayResult['saleAttr'];
        }
        if (array_key_exists ( "sortval", $this->arrayResult )) {
            $this->sortval = $arrayResult['sortval'];
        }
        if (array_key_exists ( "style", $this->arrayResult )) {
            $this->style = $arrayResult['style'];
        }
        if (array_key_exists ( "type", $this->arrayResult )) {
            $this->type = $arrayResult['type'];
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
        if (array_key_exists ( "valueList", $this->arrayResult )) {
            $valueListResult=$arrayResult['valueList'];
            $this->valueList = new DhgateCategoryAttrvalListBrandGetCategoryPubAttrInfo();
            $this->valueList->setStdResult ( $valueListResult);
        }

    }
}