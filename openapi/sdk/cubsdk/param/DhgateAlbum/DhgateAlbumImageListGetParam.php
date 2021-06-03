<?php

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateAlbumImageListGetParam {
 /*
  * albWindowId
  * 设定相册ID
  */
    public function setAlbWindowId( $albWindowId) {
        $this->sdkStdResult["albWindowId"] = $albWindowId;
    }
    /*
     * pageNum
     * 设定获取的页码
     */
    public function setPageNum( $pageNum) {
        $this->sdkStdResult["pageNum"] = $pageNum;
    }
    /*
     * pageSize
     * 每页记录数
     */
    public function setPageSize($pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }

}
?>