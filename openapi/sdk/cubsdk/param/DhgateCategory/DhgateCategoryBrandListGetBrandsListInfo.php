<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 10:49
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use  com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategoryBrandListGetBrandsListInfo{
/*
 * brandAlias 	String 	必须 	品牌别名 	示例值：沃格
 */
    private $brandAlias;
    public function GetBrandAlias(){
        return $this->brandAlias;
    }
/*
 * brandCountry 	String 	必须 	品牌所属国别 	不是所有品牌都存在该值， 如不存在值为null, 示例值：US。
 */
    private $brandCountry;
    public function GetBrandCountry(){
        return $this->brandCountry;
    }
/*
 * brandId 	Long 	必须 	品牌主键 	品牌的ID值；示例值：138706
 */
    private $brandId;
    public function GetBrandId(){
        return $this->brandId;
    }
/*
 * brandInfo 	String 	必须 	品牌相关简介 	示例值：Stationery articles and writing instruments.
 */
    private $brandInfo;
    public function GetBrandInfo(){
        return $this->brandInfo;
    }
/*
 * brandName 	String 	必须 	品牌英文名称 	示例值：WAAG
 */
    private $brandName;
    public function GetBrandName(){
        return $this->brandName;
    }
/*
 * brandNameCn 	String 	必须 	品牌中文名称 	示例值：沃格
 */
    private $brandNameCn;
    public function GetBrandNameCn(){
        return $this->brandNameCn;
    }
/*
 * imgMd5 	String 	必须 	品牌图片md5值 	示例值：765e01ad2451f34be3398d35f838f940
 */
    private $imgMd5;
    public function GetImgMd5(){
        return $this->imgMd5;
    }
/*
 * logo 	String 	必须 	品牌的小图 	示例值：brim_108804709_00.jpg
 */
    private $logo;
    public function GetLogo(){
        return $this->logo;
    }
/*
 * saleCountry 	String 	必须 	该品牌的销售国别 	不是所有品牌都存在该值， 如不存在值为null, 示例值：AE
 */
    private $saleCountry;
    public function GetSaleCountry(){
        return $this->saleCountry;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "brandAlias", $this->stdResult )) {
            $this->brandAlias = $this->stdResult->{"brandAlias"};
        }
        if (array_key_exists ( "brandCountry", $this->stdResult )) {
            $this->brandCountry = $this->stdResult->{"brandCountry"};
        }
        if (array_key_exists ( "brandId", $this->stdResult )) {
            $this->brandId = $this->stdResult->{"brandId"};
        }
        if (array_key_exists ( "brandInfo", $this->stdResult )) {
            $this->brandInfo = $this->stdResult->{"brandInfo"};
        }
        if (array_key_exists ( "brandName", $this->stdResult )) {
            $this->brandName = $this->stdResult->{"brandName"};
        }
        if (array_key_exists ( "brandNameCn", $this->stdResult )) {
            $this->brandNameCn = $this->stdResult->{"brandNameCn"};
        }
        if (array_key_exists ( "imgMd5", $this->stdResult )) {
            $this->imgMd5 = $this->stdResult->{"imgMd5"};
        }
        if (array_key_exists ( "logo", $this->stdResult )) {
            $this->logo = $this->stdResult->{"logo"};
        }
        if (array_key_exists ( "saleCountry", $this->stdResult )) {
            $this->saleCountry = $this->stdResult->{"saleCountry"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "brandAlias", $this->arrayResult )) {
            $this->brandAlias = $arrayResult['brandAlias'];
        }
        if (array_key_exists ( "brandCountry", $this->arrayResult )) {
            $this->brandCountry = $arrayResult['brandCountry'];
        }
        if (array_key_exists ( "brandId", $this->arrayResult )) {
            $this->brandId = $arrayResult['brandId'];
        }
        if (array_key_exists ( "brandInfo", $this->arrayResult )) {
            $this->brandInfo = $arrayResult['brandInfo'];
        }
        if (array_key_exists ( "brandName", $this->arrayResult )) {
            $this->brandName = $arrayResult['brandName'];
        }
        if (array_key_exists ( "brandNameCn", $this->arrayResult )) {
            $this->brandNameCn = $arrayResult['brandNameCn'];
        }
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "imgMd5", $this->arrayResult )) {
            $this->imgMd5 = $arrayResult['imgMd5'];
        }
        if (array_key_exists ( "logo", $this->arrayResult )) {
            $this->logo = $arrayResult['logo'];
        }
        if (array_key_exists ( "saleCountry", $this->arrayResult )) {
            $this->saleCountry = $arrayResult['saleCountry'];
        }
    }
}