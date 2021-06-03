<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 10:40
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategoryBrandListGetBrandAuthListInfo{

/*
 * brandDescContent
 * String 	必须
 * 品牌介绍 	品牌介绍
 */
    private $brandDescContent;
    public function GetBrandDescContent(){
        return $this->brandDescContent;
    }
/*
 * brandId
 * String 	必须
 * 品牌主键 	品牌的ID值；40位字母加数字
 */
    private $brandId;
    public function GetBrandId(){
        return $this->brandId;
    }
/*
 * brandName
 * String 	必须
 * 品牌英文名称 	示例值：WAAG
 */
    private $brandName;
    public function GetBrandName(){
        return $this->brandName;
    }
/*
 * brandNameCn
 * String 	必须
 * 品牌中文名称 	示例值：waag
 */
    private $brandNameCn;
    public function GetBrandNameCn(){
        return $this->brandNameCn;
    }
/*
 * brandNameLc
 * String 	必须
 * 品牌英文小写 	示例值：waag
 */
    private $brandNameLc;
    public function GetBrandNameLc(){
        return $this->brandNameLc;
    }
/*
 * brandQual
 * String 	必须
 * 品牌资质 	当入参类目ID不为空时。该字段才有意义 0:没资质。对于需要资质的品牌，卖家只有提交资质审核通过后才能使用，如果卖家没有资质则不能使用.
 */
    private $brandQual;
    public function GetBrandQual(){
        return $this->brandQual;
    }
/*
 * foundCountry
 * String 	必须
 * 品牌创建国家 	品牌创建国家
 */
    private $foundCountry;
    public function GetFoundCountry(){
        return $this->foundCountry;
    }
/*
 * foundDate
 * String 	必须
 * 品牌创建时间 	品牌创建时间
 */
    private $foundDate;
    public function GetFoundDate(){
        return $this->foundDate;
    }
/*
 * logoImage
 * String 	必须
 * 品牌logo路径 	示例值：waag
 */
    private $logoImage;
    public function GetLogoImage(){
        return $this->logoImage;
    }
/*
 * logoImageMd5
 * String 	必须
 * 品牌logo的二进制MD5 	示例值：waag
 */
    private $logoImageMd5;
    public function GetLogoImageMd5(){
        return $this->logoImageMd5;
    }
/*
 * mainIndustry
 * String 	必须
 * 品牌主营行业 	品牌主营行业
 */
    private $mainIndustry;
    public function GetMainIndustry(){
        return $this->mainIndustry;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "brandDescContent", $this->stdResult )) {
            $this->brandDescContent = $this->stdResult->{"brandDescContent"};
        }
        if (array_key_exists ( "brandId", $this->stdResult )) {
            $this->brandId = $this->stdResult->{"brandId"};
        }
        if (array_key_exists ( "brandName", $this->stdResult )) {
            $this->brandName = $this->stdResult->{"brandName"};
        }
        if (array_key_exists ( "brandNameCn", $this->stdResult )) {
            $this->brandNameCn = $this->stdResult->{"brandNameCn"};
        }
        if (array_key_exists ( "brandNameLc", $this->stdResult )) {
            $this->brandNameLc = $this->stdResult->{"brandNameLc"};
        }
        if (array_key_exists ( "brandQual", $this->stdResult )) {
            $this->brandQual = $this->stdResult->{"brandQual"};
        }
        if (array_key_exists ( "foundCountry", $this->stdResult )) {
            $this->foundCountry = $this->stdResult->{"foundCountry"};
        }
        if (array_key_exists ( "foundDate", $this->stdResult )) {
            $this->foundDate = $this->stdResult->{"foundDate"};
        }
        if (array_key_exists ( "logoImage", $this->stdResult )) {
            $this->logoImage = $this->stdResult->{"logoImage"};
        }
        if (array_key_exists ( "logoImageMd5", $this->stdResult )) {
            $this->logoImageMd5 = $this->stdResult->{"logoImageMd5"};
        }
        if (array_key_exists ( "mainIndustry", $this->stdResult )) {
            $this->mainIndustry = $this->stdResult->{"mainIndustry"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "brandDescContent", $this->arrayResult )) {
            $this->brandDescContent = $arrayResult['brandDescContent'];
        }
        if (array_key_exists ( "brandId", $this->arrayResult )) {
            $this->brandId = $arrayResult['brandId'];
        }
        if (array_key_exists ( "brandName", $this->arrayResult )) {
            $this->brandName = $arrayResult['brandName'];
        }
        if (array_key_exists ( "brandNameCn", $this->arrayResult )) {
            $this->brandNameCn = $arrayResult['brandNameCn'];
        }
        if (array_key_exists ( "brandNameLc", $this->arrayResult )) {
            $this->brandNameLc = $arrayResult['brandNameLc'];
        }
        if (array_key_exists ( "brandQual", $this->arrayResult )) {
            $this->brandQual = $arrayResult['brandQual'];
        }
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "foundCountry", $this->arrayResult )) {
            $this->foundCountry = $arrayResult['foundCountry'];
        }
        if (array_key_exists ( "foundDate", $this->arrayResult )) {
            $this->foundDate = $arrayResult['foundDate'];
        }
        if (array_key_exists ( "logoImage", $this->arrayResult )) {
            $this->logoImage = $arrayResult['logoImage'];
        }
        if (array_key_exists ( "logoImageMd5", $this->arrayResult )) {
            $this->logoImageMd5 = $arrayResult['logoImageMd5'];
        }
        if (array_key_exists ( "mainIndustry", $this->arrayResult )) {
            $this->mainIndustry = $arrayResult['mainIndustry'];
        }
    }
}



