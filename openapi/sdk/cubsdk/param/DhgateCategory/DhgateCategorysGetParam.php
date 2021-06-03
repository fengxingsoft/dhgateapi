<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class DhgateCategorysGetParam
{
   /*
    * parentid 	String 	必须 	父类目ID,可选,传空则默认为根类目ID
    */
    public function setParentid($parentid) {
        $this->sdkStdResult["parentid"] = $parentid;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}