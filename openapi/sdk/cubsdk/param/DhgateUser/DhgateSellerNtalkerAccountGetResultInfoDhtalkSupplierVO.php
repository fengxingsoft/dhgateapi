<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateUser;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVO{

/*
 * catePubId 	String 	必须 	经营类目ID 	经营类目ID
 */
    private $catePubId;
    public function GetCatePubId(){
        return $this->catePubId;
    }
/*
 * domainName 	String 	必须 	卖家店铺昵称 	卖家店铺昵称
 */
    private $domainName;
    public function GetDomainName(){
        return $this->domainName;
    }
/*
 * level 	String 	必须 	级别 	级别
 */
    private $level;
    public function GetLevel(){
        return $this->level;
    }
/*
 * nickname 	String 	必须 	卖家昵称 	卖家昵称
 */
    private $nickname;
    public function GetNickname(){
        return $this->nickname;
    }
/*
 * sellerid 	String 	必须 	卖家ID 	卖家ID
 */
    private $sellerid;
    public function GetSellerid(){
        return $this->sellerid;
    }
/*
 * settinggid 	String 	必须 	卖家客服组id 	卖家客服组id
 */
    private $settinggid;
    public function GetSettinggid(){
        return $this->settinggid;
    }
/*
 * supplierid 	String 	必须 	卖家supplierid 	卖家supplierid
 */
    private $supplierid;
    public function GetSupplierid(){
        return $this->supplierid;
    }
/*
 * supplier_sub 	DhtalkSupplierSubVO[] 	必须 	卖家子账号列表 	卖家子账号列表
 */
    private $supplier_sub;
    public function GetSupplier_sub(){
        return $this->supplier_sub;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "catePubId", $this->stdResult )) {
            $this->catePubId = $this->stdResult->{"catePubId"};
        }
        if (array_key_exists ( "domainName", $this->stdResult )) {
            $this->domainName = $this->stdResult->{"domainName"};
        }
        if (array_key_exists ( "level", $this->stdResult )) {
            $this->level = $this->stdResult->{"level"};
        }
        if (array_key_exists ( "nickname", $this->stdResult )) {
            $this->nickname = $this->stdResult->{"nickname"};
        }
        if (array_key_exists ( "sellerid", $this->stdResult )) {
            $this->sellerid = $this->stdResult->{"sellerid"};
        }
        if (array_key_exists ( "settinggid", $this->stdResult )) {
            $this->settinggid = $this->stdResult->{"settinggid"};
        }
        if (array_key_exists ( "supplierid", $this->stdResult )) {
            $this->supplierid = $this->stdResult->{"supplierid"};
        }
        if (array_key_exists ( "supplier_sub", $this->stdResult )) {
            $this->supplier_sub = $this->stdResult->{"supplier_sub"};
        }
        if (array_key_exists ( "supplier_sub", $this->stdResult )) {
            $supplier_subResult=$this->stdResult->{"supplier_sub"};
            $object = json_decode ( json_encode ( $supplier_subResult ), true );
            $this->supplier_sub = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVODhtalkSupplierSubVO=new DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVODhtalkSupplierSubVO();
                $DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVODhtalkSupplierSubVO->setArrayResult($arrayobject );
                $this->supplier_sub[$i] = $DhgateSellerNtalkerAccountGetResultInfoDhtalkSupplierVODhtalkSupplierSubVO;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "catePubId", $this->arrayResult )) {
            $this->catePubId = $arrayResult['catePubId'];
        }
        if (array_key_exists ( "domainName", $this->arrayResult )) {
            $this->domainName = $arrayResult['domainName'];
        }
        if (array_key_exists ( "level", $this->arrayResult )) {
            $this->level = $arrayResult['level'];
        }
        if (array_key_exists ( "nickname", $this->arrayResult )) {
            $this->nickname = $arrayResult['nickname'];
        }
        if (array_key_exists ( "sellerid", $this->arrayResult )) {
            $this->sellerid = $arrayResult['sellerid'];
        }
        if (array_key_exists ( "settinggid", $this->arrayResult )) {
            $this->settinggid = $arrayResult['settinggid'];
        }
        if (array_key_exists ( "supplierid", $this->arrayResult )) {
            $this->supplierid = $arrayResult['supplierid'];
        }
        if (array_key_exists ( "supplier_sub", $this->arrayResult )) {
            $this->supplier_sub = $arrayResult['supplier_sub'];
        }
    }
}