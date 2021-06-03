<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use  com\dhgate\openapi\client\entity\SDKDomain;
use  com\dhgate\openapi\client\entity\ByteArray;
use ArrayObject;

class DhgateItemPriceUpdateParam  extends SDKDomain
{
/*
 * disCountType 	Integer 	必须 	设置价格类型 	设置价格类型。1=分别设置价格，2=统一设置价格；示例值：1,如果是统一设置价格[2]，则itemPrice不能为空,如果是分别设置价格[1],skuPriceList不能为空,如果只有一个sku则默认是统一设置价格
 */
    public function setDisCountType( $disCountType) {
        $this->sdkStdResult["disCountType"] = $disCountType;
    }

/*
 * itemCode 	String 	必须 	产品itemCode 	可通过获取产品列表接口（dh.item.list）,上传产品返回参数获得该入参参数；示例值：154002791
 */
    public function setItemCode( $itemCode) {
        $this->sdkStdResult["itemCode"] = $itemCode;
    }

/*
 * itemPrice 	Double 	可选 	统一修改产品的价格 	此字段和skuPriceList属性互斥
 */
    public function setItemPrice( $itemPrice) {
        $this->sdkStdResult["itemPrice"] = $itemPrice;
    }

/*
 * siteId 	String 	必须 	产品所属语言站点 	默认为英文站点,参数值为：EN英文站点,RU俄语站点，示例值：EN
 */
    public function setSiteId( $siteId) {
        $this->sdkStdResult["siteId"] = $siteId;
    }

    /*
      * skuPriceList 	ItemSkuPrice[] 	可选 	产品sku价格列表 	包含的参数信息：skuMD5=产品skuMD5，skuPrice=对应skuMD5的价格,此属性和itemPrice属性互斥
     * $arr=array(
           ['skumd5'=>'dddd','skuprice'=>'ddddd'],
           ['skumd5'=>'wewe','skuprice'=>'232']
       );
    [{"skumd5":"asdfasdfads","skuprice":34}]

    DhgateItemSkuPriceListParam()
    //单个对象的情况，直接写入参数名字

      */
    private $skuPriceList;
    public function setSkuPriceList(DhgateItemSkuPriceListParam $skuPriceList) {
        $this-> sdkStdResult["skuPriceList"]=$skuPriceList;
    }
    public function setSkuPriceListArr($skuPriceList) {
        $this-> sdkStdResult["skuPriceList"]=$skuPriceList;
    }
    public function getSkuPriceList() {
        return $this->sdkStdResult["skuPriceList"];
    }
    private $stdResult;
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("skuPriceList", $this->stdResult)) {
            $skuPriceListResult = $this->stdResult->{"skuPriceList"};
            $object = json_decode ( json_encode ( $skuPriceListResult ), true );
            $this->skuPriceList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemSkuPriceListParamResult = new DhgateItemSkuPriceListParam ();
                $DhgateItemSkuPriceListParamResult->setArrayResult ( $arrayobject );
                $this->skuPriceList [$i] = $DhgateItemSkuPriceListParamResult;
            }
        }
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;

    }
     private $arrayResult;
   public function setArrayResult($arrayResult){
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "skuPriceList", $this->arrayResult )) {

            $skuPriceListResult = $arrayResult ['skuPriceList'];
            for($i = 0; $i < count ( $skuPriceListResult ); $i ++) {
                $DhgateItemSkuPriceListParam=new DhgateItemSkuPriceListParam();
                $DhgateItemSkuPriceListParam->setStdResult($skuPriceListResult[$i] );
                $this->skuPriceList[$i] = $DhgateItemSkuPriceListParam;
            }
        }

    }
}