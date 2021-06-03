<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemTemplateListResultInfo
{

/*
 * sizeTemplateId 	Long 	必须 	尺码模板ID 	示例值：82558025181257728
 */
    private $sizeTemplateId;
    public function GetSizeTemplateId(){
        return $this->sizeTemplateId ;
    }
/*
 * templateName 	String 	必须 	尺码模板名称 	示例值：xinshoumuban
 */
    private $templateName;
    public function GetTemplateName(){
        return $this->templateName ;
    }
/*
 * templateNameCn 	String 	必须 	尺码模板中文名称 	示例值：新手模板
 */
    private $templateNameCn;
    public function GetTemplateNameCn(){
        return $this->templateNameCn ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "sizeTemplateId", $this->stdResult )) {
            $this->sizeTemplateId = $this->stdResult->{"sizeTemplateId"};
        }
        if (array_key_exists ( "templateName", $this->stdResult )) {
            $this->templateName = $this->stdResult->{"templateName"};
        }
        if (array_key_exists ( "templateNameCn", $this->stdResult )) {
            $this->templateNameCn = $this->stdResult->{"templateNameCn"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "sizeTemplateId", $this->arrayResult )) {
            $this->sizeTemplateId = $arrayResult['sizeTemplateId'];
        }
        if (array_key_exists ( "templateName", $this->arrayResult )) {
            $this->templateName = $arrayResult['templateName'];
        }
        if (array_key_exists ( "templateNameCn", $this->arrayResult )) {
            $this->templateNameCn = $arrayResult['templateNameCn'];
        }
    }
}