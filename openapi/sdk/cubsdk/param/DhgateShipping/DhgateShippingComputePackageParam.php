<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 21:45
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateShippingComputePackageParam extends SDKDomain
{
/*
 * country 	String 	必须 	国家编号 	国家的二字码；示例值：US，表示美国
 */
    public function setCountry($country){
        $this->sdkStdResult["country"] =$country;
    }
/*
 * grossWeight 	double 	必须 	毛重 	卖家上传产品时输入的包装后重量，单位千克；示例值：100.00
 */
    public function setGrossWeight($grossWeight){
        $this->sdkStdResult["grossWeight"] =$grossWeight;
    }
/*
 * height 	double 	必须 	高度 	单位厘米cm；示例值：10.00
 */
    public function setHeight($height){
        $this->sdkStdResult["height"] =$height;
    }
/*
 * length 	double 	必须 	长度 	单位厘米cm；示例值：10.00
 */
    public function setLength($length){
        $this->sdkStdResult["length"] =$length;
    }
/*
 * quantity 	int 	必须 	产品数量 	示例值：15
 */
    public function setQuantity($quantity){
        $this->sdkStdResult["quantity"] =$quantity;
    }
/*
 * shippingTempId 	String 	必须 	运费模板ID 	示例值：ff8080811c50e872011c692ea803702b
 */

    public function setShippingTempId($shippingTempId){
        $this->sdkStdResult["shippingTempId"] =$shippingTempId;
    }
/*
 * supplierId 	String 	必须 	卖家ID 	忽略该字段，不用传
 */
    public function setSupplierId($supplierId){
        $this->sdkStdResult["supplierId"] =$supplierId;
    }
/*
 * volume 	double 	必须 	产品体积 	长*宽*高得到的结果，单位立方厘米；示例值：1000.00
 */
    public function setVolume($volume){
        $this->sdkStdResult["volume"] =$volume;
    }
/*
 * weigthRangeParam 	WeigthRangeParam[] 	可选 	自定义重量范围 	示例值：数量达到五件以后，每增加1件,重量加2千克
 */
    public function setWeigthRangeParam(DhgateWeigthRangeParam $weigthRangeParam){
        $this->sdkStdResult["weigthRangeParam"] =$weigthRangeParam;
    }
/*
 * width 	double 	必须 	宽度 	单位厘米cm；示例值：10.00
 */
    public function setWidth($width){
        $this->sdkStdResult["width"] =$width ;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}