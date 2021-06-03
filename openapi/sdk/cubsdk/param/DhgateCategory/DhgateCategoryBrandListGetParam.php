<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 10:19
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateCategoryBrandListGetParam{
    /*
     * brandName
     *@param String 	可选
     * 品牌名称 	若不清楚可传空；示例值：WAGG
     */
    public function setBrandName( $brandName) {
        $this->sdkStdResult["brandName"] = $brandName;
    }
    /*
     * catePubId
     * @param String 	可选
     * 选择产品类目，校验品牌资质使用，如果没有则不判断资质 	需校验品牌资质时不可为空
     */
    public function setCatePubId( $catePubId) {
        $this->sdkStdResult["catePubId"] = $catePubId;
    }
    /*
     * indexCode
     * @param String 	可选
     * 品牌名英文字母索引(A-Z) 	可传空；示例值：W
     */
    public function setIndexCode( $indexCode) {
        $this->sdkStdResult["indexCode"] = $indexCode;
    }
    /*
     * pageNum
     * @param int 	必须
     * 获取页码 	示例值：1
     */
    public function setPageNum( $pageNum) {
        $this->sdkStdResult["pageNum"] = $pageNum;
    }
    /*
     * pageSize
     * @param int 	必须
     * 获取页面的记录数 	示例值：20
     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}




