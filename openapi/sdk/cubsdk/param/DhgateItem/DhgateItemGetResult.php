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
class DhgateItemGetResult{

/*
 * afterSaleTemplateId 	String 	必须 	产品售后模板id 	通过获取售后模板接口（dh.item.aftersale.list）获取；示例值：82558025181257728；
 */
    private $afterSaleTemplateId;
    public function GetAfterSaleTemplateId(){
        return $this->afterSaleTemplateId;
    }
/*
 * catePubId 	String 	必须 	发布类目id 	可通过获取类目列表接扣(dh.categorys.get)获取；示例值：014006004；
 */
    private $catePubId;
    public function GetCatePubId(){
        return $this->catePubId;
    }
/*
 * expireDate 	String 	必须 	过期时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $expireDate;
    public function GetExpireDate(){
        return $this->expireDate;
    }
/*
 * isDhOptimized 	String 	可选 	是否是敦煌优选自营商品 	0:否, 1:是
 */
    private $isDhOptimized;
    public function GetIsDhOptimized(){
        return $this->isDhOptimized;
    }
/*
 * issample 	Integer 	必须 	产品是否成人性质 	2：成人性质商品 3：没有成人性质商品
 */
    private $issample;
    public function GetIssample(){
        return $this->issample;
    }
/*
 * itemAttrGroupList 	ItemAttrgroupUpdate[][] 	必须 	产品兼容属性列表 	产品兼容属性列表信息
 */
    private $itemAttrGroupList;
    public function GetItemAttrGroupList(){
        return $this->itemAttrGroupList;
    }
/*
 * itemAttrList 	ItemAttrUpdate[] 	必须 	产品属性列表 	产品属性列表信息
 */
    private $itemAttrList;
    public function GetItemAttrList(){
        return $this->itemAttrList;
    }
/*
 * itemBase 	ItemBaseUpdate 	必须 	产品基础信息 	产品基础信息，包含短描，长描，产品名称等信息
 */
    private $itemBase;
    public function GetItemBase(){
        return $this->itemBase;
    }
/*
 * itemCode 	String 	必须 	产品itemCode 	可通过获取产品列表接口（dh.item.list）获得该入参参数；示例值：154002791
 */
    private $itemCode;
    public function GetItemCode(){
        return $this->itemCode;
    }
/*
 * itemGroupId 	String 	可选 	产品所属产品组id 	通过获取产品组列表接口（dh.item.groups.get）获取；示例值：ff808081429e87200142a194f26e5f56；
 */
    private $itemGroupId;
    public function GetItemGroupId(){
        return $this->itemGroupId;
    }
/*
 * itemImgList 	ItemImgUpdate[] 	必须 	产品图片列表 	产品图片列表信息在,注意新旧图片地址路径不同，且上传产品时必须设置一张图片为站外推广图片(type=3)
 */
    private $itemImgList;
    public function GetItemImgList(){
        return $this->itemImgList;
    }
/*
 * itemInventory 	ItemInventoryUpdate 	可选 	产品备货信息 	产品备货信息，无备货时可不传
 */
    private $itemInventory;
    public function GetItemInventory(){
        return $this->itemInventory;
    }
/*
 * itemPackage 	ItemPackageUpdate 	必须 	产品包装信息 	产品包装信息
 */
    private $itemPackage;
    public function GetItemPackage(){
        return $this->itemPackage;
    }
/*
 * itemSaleSetting 	ItemSaleSettingUpdate 	必须 	产品销售属性设置 	产品销售属性信息
 */
    private $itemSaleSetting;
    public function GetItemSaleSetting(){
        return $this->itemSaleSetting;
    }
/*
 * itemSkuList 	ItemSkuUpdate[] 	必须 	产品SKU列表 	产品SKU列表信息，Sku列表数量=产品属性中规格属性数量*自定义规格属性数量
 */
    private $itemSkuList;
    public function GetItemSkuList(){
        return $this->itemSkuList;
    }
/*
 * itemSpecSelfDefList 	ItemSpecSelfDefUpdate[] 	必须 	自定义规格列表 	一个产品最多十个自定义规格
 */
    private $itemSpecSelfDefList;
    public function GetItemSpecSelfDefList(){
        return $this->itemSpecSelfDefList;
    }
/*
 * itemWholesaleRangeList 	ItemWholesaleRangeUpdate[] 	必须 	产品折扣区间 	折扣区间百分比，即折扣值，如卖家设置产品折扣率为95折，则该入参为0.05；包含以下参数:discount=折扣率, startQty=起批数量
 */
    private $itemWholesaleRangeList;
    public function GetItemWholesaleRangeList(){
        return $this->itemWholesaleRangeList;
    }
/*
 * operateDate 	String 	可选 	产品最新修改时间 	日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21
 */
    private $operateDate;
    public function GetOperateDate(){
        return $this->operateDate;
    }
/*
 * shippingModelId 	String 	必须 	产品运费模板id 	通过获取运费模板接口（dh.shipping.templates.get）获取；示例值：ff80808143d903060144259de6f2164c；
 */
    private $shippingModelId;
    public function GetShippingModelId(){
        return $this->shippingModelId;
    }
/*
 * siteId 	String 	必须 	产品所属语言站点，默认为英文站点,参数值为：EN英文站点,RU俄语站点
 */
    private $siteId;
    public function GetSiteId(){
        return $this->siteId;
    }
/*
 * sizeTemplateId 	String 	可选 	产品尺码模板id 	可通过卖家获取尺码模板列表接口（dh.item.template.list）；
 */
    private $sizeTemplateId;
    public function GetSizeTemplateId(){
        return $this->sizeTemplateId;
    }
/*
 * state 	int 	可选 	产品状态 	100000=未定义;100100=上架产品;100200=待审核产品;100300=审核未通过产品;100400=下架产品;100500=品牌商投诉产品;100600=疑似侵权产品;示例值：100100
 */
    private $state;
    public function GetState(){
        return $this->state;
    }
/*
 * supplierId 	String 	必须 	卖家ID 	示例值：402880f100f59ccd0100f59cd37d0004
 */
    private $supplierId;
    public function GetSupplierId(){
        return $this->supplierId;
    }
/*
 * vaildDay 	String 	必须 	产品有效期 	从发布产品信息成功那天开始，到产品信息在平台上停止展示那天为止的时间段。注意：产品过了有效期，若没有及时更新，产品会自动下架，有效期以天为单位：14,30,90）；可通过卖家获取有效期列表接口（dh.item.periods.get）；获取该参数；默认值：90；
 */
    private $vaildDay;
    public function GetVaildDay(){
        return $this->vaildDay;
    }
    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;

