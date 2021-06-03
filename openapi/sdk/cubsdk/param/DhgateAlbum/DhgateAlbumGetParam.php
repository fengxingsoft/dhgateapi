<?php

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateAlbumGetParam {

    public function getAlbWindowId() {
        $tempResult = $this->sdkStdResult["albWindowId"];
        return $tempResult;
    }

    public function setAlbWindowId( $albWindowId) {
        $this->sdkStdResult["albWindowId"] = $albWindowId;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }

}
?>