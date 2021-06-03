<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOrder;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateOrderGetResultInfoOrderContact
{
/*
 * abn 	String 	必须 	识别号码 	示例值：22114665084
 */
    private $abn;
    public function GetAbn(){
        return $this->abn ;
    }
/*
 * addressLine1 	String 	必须 	地址1(发货信息) 	示例值：yousheng building, wudaokou street, haidian district,表示发货地址是海淀区五道口优盛大厦
 */
    private $addressLine1;
    public function GetAddressLine1(){
        return $this->addressLine1 ;
    }
/*
 * addressLine2 	String 	必须 	地址2(发货信息) 	示例值：yousheng building, wudaokou street, haidian district,表示发货地址是海淀区五道口优盛大厦
 */
    private $addressLine2;
    public function GetAddressLine2(){
        return $this->addressLine2 ;
    }
/*
 * buyerId 	String 	必须 	买家ID 	示例值：ff808081416839d5014168e43ab30033
 */
    private $buyerId;
    public function GetBuyerId(){
        return $this->buyerId ;
    }
/*
 * buyerNickName 	String 	必须 	买家别名 	买家昵称；示例值：zhangsan
 */
    private $buyerNickName;
    public function GetBuyerNickName(){
        return $this->buyerNickName ;
    }
/*
 * city 	String 	必须 	城市(发货信息) 	示例值：beijing,表示发货城市是北京
 */
    private $city;
    public function GetCity(){
        return $this->city ;
    }
/*
 * country 	String 	必须 	发货国家 	示例值：china,表示发货国家是中国
 */
    private $country;
    public function GetCountry(){
        return $this->country ;
    }
/*
 * email 	String 	必须 	收货人的邮件 	收货人的邮件
 */
    private $email;
    public function GetEmail(){
        return $this->email ;
    }
/*
 * firstName 	String 	必须 	收货人姓名 	示例值：michael
 */
    private $firstName;
    public function GetFirstName(){
        return $this->firstName ;
    }
/*
 * lastName 	String 	必须 	收货人姓名 	示例值：jackson
 */
    private $lastName;
    public function GetLastName(){
        return $this->lastName ;
    }
/*
 * postalcode 	String 	必须 	邮编(发货信息) 	示例值：100190
 */
    private $postalcode;
    public function GetPostalcode(){
        return $this->postalcode ;
    }
/*
 * state 	String 	必须 	省(发货信息) 	示例值：beijing,表示发货省份是北京
 */
    private $state;
    public function GetState(){
        return $this->state ;
    }
/*
 * telephone 	String 	必须 	电话(发货信息) 	示例值：1380000000
 */
    private $telephone;
    public function GetTelephone(){
        return $this->telephone ;
    }
/*
 * vatNumber 	String 	必须 	税号 	示例值：01041247842
 */
    private $vatNumber;
    public function GetVatNumber(){
        return $this->vatNumber ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "abn", $this->stdResult )) {
            $this->abn = $this->stdResult->{"abn"};
        }
        if (array_key_exists ( "addressLine1", $this->stdResult )) {
            $this->addressLine1 = $this->stdResult->{"addressLine1"};
        }
        if (array_key_exists ( "addressLine2", $this->stdResult )) {
            $this->addressLine2 = $this->stdResult->{"addressLine2"};
        }
        if (array_key_exists ( "buyerId", $this->stdResult )) {
            $this->buyerId = $this->stdResult->{"buyerId"};
        }
        if (array_key_exists ( "buyerNickName", $this->stdResult )) {
            $this->buyerNickName = $this->stdResult->{"buyerNickName"};
        }
        if (array_key_exists ( "city", $this->stdResult )) {
            $this->city = $this->stdResult->{"city"};
        }
        if (array_key_exists ( "country", $this->stdResult )) {
            $this->country = $this->stdResult->{"country"};
        }
        if (array_key_exists ( "email", $this->stdResult )) {
            $this->email = $this->stdResult->{"email"};
        }
        if (array_key_exists ( "firstName", $this->stdResult )) {
            $this->firstName = $this->stdResult->{"firstName"};
        }
        if (array_key_exists ( "lastName", $this->stdResult )) {
            $this->lastName = $this->stdResult->{"lastName"};
        }
        if (array_key_exists ( "postalcode", $this->stdResult )) {
            $this->postalcode = $this->stdResult->{"postalcode"};
        }
        if (array_key_exists ( "state", $this->stdResult )) {
            $this->state = $this->stdResult->{"state"};
        }
        if (array_key_exists ( "telephone", $this->stdResult )) {
            $this->telephone = $this->stdResult->{"telephone"};
        }
        if (array_key_exists ( "vatNumber", $this->stdResult )) {
            $this->vatNumber = $this->stdResult->{"vatNumber"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "abn", $this->arrayResult )) {
            $this->abn = $arrayResult['abn'];
        }
        if (array_key_exists ( "addressLine1", $this->arrayResult )) {
            $this->addressLine1 = $arrayResult['addressLine1'];
        }
        if (array_key_exists ( "addressLine2", $this->arrayResult )) {
            $this->addressLine2 = $arrayResult['addressLine2'];
        }
        if (array_key_exists ( "buyerId", $this->arrayResult )) {
            $this->buyerId = $arrayResult['buyerId'];
        }
        if (array_key_exists ( "buyerNickName", $this->arrayResult )) {
            $this->buyerNickName = $arrayResult['buyerNickName'];
        }
        if (array_key_exists ( "city", $this->arrayResult )) {
            $this->city = $arrayResult['city'];
        }
        if (array_key_exists ( "country", $this->arrayResult )) {
            $this->country = $arrayResult['country'];
        }
        if (array_key_exists ( "email", $this->arrayResult )) {
            $this->email = $arrayResult['email'];
        }
        if (array_key_exists ( "firstName", $this->arrayResult )) {
            $this->firstName = $arrayResult['firstName'];
        }
        if (array_key_exists ( "lastName", $this->arrayResult )) {
            $this->lastName = $arrayResult['lastName'];
        }
        if (array_key_exists ( "postalcode", $this->arrayResult )) {
            $this->postalcode = $arrayResult['postalcode'];
        }
        if (array_key_exists ( "state", $this->arrayResult )) {
            $this->state = $arrayResult['state'];
        }
        if (array_key_exists ( "telephone", $this->arrayResult )) {
            $this->telephone = $arrayResult['telephone'];
        }
        if (array_key_exists ( "vatNumber", $this->arrayResult )) {
            $this->vatNumber = $arrayResult['vatNumber'];
        }

    }
}