        if (array_key_exists("afterSaleTemplateId", $this->stdResult)) {
            $this->afterSaleTemplateId = $this->stdResult->{"afterSaleTemplateId"};
        }
        if (array_key_exists("catePubId", $this->stdResult)) {
            $this->catePubId = $this->stdResult->{"catePubId"};
        }
        if (array_key_exists("expireDate", $this->stdResult)) {
            $this->expireDate = $this->stdResult->{"expireDate"};
        }
        if (array_key_exists("isDhOptimized", $this->stdResult)) {
            $this->isDhOptimized = $this->stdResult->{"isDhOptimized"};
        }
        if (array_key_exists("issample", $this->stdResult)) {
            $this->issample = $this->stdResult->{"issample"};
        }
        if (array_key_exists("itemAttrGroupList", $this->stdResult)) {
            $this->itemAttrGroupList = $this->stdResult->{"itemAttrGroupList"};
        }
        if (array_key_exists("itemAttrGroupList", $this->stdResult)) {
            $itemAttrGroupListResult = $this->stdResult->{"itemAttrGroupList"};
            $object = json_decode(json_encode($itemAttrGroupListResult), true);
            $this->itemAttrGroupList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateItemGetResultInfoitemAttrGroupList = new DhgateItemGetResultInfoitemAttrGroupList();
                $DhgateItemGetResultInfoitemAttrGroupList->setArrayResult($arrayobject);
                $this->itemAttrGroupList[$i] = $DhgateItemGetResultInfoitemAttrGroupList;
            }
        }
        if (array_key_exists("itemAttrList", $this->stdResult)) {
            $this->itemAttrList = $this->stdResult->{"itemAttrList"};
        }
        if (array_key_exists("itemAttrList", $this->stdResult)) {
            $itemAttrListResult = $this->stdResult->{"itemAttrList"};
            $object = json_decode(json_encode($itemAttrListResult), true);
            $this->itemAttrGroupList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateItemGetResultInfoItemAttrList = new DhgateItemGetResultInfoItemAttrList();
                $DhgateItemGetResultInfoItemAttrList->setArrayResult($arrayobject);
                $this->itemAttrList[$i] = $DhgateItemGetResultInfoItemAttrList;
            }
        }

        if (array_key_exists("itemBase", $this->stdResult)) {
            $itemBaseResult = $this->stdResult->{"itemBase"};
            $object = json_decode(json_encode($itemBaseResult), true);
            $this->itemBase = array();
            $arrayobject = new ArrayObject ($object);
            $DhgateItemGetResultInfoItemBase = new DhgateItemGetResultInfoItemBase();
            $DhgateItemGetResultInfoItemBase->setArrayResult($arrayobject);
            $this->itemBase = $DhgateItemGetResultInfoItemBase;
        }
        if (array_key_exists("itemCode", $this->stdResult)) {
            $this->itemCode = $this->stdResult->{"itemCode"};
        }
        if (array_key_exists("itemGroupId", $this->stdResult)) {
            $this->itemGroupId = $this->stdResult->{"itemGroupId"};
        }
        if (array_key_exists("itemImgList", $this->stdResult)) {
            $this->itemImgList = $this->stdResult->{"itemImgList"};
        }
        if (array_key_exists("itemImgList", $this->stdResult)) {
            $itemImgListResult = $this->stdResult->{"itemImgList"};
            $object = json_decode(json_encode($itemImgListResult), true);
            $this->itemAttrGroupList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateItemGetResultInfoItemImgList = new DhgateItemGetResultInfoItemImgList();
                $DhgateItemGetResultInfoItemImgList->setArrayResult($arrayobject);
                $this->itemImgList[$i] = $DhgateItemGetResultInfoItemImgList;
            }
        }

        if (array_key_exists("itemInventory", $this->stdResult)) {
            $itemInventoryResult = $this->stdResult->{"itemInventory"};
            $object = json_decode(json_encode($itemInventoryResult), true);
            $this->itemPackage = array();
            $arrayobject = new ArrayObject ($object);
            $DhgateItemGetResultInfoItemInventory = new DhgateItemGetResultInfoItemInventory();
            $DhgateItemGetResultInfoItemInventory->setArrayResult($arrayobject);
            $this->itemInventory = $DhgateItemGetResultInfoItemInventory;
        }
        if (array_key_exists("itemPackage", $this->stdResult)) {
            $this->itemPackage = $this->stdResult->{"itemPackage"};
        }
        if (array_key_exists("itemPackage", $this->stdResult)) {
            $itemPackageResult = $this->stdResult->{"itemPackage"};
            $object = json_decode(json_encode($itemPackageResult), true);
            $this->itemPackage = array();
            $arrayobject = new ArrayObject ($object);
            $DhgateItemGetResultInfoitemPackage = new DhgateItemGetResultInfoitemPackage();
            $DhgateItemGetResultInfoitemPackage->setArrayResult($arrayobject);
            $this->itemPackage = $DhgateItemGetResultInfoitemPackage;
        }

        if (array_key_exists("itemSaleSetting", $this->stdResult)) {
            $this->itemSaleSetting = $this->stdResult->{"itemSaleSetting"};
        }
        if (array_key_exists("itemSaleSetting", $this->stdResult)) {
            $itemSaleSettingResult = $this->stdResult->{"itemSaleSetting"};
            $object = json_decode(json_encode($itemSaleSettingResult), true);
            $this->itemPackage = array();
            $arrayobject = new ArrayObject ($object);
            $DhgateItemGetResultInfoItemSaleSetting = new DhgateItemGetResultInfoItemSaleSetting();
            $DhgateItemGetResultInfoItemSaleSetting->setArrayResult($arrayobject);
            $this->itemSaleSetting = $DhgateItemGetResultInfoItemSaleSetting;
        }
        if (array_key_exists("itemSkuList", $this->stdResult)) {
            $this->itemSkuList = $this->stdResult->{"itemSkuList"};
        }
        if (array_key_exists("itemSkuList", $this->stdResult)) {
            $itemSkuListResult = $this->stdResult->{"itemSkuList"};
            $object = json_decode(json_encode($itemSkuListResult), true);
            $this->itemSkuList = array();
            for ($i = 0; $i < count($object); $i++){
                $arrayobject = new ArrayObject ($object[$i]);
                $DhgateItemGetResultInfoItemSkuUpdate = new DhgateItemGetResultInfoItemSkuUpdate();
                $DhgateItemGetResultInfoItemSkuUpdate->setArrayResult($arrayobject);
                $this->itemSkuList[$i] = $DhgateItemGetResultInfoItemSkuUpdate;
            }
        }

        if (array_key_exists ( "itemSpecSelfDefList", $this->stdResult )) {
            $this->itemSpecSelfDefList = $this->stdResult->{"itemSpecSelfDefList"};
        }
        if (array_key_exists ( "itemSpecSelfDefList", $this->stdResult )) {
            $itemSpecSelfDefListResult=$this->stdResult->{"itemSpecSelfDefList"};
            $object = json_decode ( json_encode ( $itemSpecSelfDefListResult ), true );
            $this->itemSpecSelfDefList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemGetResultInfoItemSpecSelfDefUpdate=new DhgateItemGetResultInfoItemSpecSelfDefUpdate();
                $DhgateItemGetResultInfoItemSpecSelfDefUpdate->setArrayResult($arrayobject );
                $this->itemSpecSelfDefList[$i] = $DhgateItemGetResultInfoItemSpecSelfDefUpdate;
            }
        }
         if (array_key_exists ( "itemWholesaleRangeList", $this->stdResult )) {
             $this->itemWholesaleRangeList = $this->stdResult->{"itemWholesaleRangeList"};
         }
        if (array_key_exists ( "itemWholesaleRangeList", $this->stdResult )) {
            $itemWholesaleRangeListResult=$this->stdResult->{"itemWholesaleRangeList"};
            $object = json_decode ( json_encode ( $itemWholesaleRangeListResult ), true );
            $this->itemWholesaleRangeList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateItemGetResultInfoItemWholesaleRangeUpdate=new DhgateItemGetResultInfoItemWholesaleRangeUpdate();
                $DhgateItemGetResultInfoItemWholesaleRangeUpdate->setArrayResult($arrayobject );
                $this->itemWholesaleRangeList[$i] = $DhgateItemGetResultInfoItemWholesaleRangeUpdate;
            }
        }
        if (array_key_exists ( "operateDate", $this->stdResult )) {
            $this->operateDate = $this->stdResult->{"operateDate"};
        }
         if (array_key_exists ( "shippingModelId", $this->stdResult )) {
             $this->shippingModelId = $this->stdResult->{"shippingModelId"};
         }
        if (array_key_exists ( "siteId", $this->stdResult )) {
            $this->siteId = $this->stdResult->{"siteId"};
        }
        if (array_key_exists ( "sizeTemplateId", $this->stdResult )) {
            $this->sizeTemplateId = $this->stdResult->{"sizeTemplateId"};
        }
        if (array_key_exists ( "state", $this->stdResult )) {
            $this->state = $this->stdResult->{"state"};
        }
        if (array_key_exists ( "supplierId", $this->stdResult )) {
            $this->supplierId = $this->stdResult->{"supplierId"};
        }
        if (array_key_exists ( "vaildDay", $this->stdResult )) {
            $this->vaildDay = $this->stdResult->{"vaildDay"};
        }
 }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "afterSaleTemplateId", $this->arrayResult )) {
            $this->afterSaleTemplateId = $arrayResult['afterSaleTemplateId'];
        }
        if (array_key_exists ( "catePubId", $this->arrayResult )) {
            $this->catePubId = $arrayResult['catePubId'];
        }
        if (array_key_exists ( "expireDate", $this->arrayResult )) {
            $this->expireDate = $arrayResult['expireDate'];
        }
        if (array_key_exists ( "isDhOptimized", $this->arrayResult )) {
            $this->isDhOptimized = $arrayResult['isDhOptimized'];
        }
        if (array_key_exists ( "issample", $this->arrayResult )) {
            $this->issample = $arrayResult['issample'];
        }
        if (array_key_exists ( "itemAttrGroupList", $this->arrayResult )) {
            $this->itemAttrGroupList = $arrayResult['itemAttrGroupList'];
        }
        if (array_key_exists ( "itemAttrList", $this->arrayResult )) {
            $this->itemAttrList = $arrayResult['itemAttrList'];
        }
        if (array_key_exists ( "itemBase", $this->arrayResult )) {
            $this->itemBase = $arrayResult['itemBase'];
        }
        if (array_key_exists ( "itemCode", $this->arrayResult )) {
            $this->itemCode = $arrayResult['itemCode'];
        }
        if (array_key_exists ( "itemGroupId", $this->arrayResult )) {
            $this->itemGroupId = $arrayResult['itemGroupId'];
        }
        if (array_key_exists ( "itemImgList", $this->arrayResult )) {
            $this->itemImgList = $arrayResult['itemImgList'];
        }
        if (array_key_exists ( "itemInventory", $this->arrayResult )) {
            $this->itemInventory = $arrayResult['itemInventory'];
        }
        if (array_key_exists ( "itemPackage", $this->arrayResult )) {
            $this->itemPackage = $arrayResult['itemPackage'];
        }
        if (array_key_exists ( "itemSaleSetting", $this->arrayResult )) {
            $this->itemSaleSetting = $arrayResult['itemSaleSetting'];
        }
        if (array_key_exists ( "itemSkuList", $this->arrayResult )) {
            $itemSkuListResult =$arrayResult['itemSkuList'];
            for ($i = 0; $i < count($itemSkuListResult); $i++){
                $itemSkuList=$itemSkuListResult[$i];
                $DhgateItemGetResultInfoItemSkuUpdate = new DhgateItemGetResultInfoItemSkuUpdate();
                $DhgateItemGetResultInfoItemSkuUpdate->setStdResult($itemSkuList);
                $this->itemSkuList[$i] = $DhgateItemGetResultInfoItemSkuUpdate;
            }
        }
        if (array_key_exists ( "itemSpecSelfDefList", $this->arrayResult )) {
            $this->itemSpecSelfDefList = $arrayResult['itemSpecSelfDefList'];
        }
        if (array_key_exists ( "itemWholesaleRangeList", $this->arrayResult )) {
            $this->itemWholesaleRangeList = $arrayResult['itemWholesaleRangeList'];
        }
        if (array_key_exists ( "operateDate", $this->arrayResult )) {
            $this->operateDate = $arrayResult['operateDate'];
        }
        if (array_key_exists ( "shippingModelId", $this->arrayResult )) {
            $this->shippingModelId = $arrayResult['shippingModelId'];
        }
        if (array_key_exists ( "siteId", $this->arrayResult )) {
            $this->siteId = $arrayResult['siteId'];
        }
        if (array_key_exists ( "sizeTemplateId", $this->arrayResult )) {
            $this->sizeTemplateId = $arrayResult['sizeTemplateId'];
        }
        if (array_key_exists ( "state", $this->arrayResult )) {
            $this->state = $arrayResult['state'];
        }
        if (array_key_exists ( "supplierId", $this->arrayResult )) {
            $this->supplierId = $arrayResult['supplierId'];
        }
        if (array_key_exists ( "vaildDay", $this->arrayResult )) {
            $this->vaildDay = $arrayResult['vaildDay'];
        }
    }
}