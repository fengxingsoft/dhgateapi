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
class DhgateItemGetResultInfoitemAttrGroupList{
    /*
     * itemAttrGroupList 	ItemAttrgroupUpdate[][] 	必须 	产品兼容属性列表 	产品兼容属性列表信息
     */
    private $itemAttrGroupList;
    public function GetItemAttrGroupList(){
        return $this->itemAttrGroupList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "itemAttrGroupList", $this->stdResult )) {
            $itemAttrGroupListResult=$this->stdResult->{"itemAttrGroupList"};
            $object = json_decode ( json_encode ( $itemAttrGroupListResult ), true );
            $this->imageList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemGetResultInfoitemAttrGroupListDetail=new DhgateItemGetResultInfoitemAttrGroupListDetail();
                $DhgateItemGetResultInfoitemAttrGroupListDetail->setArrayResult($arrayobject );
                $this->itemAttrGroupList[$i] = $DhgateItemGetResultInfoitemAttrGroupListDetail;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "itemAttrGroupList", $this->arrayResult )) {
            $this->itemAttrGroupList = $arrayResult['itemAttrGroupList'];
        }
    }
}