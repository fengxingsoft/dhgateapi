<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateItemGetResultInfoitemPackage{

/*
 * grossWeight 	Double 	必须 	产品包装后重量 	以KG为单位；
 */
    private $grossWeight;
    public function GetGrossWeight(){
        return $this->grossWeight;
    }
/*
 * height 	Double 	必须 	产品包装后高度 	以cm为单位；示例值：50
 */
    private $height;
    public function GetHeight(){
        return $this->height;
    }
/*
 * itemWeigthRange 	ItemWeightRangeUpdate 	可选 	产品阶梯重量 	当您选择阶梯重量计费，系统将忽略计算您产品的体积重量；例如，某产品单个产品包装后的重量是2KG，2件产品包装后的实际重量是3KG，3件产品包装后的实际重量是4KG。 若您不使用自定义计重：如果买家购买3件产品，那么系统将按照3*2=6KG的产品重量来计算买家需要支付的运费。若您使用自定义计重：且将产品的重量信息设置为：买家购买1件产品，就按2KG的重量计算运费。买家每多买一件产品，重量增加1KG。同样，如果买家购买3件产品，那么系统将按照2+(3-1)*1=4 KG的产品重量来计算买家需要支付的运费。包含以下属性：baseQt=基本数量，stepQt=阶梯数量，stepWeight=阶梯重量
 */
    private $itemWeigthRange;
    public function GetItemWeigthRange(){
        return $this->itemWeigthRange;
    }
/*
 * length 	Double 	必须 	产品包装后长度 	以cm为单位；示例值：50
 */
    private $length;
    public function GetLength(){
        return $this->length;
    }
/*
 * measureId 	String 	必须 	产品销售单位ID 	可通过获取单位列表（dh.base.measures.get）接口获得示例值：套、打、包……
 */
    private $measureId;
    public function GetMeasureId(){
        return $this->measureId;
    }
/*
 * packingQuantity 	Integer 	必须 	按包卖时每包产品数量 	按包卖时数量大于等于2，不按包卖时数量为1
 */
    private $packingQuantity;
    public function GetPackingQuantity(){
        return $this->packingQuantity;
    }
/*
 * width 	Double 	必须 	产品包装后宽度 	以cm为单位；示例值：50
 */

    private $width;
    public function GetWidth(){
        return $this->width;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "grossWeight", $this->stdResult )) {
            $this->grossWeight = $this->stdResult->{"grossWeight"};
        }
        if (array_key_exists ( "height", $this->stdResult )) {
            $this->height = $this->stdResult->{"height"};
        }
        if (array_key_exists ( "itemWeigthRange", $this->stdResult )) {
            $itemWeigthRangeResult=$this->stdResult->{"itemWeigthRange"};
            $object = json_decode ( json_encode ( $itemWeigthRangeResult ), true );
            $this->itemWeigthRange = array ();
                $arrayobject = new ArrayObject ( $object);
                $DhgateItemGetResultInfoitemPackageItemWeightRangeUpdate=new DhgateItemGetResultInfoitemPackageItemWeightRangeUpdate();
                $DhgateItemGetResultInfoitemPackageItemWeightRangeUpdate->setArrayResult($arrayobject );
                $this->itemWeigthRange= $DhgateItemGetResultInfoitemPackageItemWeightRangeUpdate;
        }
        if (array_key_exists ( "length", $this->stdResult )) {
            $this->length = $this->stdResult->{"length"};
        }
        if (array_key_exists ( "measureId", $this->stdResult )) {
            $this->measureId = $this->stdResult->{"measureId"};
        }
        if (array_key_exists ( "packingQuantity", $this->stdResult )) {
            $this->packingQuantity = $this->stdResult->{"packingQuantity"};
        }
        if (array_key_exists ( "width", $this->stdResult )) {
            $this->width = $this->stdResult->{"width"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "grossWeight", $this->arrayResult )) {
            $this->grossWeight = $arrayResult['grossWeight'];
        }
        if (array_key_exists ( "height", $this->arrayResult )) {
            $this->height = $arrayResult['height'];
        }
        if (array_key_exists ( "itemWeigthRange", $this->arrayResult )) {
            $this->itemWeigthRange = $arrayResult['itemWeigthRange'];
        }
        if (array_key_exists ( "length", $this->arrayResult )) {
            $this->length = $arrayResult['length'];
        }
        if (array_key_exists ( "measureId", $this->arrayResult )) {
            $this->measureId = $arrayResult['measureId'];
        }
        if (array_key_exists ( "packingQuantity", $this->arrayResult )) {
            $this->packingQuantity = $arrayResult['packingQuantity'];
        }
        if (array_key_exists ( "width", $this->arrayResult )) {
            $this->width = $arrayResult['width'];
        }
    }
}