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
class DhgateItemTemplateListResult{

/*
 * isRequest 	TemplateSzSeller 	必须 	类目尺码模板是否为必填信息 	1:必填,0:非必填
 */
    private $isRequest;
    public function GetIsRequest(){
        return $this->isRequest;
    }
/*
 * templateSzList 	TemplateSzSeller[] 	必须 	尺码模板列表信息 	尺码模板列表信息
 */
    private $templateSzList;
    public function GetTemplateSzList(){
        return $this->templateSzList;
    }
    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "isRequest", $this->stdResult )) {
            $this->isRequest = $this->stdResult->{"isRequest"};

        }
//        if (array_key_exists ( "isRequest", $this->stdResult )) {
//            $isRequestResult=$this->stdResult->{"isRequest"};
//            $object = json_decode ( json_encode ( $isRequestResult ), true );
//            $this->isRequest = array ();
//                $arrayobject = new ArrayObject ( $object);
//                $DhgateItemTemplateListResultInfo=new DhgateItemTemplateListResultInfo();
//                $DhgateItemTemplateListResultInfo->setArrayResult($arrayobject );
//                $this->isRequest= $DhgateItemTemplateListResultInfo;
//        }
        if (array_key_exists ( "templateSzList", $this->stdResult )) {
            $this->templateSzList = $this->stdResult->{"templateSzList"};

        }
        if (array_key_exists ( "templateSzList", $this->stdResult )) {
            $templateSzListResult=$this->stdResult->{"templateSzList"};
            $object = json_decode ( json_encode ( $templateSzListResult), true );
            $this->templateSzList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemTemplateListResultInfo=new DhgateItemTemplateListResultInfo();
                $DhgateItemTemplateListResultInfo->setArrayResult($arrayobject );
                $this->templateSzList[$i] = $DhgateItemTemplateListResultInfo;
            }
        }

    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "isRequest", $this->arrayResult )) {
            $this->isRequest = $arrayResult['isRequest'];
        }
        if (array_key_exists ( "templateSzList", $this->arrayResult )) {
            $this->templateSzList = $arrayResult['templateSzList'];
        }
    }
}