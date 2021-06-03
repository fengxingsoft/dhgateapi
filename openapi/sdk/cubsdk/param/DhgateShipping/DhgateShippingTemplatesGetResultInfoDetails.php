<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 20:53
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateShippingTemplatesGetResultInfoDetails
{
/*
 * countrycodelst 	String 	必须 	当前运输方式支持的国家Id列表,以英文半角逗号分隔 	当前运输方式支持的国家Id列表,以英文半角逗号分隔
 */
    private $countrycodelst;
    public function GetCountrycodelst(){
        return $this->countrycodelst ;
    }
/*
 * countryidlist 	String 	必须 	运输的国家列表 	运输的国家列表
 */
    private $countryidlist;
    public function GetCountryidlist(){
        return $this->countryidlist ;
    }
/*
 * countrynamelst 	String 	必须 	当前运输方式支持的国家Name列表,以英文半角逗号分隔 	当前运输方式支持的国家Name列表,以英文半角逗号分隔
 */
    private $countrynamelst;
    public function GetCountrynamelst(){
        return $this->countrynamelst ;
    }
/*
 * displaypricestep 	Double 	必须 	显示价格阶梯 	显示价格阶梯
 */
    private $displaypricestep;
    public function GetDisplaypricestep(){
        return $this->displaypricestep ;
    }
/*
 * displaystartprice 	Double 	必须 	显示起始价格 	显示起始价格
 */
    private $displaystartprice;
    public function GetDisplaystartprice(){
        return $this->displaystartprice ;
    }
/*
 * endquantity 	Long 	必须 	截至数量 	截至数量
 */
    private $endquantity;
    public function GetEndquantity(){
        return $this->endquantity ;
    }
/*
 * insertdate 	Date 	必须 	创建时间 	创建时间
 */
    private $insertdate;
    public function GetInsertdate(){
        return $this->insertdate ;
    }
/*
 * mycountrycodelst 	String 	必须 	当前运输方式用户选择的国家Id列表,以英文半角逗号分隔 	当前运输方式用户选择的国家Id列表,以英文半角逗号分隔
 */
    private $mycountrycodelst;
    public function GetMycountrycodelst(){
        return $this->mycountrycodelst ;
    }
/*
 * mycountrynamelst 	String 	必须 	当前运输方式用户选择的国家Name列表,以英文半角逗号分隔 	当前运输方式用户选择的国家Name列表,以英文半角逗号分隔
 */
    private $mycountrynamelst;
    public function GetMycountrynamelst(){
        return $this->mycountrynamelst ;
    }
/*
 * mysupportglobal 	String 	必须 	当前运输方式用户选择的世界各地 	当前运输方式用户选择的世界各地
 */
    private $mysupportglobal;
    public function GetMysupportglobal(){
        return $this->mysupportglobal ;
    }
/*
 * quantitystep 	Long 	必须 	数量阶梯 	数量阶梯
 */
    private $quantitystep;
    public function GetQuantitystep(){
        return $this->quantitystep ;
    }
/*
 * sailingdate 	Long 	必须 	船期 	船期
 */
    private $sailingdate;
    public function GetSailingdate(){
        return $this->sailingdate ;
    }
/*
 * shipoptionid 	String 	必须 	主键ID 	主键ID
 */
    private $shipoptionid;
    public function GetShipoptionid(){
        return $this->shipoptionid ;
    }
/*
 * shippingmodelid 	String 	必须 	运费模版ID 	运费模版ID
 */
    private $shippingmodelid;
    public function GetShippingmodelid(){
        return $this->shippingmodelid ;
    }
/*
 * shippingmodelitemid 	String 	必须 	运费模版类型ID 	运费模版类型ID
 */
    private $shippingmodelitemid;
    public function GetShippingmodelitemid(){
        return $this->shippingmodelitemid ;
    }
/*
 * shippingtypeid 	String 	必须 	运输方式 	运输方式
 */
    private $shippingtypeid;
    public function GetShippingtypeid(){
        return $this->shippingtypeid ;
    }
/*
 * startquantity 	Long 	必须 	起始数量 	起始数量
 */
    private $startquantity;
    public function GetStartquantity(){
        return $this->startquantity ;
    }
/*
 * supplierid 	String 	必须 	卖家ID 	卖家ID
 */
    private $supplierid;
    public function GetSupplierid(){
        return $this->supplierid ;
    }
/*
 * supportglobal 	String 	必须 	是否支持到世界各地 	是否支持到世界各地
 */
    private $supportglobal;
    public function GetSupportglobal(){
        return $this->supportglobal ;
    }
/*
 * warehouseid 	String 	必须 	仓库ID(只有选择了敦煌网仓库发货才有该字段) 	仓库ID(只有选择了敦煌网仓库发货才有该字段)
 */
    private $warehouseid;
    public function GetWarehouseid(){
        return $this->warehouseid ;
    }

/*
 * warehouseName 	String 	必须 	仓库名称(只有选择了敦煌网仓库发货才有该字段) 	仓库名称(只有选择了敦煌网仓库发货才有该字段)
 */
    private $warehouseName;
    public function GetWarehouseName(){
        return $this->warehouseName ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "countrycodelst", $this->stdResult )) {
            $this->countrycodelst = $this->stdResult->{"countrycodelst"};
        }
        if (array_key_exists ( "countryidlist", $this->stdResult )) {
            $this->countryidlist = $this->stdResult->{"countryidlist"};
        }
        if (array_key_exists ( "countrynamelst", $this->stdResult )) {
            $this->countrynamelst = $this->stdResult->{"countrynamelst"};
        }
        if (array_key_exists ( "displaypricestep", $this->stdResult )) {
            $this->displaypricestep = $this->stdResult->{"displaypricestep"};
        }
        if (array_key_exists ( "displaystartprice", $this->stdResult )) {
            $this->displaystartprice = $this->stdResult->{"displaystartprice"};
        }
        if (array_key_exists ( "endquantity", $this->stdResult )) {
            $this->endquantity = $this->stdResult->{"endquantity"};
        }
        if (array_key_exists ( "insertdate", $this->stdResult )) {
            $this->insertdate = $this->stdResult->{"insertdate"};
        }
        if (array_key_exists ( "mycountrycodelst", $this->stdResult )) {
            $this->mycountrycodelst = $this->stdResult->{"mycountrycodelst"};
        }
        if (array_key_exists ( "mycountrynamelst", $this->stdResult )) {
            $this->mycountrynamelst = $this->stdResult->{"mycountrynamelst"};
        }
        if (array_key_exists ( "mysupportglobal", $this->stdResult )) {
            $this->mysupportglobal = $this->stdResult->{"mysupportglobal"};
        }
        if (array_key_exists ( "quantitystep", $this->stdResult )) {
            $this->quantitystep = $this->stdResult->{"quantitystep"};
        }
        if (array_key_exists ( "sailingdate", $this->stdResult )) {
            $this->sailingdate = $this->stdResult->{"sailingdate"};
        }
        if (array_key_exists ( "shipoptionid", $this->stdResult )) {
            $this->shipoptionid = $this->stdResult->{"shipoptionid"};
        }
        if (array_key_exists ( "shippingmodelid", $this->stdResult )) {
            $this->shippingmodelid = $this->stdResult->{"shippingmodelid"};
        }
        if (array_key_exists ( "shippingmodelitemid", $this->stdResult )) {
            $this->shippingmodelitemid = $this->stdResult->{"shippingmodelitemid"};
        }
        if (array_key_exists ( "shippingtypeid", $this->stdResult )) {
            $this->shippingtypeid = $this->stdResult->{"shippingtypeid"};
        }
        if (array_key_exists ( "startquantity", $this->stdResult )) {
            $this->startquantity = $this->stdResult->{"startquantity"};
        }
        if (array_key_exists ( "supplierid", $this->stdResult )) {
            $this->supplierid = $this->stdResult->{"supplierid"};
        }
        if (array_key_exists ( "supportglobal", $this->stdResult )) {
            $this->supportglobal = $this->stdResult->{"supportglobal"};
        }
        if (array_key_exists ( "warehouseid", $this->stdResult )) {
            $this->warehouseid = $this->stdResult->{"warehouseid"};
        }
        if (array_key_exists ( "warehouseName", $this->stdResult )) {
            $this->warehouseName = $this->stdResult->{"warehouseName"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "countrycodelst", $this->arrayResult )) {
            $this->countrycodelst = $arrayResult['countrycodelst'];
        }
        if (array_key_exists ( "countryidlist", $this->arrayResult )) {
            $this->countryidlist = $arrayResult['countryidlist'];
        }
        if (array_key_exists ( "countrynamelst", $this->arrayResult )) {
            $this->countrynamelst = $arrayResult['countrynamelst'];
        }
        if (array_key_exists ( "displaypricestep", $this->arrayResult )) {
            $this->displaypricestep = $arrayResult['displaypricestep'];
        }
        if (array_key_exists ( "displaystartprice", $this->arrayResult )) {
            $this->displaystartprice = $arrayResult['displaystartprice'];
        }
        if (array_key_exists ( "endquantity", $this->arrayResult )) {
            $this->endquantity = $arrayResult['endquantity'];
        }
        if (array_key_exists ( "insertdate", $this->arrayResult )) {
            $this->insertdate = $arrayResult['insertdate'];
        }
        if (array_key_exists ( "mycountrycodelst", $this->arrayResult )) {
            $this->mycountrycodelst = $arrayResult['mycountrycodelst'];
        }
        if (array_key_exists ( "mycountrynamelst", $this->arrayResult )) {
            $this->mycountrynamelst = $arrayResult['mycountrynamelst'];
        }
        if (array_key_exists ( "mysupportglobal", $this->arrayResult )) {
            $this->mysupportglobal = $arrayResult['mysupportglobal'];
        }
        if (array_key_exists ( "quantitystep", $this->arrayResult )) {
            $this->quantitystep = $arrayResult['quantitystep'];
        }
        if (array_key_exists ( "sailingdate", $this->arrayResult )) {
            $this->sailingdate = $arrayResult['sailingdate'];
        }
        if (array_key_exists ( "shipoptionid", $this->arrayResult )) {
            $this->shipoptionid = $arrayResult['shipoptionid'];
        }
        if (array_key_exists ( "shippingmodelid", $this->arrayResult )) {
            $this->shippingmodelid = $arrayResult['shippingmodelid'];
        }
        if (array_key_exists ( "shippingmodelitemid", $this->arrayResult )) {
            $this->shippingmodelitemid = $arrayResult['shippingmodelitemid'];
        }
        if (array_key_exists ( "shippingtypeid", $this->arrayResult )) {
            $this->shippingtypeid = $arrayResult['shippingtypeid'];
        }
        if (array_key_exists ( "startquantity", $this->arrayResult )) {
            $this->startquantity = $arrayResult['startquantity'];
        }
        if (array_key_exists ( "supplierid", $this->arrayResult )) {
            $this->supplierid = $arrayResult['supplierid'];
        }
        if (array_key_exists ( "supportglobal", $this->arrayResult )) {
            $this->supportglobal = $arrayResult['supportglobal'];
        }
        if (array_key_exists ( "warehouseid", $this->arrayResult )) {
            $this->warehouseid = $arrayResult['warehouseid'];
        }
        if (array_key_exists ( "warehouseName", $this->arrayResult )) {
            $this->warehouseName = $arrayResult['warehouseName'];
        }
    }
}
