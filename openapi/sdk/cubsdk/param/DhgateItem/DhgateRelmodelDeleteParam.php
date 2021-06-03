<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class DhgateRelmodelDeleteParam
{
   /*
    * relModelIds 	String 	必须 	关联产品模板ID 	关联产品模板编码ID信息，多个关联产品模板ID用英文半角逗号分隔;示例值：33211198531,36211198322
    */
    public function setRelModelIds( $relModelIds) {
        $this->sdkStdResult["relModelIds"] = $relModelIds;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}