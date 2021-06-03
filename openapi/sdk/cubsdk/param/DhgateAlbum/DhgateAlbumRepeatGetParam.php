<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 13:27
 *接口地址：
 * http://api.dhgate.com/dop/router
 * 接口说明：
 * 卖家批量保存图片到相册,仅支持POST方式提交请求
 * 超时控制：100 秒
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateAlbumRepeatGetParam {

    /*
     * imgMd5
     * @param String 	必须
     * 图片Md5 	通过上传图片获得图片Md5
     */
    public function setImgMd5($imgMd5){
        $this->sdkStdResult["imgMd5"] = $imgMd5;
    }
    /*
     * imgType
     * @param String 	必须
     * 图片类型
     * 可输入值：albu:商品相册图片，avim:商品自定义属性图片
     */
    public function setImgType($imgType){
        $this->sdkStdResult["imgType"] = $imgType;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }

}