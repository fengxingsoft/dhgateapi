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

class DhgateItemHtmlGetResult
{
    /*
     * htmlContent 	String 	必须 	产品长描内容 	示例值：qwertyu
     */
    private $htmlContent;
    public function GetHtmlContent(){
        return $this->htmlContent ;
    }
    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "htmlContent", $this->stdResult )) {
            $this->htmlContent = $this->stdResult->{"htmlContent"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "htmlContent", $this->arrayResult )) {
            $this->htmlContent = $arrayResult['htmlContent'];
        }
    }
}