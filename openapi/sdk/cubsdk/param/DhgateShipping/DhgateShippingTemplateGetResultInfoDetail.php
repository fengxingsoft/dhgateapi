<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 10:20
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateShipping;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateShippingTemplateGetResultInfoDetail extends SDKDomain
{
    /*
     * abroadactivityid 	String 	必须 	海外直发活动ID,只有直发有 	海外直发活动ID,只有直发有
     */
    private $abroadactivityid;
    public function GetAbroadactivityid(){
        return $this->abroadactivityid;
    }
    /*
     * countryNoConfig 	String 	必须 	只有自定义运费时有意义,s：标准运费，n：不送达，默认是s 	只有自定义运费时有意义,s：标准运费，n：不送达，默认是s
     */
    private $countryNoConfig;
    public function GetCountryNoConfig(){
        return $this->countryNoConfig;
    }
    /*
     * dhgatediscounttype 	String 	必须 	DHGate合作物流发货地编号 	DHGate合作物流发货地编号
     */
    private $dhgatediscounttype;
    public function GetDhgatediscounttype(){
        return $this->dhgatediscounttype;
    }
    /*
     * dispatchport 	String 	必须 	发货港 	发货港
     */
    private $dispatchport;
    public function GetDispatchport(){
        return $this->dispatchport;
    }
    /*
     * insertdate 	Date 	必须 	创建时间 	创建时间
     */
    private $insertdate;
    public function GetInsertdate(){
        return $this->insertdate;
    }
    /*
     * ismyshipping 	String 	必须 	是否为自定义运费 	是否为自定义运费
     */
    private $ismyshipping;
    public function GetIsmyshipping(){
        return $this->ismyshipping;
    }
    /*
     * mydiscount 	Float 	必须 	运输公司折扣 	运输公司折扣
     */
    private $mydiscount;
    public function GetMydiscount(){
        return $this->mydiscount;
    }
    /*
     * shippingmodelid 	String 	必须 	运费模版ID 	运费模版ID
     */
    private $shippingmodelid;
    public function GetShippingmodelid(){
        return $this->shippingmodelid;
    }
    /*
     * shippingmodelitemid 	String 	必须 	主键ID 	主键ID
     */
    private $shippingmodelitemid;
    public function GetShippingmodelitemid(){
        return $this->shippingmodelitemid;
    }
    /*
     * shippingmodelOptList 	SupplierShippingmodelOptVO[] 	必须 	运费模板类型选项 	运费模板类型选项
     */
    private $shippingmodelOptList;
    public function GetShippingmodelOptList(){
        return $this->shippingmodelOptList;
    }
    /*
     * shippingtypeid 	String 	必须 	运输方式 	运输方式
     */
    private $shippingtypeid;
    public function GetShippingtypeid(){
        return $this->shippingtypeid;
    }
    /*
     * supplierid 	String 	必须 	卖家ID 	卖家ID
     */
    private $supplierid;
    public function GetSupplierid(){
        return $this->supplierid;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "abroadactivityid", $this->stdResult )) {
            $this->abroadactivityid = $this->stdResult[0];
        }
        if (array_key_exists ( "countryNoConfig", $this->stdResult )) {
            $this->countryNoConfig = $this->stdResult->{"countryNoConfig"};
        }
        if (array_key_exists ( "dhgatediscounttype", $this->stdResult )) {
            $this->dhgatediscounttype = $this->stdResult->{"dhgatediscounttype"};
        }
        if (array_key_exists ( "dispatchport", $this->stdResult )) {
            $this->dispatchport = $this->stdResult->{"dispatchport"};
        }
        if (array_key_exists ( "insertdate", $this->stdResult )) {
            $this->insertdate = $this->stdResult->{"insertdate"};
        }
        if (array_key_exists ( "ismyshipping", $this->stdResult )) {
            $this->ismyshipping = $this->stdResult->{"ismyshipping"};
        }
        if (array_key_exists ( "mydiscount", $this->stdResult )) {
            $this->mydiscount = $this->stdResult->{"mydiscount"};
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
        if (array_key_exists ( "supplierid", $this->stdResult )) {
            $this->supplierid = $this->stdResult->{"supplierid"};
        }
        if (array_key_exists ( "shippingmodelOptList", $this->stdResult )) {
            $this->shippingmodelOptList = $this->stdResult->{"shippingmodelOptList"};
        }
        if (array_key_exists ( "shippingmodelOptList", $this->stdResult )) {
            $shippingmodelOptListResult=$this->stdResult->{"shippingmodelOptList"};
            $object = json_decode ( json_encode ( $shippingmodelOptListResult), true );
            $this->shippingmodelOptList = array ();
            for($i=0;$i<count($object);$i++){
                $arrayobject = new ArrayObject ( $object[$i]);
                $DhgateShippingTemplateGetResultInfoDetails=new DhgateShippingTemplateGetResultInfoDetails();
                $DhgateShippingTemplateGetResultInfoDetails->setArrayResult($arrayobject );
                $this->shippingmodelOptList[$i] = $DhgateShippingTemplateGetResultInfoDetails;
            }

        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "abroadactivityid", $this->arrayResult )) {
            $this->abroadactivityid = $arrayResult['abroadactivityid'];
        }
        if (array_key_exists ( "countryNoConfig", $this->arrayResult )) {
            $this->countryNoConfig = $arrayResult['countryNoConfig'];
        }
        if (array_key_exists ( "dhgatediscounttype", $this->arrayResult )) {
            $this->dhgatediscounttype = $arrayResult['dhgatediscounttype'];
        }
        if (array_key_exists ( "dispatchport", $this->arrayResult )) {
            $this->dispatchport = $arrayResult['dispatchport'];
        }
        if (array_key_exists ( "insertdate", $this->arrayResult )) {
            $this->insertdate = $arrayResult['insertdate'];
        }
        if (array_key_exists ( "ismyshipping", $this->arrayResult )) {
            $this->ismyshipping = $arrayResult['ismyshipping'];
        }
        if (array_key_exists ( "mydiscount", $this->arrayResult )) {
            $this->mydiscount = $arrayResult['mydiscount'];
        }
        if (array_key_exists ( "shippingmodelid", $this->arrayResult )) {
            $this->shippingmodelid = $arrayResult['shippingmodelid'];
        }
        if (array_key_exists ( "shippingmodelitemid", $this->arrayResult )) {
            $this->shippingmodelitemid = $arrayResult['shippingmodelitemid'];
        }

        if (array_key_exists ( "shippingmodelOptList", $this->arrayResult )) {
            for($i=0;$i<=count($arrayResult['shippingmodelOptList']);$i++){
                $shippingmodelOptListResult = $arrayResult ['shippingmodelOptList'];
                $this->shippingmodelOptList[$i] =new DhgateShippingTemplateGetResultInfoDetails();
                $this->shippingmodelOptList[$i]->setStdResult ( $shippingmodelOptListResult );
            }
        }
