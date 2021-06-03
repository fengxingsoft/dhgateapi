<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:32
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use com\dhgate\openapi\client\entity\SDKDomain;
use com\dhgate\openapi\client\entity\ByteArray;

class DhgateItemUpdateParam extends SDKDomain
{
/*
 * afterSaleTemplateId 	String 	可选 	产品售后模板id 	3C类产品必填;通过获取售后模板接口（dh.item.aftersale.list）获取；示例值：82558025181257728；
 */
    public function setAfterSaleTemplateId( $afterSaleTemplateId) {
        $this->sdkStdResult["afterSaleTemplateId"] = $afterSaleTemplateId;
    }
/*
 * catePubId 	String 	必须 	发布类目id 	可通过获取类目列表接扣(dh.categorys.get)获取；示例值：014006004；
 */
    public function setCatePubId( $catePubId) {
        $this->sdkStdResult["catePubId"] = $catePubId;
    }
/*
 * expireDate 	String 	可选 	过期时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    public function setExpireDate( $expireDate) {
        $this->sdkStdResult["expireDate"] = $expireDate;
    }
/*
 * issample 	Integer 	可选 	产品是否成人性质 	2：成人性质商品 3：没有成人性质商品
 */
    public function setIssample( $issample) {
        $this->sdkStdResult["issample"] = $issample;
    }
/*
 * itemAttrgroupList 	ItemAttrgroupUpdate[] 	必须 	兼容性属性列表 	产品兼容性属性列表信息
 */
    public function setItemAttrgroupList( $itemAttrgroupList) {
        $this->sdkStdResult["itemAttrgroupList"] = $itemAttrgroupList;
    }
/*
 * itemAttrList 	ItemAttrUpdate[] 	必须 	产品属性列表 	产品属性列表信息
 */
    public function setItemAttrList( $itemAttrList) {
        $this->sdkStdResult["itemAttrList"] = $itemAttrList;
    }
/*
 * itemBase 	ItemBaseUpdate 	必须 	产品基础信息 	产品基础信息，包含短描，长描，产品名称等信息
 */
    public function setItemBase(DhgateItemBase $itemBase) {
        $this->sdkStdResult["itemBase"] = $itemBase;
    }
/*
 * itemCode 	String 	必须 	产品itemCode 	可通过获取产品列表接口（dh.item.list）,上传产品返回参数获得该入参参数；示例值：154002791
 */
    public function setItemCode( $itemCode) {
        $this->sdkStdResult["itemCode"] = $itemCode;
    }
/*
 * itemGroupId 	String 	可选 	产品所属产品组id 	通过获取产品组列表接口（dh.item.groups.get）获取；示例值：ff808081429e87200142a194f26e5f56；
 */
    public function setItemGroupId( $itemGroupId) {
        $this->sdkStdResult["itemGroupId"] = $itemGroupId;
    }
/*
 * itemImgList 	ItemImgUpdate[] 	必须 	产品图片列表 	产品图片列表信息在,注意新旧图片地址路径不同，且上传产品时必须设置一张图片为站外推广图片(type=3)
 */
    public function setItemImgList( $itemImgList) {
        $this->sdkStdResult["itemImgList"] = $itemImgList;
    }
/*
 * itemInventory 	ItemInventoryUpdate 	可选 	产品备货信息 	产品备货信息，无备货时可不传
 */
    public function setItemInventory( $itemInventory) {
        $this->sdkStdResult["itemInventory"] = $itemInventory;
    }
/*
 * itemPackage 	ItemPackageUpdate 	必须 	产品包装信息 	产品包装信息
 */
    public function setItemPackage( $itemPackage) {
        $this->sdkStdResult["itemPackage"] = $itemPackage;
    }
/*
 * itemSaleSetting 	ItemSaleSettingUpdate 	必须 	产品销售属性设置 	产品销售属性信息
 */
    public function setItemSaleSetting( $itemSaleSetting) {
        $this->sdkStdResult["itemSaleSetting"] = $itemSaleSetting;
    }
/*
 * itemSkuList 	ItemSkuUpdate[] 	必须 	产品SKU列表 	产品SKU列表信息，Sku列表数量=产品属性中规格属性数量*自定义规格属性数量
 */
    public function setItemSkuList( $itemSkuList) {
        $this->sdkStdResult["itemSkuList"] = $itemSkuList;
    }
/*
 * itemSpecSelfDefList 	ItemSpecSelfDefUpdate[] 	必须 	自定义规格列表 	一个产品最多二十个自定义规格
 */
    public function setItemSpecSelfDefList( $itemSpecSelfDefList) {
        $this->sdkStdResult["itemSpecSelfDefList"] = $itemSpecSelfDefList;
    }
/*
 * itemWholesaleRangeList 	ItemWholesaleRangeUpdate[] 	必须 	产品折扣区间 	折扣区间百分比，即折扣值，如卖家设置产品折扣率为95折，则该入参为0.05；包含以下参数:discount=折扣率, startQty=起批数量
 */
    public function setItemWholesaleRangeList( $itemWholesaleRangeList) {
        $this->sdkStdResult["itemWholesaleRangeList"] = $itemWholesaleRangeList;
    }
/*
 * shippingModelId 	String 	必须 	产品运费模板id 	通过获取运费模板接口（dh.shipping.templates.get）获取；示例值：ff80808143d903060144259de6f2164c；
 */
    public function setShippingModelId( $shippingModelId) {
        $this->sdkStdResult["shippingModelId"] = $shippingModelId;
    }
/*
 * siteId 	String 	必须 	产品所属语言站点 	默认为英文站点,参数值为：EN英文站点,RU俄语站点，示例值：EN
 */
    public function setSiteId( $siteId) {
        $this->sdkStdResult["startDate"] = $siteId;
    }
/*
 * sizeTemplateId 	String 	可选 	产品尺码模板id 	可通过卖家获取尺码模板列表接口（dh.item.template.list）；
 */
    public function setSizeTemplateId( $sizeTemplateId) {
        $this->sdkStdResult["sizeTemplateId"] = $sizeTemplateId;
    }
/*
 * supplierId 	String 	可选 	卖家ID 	示例值：402880f100f59ccd0100f59cd37d0004
 */
    public function setSupplierId( $supplierId) {
        $this->sdkStdResult["supplierId"] = $supplierId;
    }
/*
 * vaildDay 	String 	必须 	产品有效期 	从发布产品信息成功那天开始，到产品信息在平台上停止展示那天为止的时间段。注意：产品过了有效期，若没有及时更新，产品会自动下架，有效期以天为单位：14,30,90）；可通过卖家获取有效期列表接口（dh.item.periods.get）；获取该参数；默认值：90；
 */
    public function setVaildDay( $vaildDay) {
        $this->sdkStdResult["vaildDay"] = $vaildDay;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
        return $this->sdkStdResult;
    }
}