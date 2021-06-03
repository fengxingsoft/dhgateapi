<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/16
 * Time: 16:26
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateOnline;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateOnlineChannelListGetResult{
    /*
     * data 	ChannelResData[] 	必须 	渠道列表 	获取渠道列表基础信息
     */
    private $data;
    public function GetData(){
        return $this->data;
    }


    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "data", $this->stdResult )) {
            $dataResult=$this->stdResult->{"data"};
            $object = json_decode ( json_encode ( $dataResult), true );
            $this->data = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateOnlineChannelListGetResultInfo=new DhgateOnlineChannelListGetResultInfo();
                $DhgateOnlineChannelListGetResultInfo->setArrayResult($arrayobject );
                $this->data[$i] = $DhgateOnlineChannelListGetResultInfo;
            }
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "data", $this->arrayResult )) {
            $categoryPubAttrResult=$arrayResult['data'];
            $this->data = new DhgateOnlineChannelListGetResultInfo();
            $this->data->setStdResult ( $categoryPubAttrResult);
        }
    }
}