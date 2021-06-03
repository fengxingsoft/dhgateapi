<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 18:37
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOnlineFreightEstimateResultInfo
{

/*
 * channelId 	String 	必须 	渠道Id 	渠道Id
 */
    private $channelId;
    public function GetChannelId(){
        return $this->channelId;
    }
/*
 * country 	String 	必须 	收货国家 	收货国家
 */
    private $country;
    public function GetCountry(){
        return $this->country;
    }
/*
 * freight 	BigDecimal 	必须 	报价 	报价
 */
    private $freight;
    public function GetFreight(){
        return $this->freight;
    }
/*
 * note 	String 	可选 	报价备注 	报价备注
 */
    private $note;
    public function GetNote(){
        return $this->note;
    }
/*
 * packageHeight 	BigDecimal 	可选 	包裹高度cm 	2位小数
 */
    private $packageHeight;
    public function GetPackageHeight(){
        return $this->packageHeight;
    }
/*
 * packageLength 	BigDecimal 	可选 	包裹长度cm 	2位小数
 */
    private $packageLength;
    public function GetPackageLength(){
        return $this->packageLength;
    }
/*
 * packageWeight 	BigDecimal 	必须 	包裹重量kg 	3位小数
 */
    private $packageWeight;
    public function GetPackageWeight(){
        return $this->packageWeight;
    }
/*
 * packageWidth 	BigDecimal 	可选 	包裹宽度cm 	2位小数
 */
    private $packageWidth;
    public function GetPackageWidth(){
        return $this->packageWidth;
    }
/*
 * weight 	BigDecimal 	必须 	计费重量 	计费重量
 */
    private $weight;
    public function GetWight(){
        return $this->weight;
    }


    private $stdResult;
    public function setStdResult($stdResult) {

        $this->stdResult = $stdResult;
        if (array_key_exists ( "channelId", $this->stdResult )) {
            $this->channelId = $this->stdResult->{"channelId"};
        }
        if (array_key_exists ( "country", $this->stdResult )) {
            $this->country = $this->stdResult->{"country"};
        }
        if (array_key_exists ( "freight", $this->stdResult )) {
            $this->freight = $this->stdResult->{"freight"};
        }
        if (array_key_exists ( "note", $this->stdResult )) {
            $this->note = $this->stdResult->{"note"};
        }
        if (array_key_exists ( "packageHeight", $this->stdResult )) {
            $this->packageHeight = $this->stdResult->{"packageHeight"};
        }
        if (array_key_exists ( "packageLength", $this->stdResult )) {
            $this->packageLength = $this->stdResult->{"packageLength"};
        }
        if (array_key_exists ( "packageWeight", $this->stdResult )) {
            $this->packageWeight = $this->stdResult->{"packageWeight"};
        }
        if (array_key_exists ( "packageWidth", $this->stdResult )) {
            $this->packageWidth = $this->stdResult->{"packageWidth"};
        }
         if (array_key_exists ( "weight", $this->stdResult )) {
             $this->weight = $this->stdResult->{"weight"};
         }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "channelId ", $this->arrayResult )) {
            $this->channelId  = $arrayResult['channelId '];
        }
        if (array_key_exists ( "country", $this->arrayResult )) {
            $this->country = $arrayResult['country'];
        }
        if (array_key_exists ( "freight", $this->arrayResult )) {
            $this->freight = $arrayResult['freight'];
        }
        if (array_key_exists ( "note", $this->arrayResult )) {
            $this->note = $arrayResult['note'];
        }
        if (array_key_exists ( "packageHeight", $this->arrayResult )) {
            $this->packageHeight = $arrayResult['packageHeight'];
        }
        if (array_key_exists ( "packageLength", $this->arrayResult )) {
            $this->packageLength = $arrayResult['packageLength'];
        }
        if (array_key_exists ( "packageWeight", $this->arrayResult )) {
            $this->packageWeight = $arrayResult['packageWeight'];
        }
        if (array_key_exists ( "packageWidth", $this->arrayResult )) {
            $this->packageWidth = $arrayResult['packageWidth'];
        }
        if (array_key_exists ( "weight", $this->arrayResult )) {
            $this->weight = $arrayResult['weight'];
        }

    }
}