//        if (array_key_exists ( "shippingmodelOptList", $this->arrayResult )) {
//            $shippingmodelOptListResult = $arrayResult ['shippingmodelOptList'];
//            $this->shippingmodelOptList=$shippingmodelOptListResult;
//                $this->shippingmodelOptList = new DhgateShippingTemplateGetResultInfoDetails();
//                $this->shippingmodelOptList->setStdResult($shippingmodelOptListResult);
//
//        }
//        if (array_key_exists ( "shippingmodelOptList", $this->arrayResult )) {
//            $this->shippingmodelOptList= $arrayResult ['shippingmodelOptList'];
//        }
//        if (array_key_exists ( "shippingmodelOptList", $this->arrayResult )) {
//            for($i=0;$i<=count($arrayResult['shippingmodelOptList']);$i++){
//                $shippingmodelOptListResult = $arrayResult ['shippingmodelOptList'];
//                $this->shippingmodelOptList =new DhgateShippingTemplateGetResultInfoDetails();
//                $this->shippingmodelOptList->setStdResult ( $shippingmodelOptListResult );
//            }
//        }
//        if (array_key_exists ( "shippingmodelOptList", $this->arrayResult )) {
//                $shippingmodelOptListResult = $arrayResult ['shippingmodelOptList'];
//                for($i=0;$i<count($shippingmodelOptListResult);$i++){
//                    $this->shippingmodelOptList[$i] =new DhgateShippingTemplateGetResultInfoDetails();
//                    $this->shippingmodelOptList[$i]->setStdResult ( $shippingmodelOptListResult );
//                }
//        }

        if (array_key_exists ( "shippingtypeid", $this->arrayResult )) {
            $this->shippingtypeid = $arrayResult['shippingtypeid'];
        }
        if (array_key_exists ( "supplierid", $this->arrayResult )) {
            $this->supplierid = $arrayResult['supplierid'];
        }
    }
}