<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateUser;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateUserSellerGetResultInfo
{

/*
 * adGroup 	String 	必须 	广告组 	广告组
 */
    private $adGroup;
    public function GetAdGroup(){
        return $this->adGroup ;
    }
/*
 * adKeywords 	String 	必须 	关键词 	关键词
 */
    private $adKeywords;
    public function GetAdKeywords(){
        return $this->adKeywords ;
    }
/*
 * adSeries 	String 	必须 	广告系列 	广告系列
 */
    private $adSeries;
    public function GetAdSeries(){
        return $this->adSeries ;
    }
/*
 * agreeLr 	String 	必须 	是否同意开通LOCAL_RETURN的开通协议 ''0''或空：否，''1'':是 	是否同意开通LOCAL_RETURN的开通协议 ''0''或空：否，''1'':是
 */
    private $agreeLr;
    public function GetAgreeLr(){
        return $this->agreeLr ;
    }
/*
 * areacode 	String 	必须 	区号 	区号
 */
    private $areacode;
    public function GetAreacode(){
        return $this->areacode ;
    }
/*
 * businesstypeid 	String 	必须 	商业类型 	商业类型
 */
    private $businesstypeid;
    public function GetBusinesstypeid(){
        return $this->businesstypeid ;
    }
/*
 * checktype4seller 	String 	必须 	给seller看的级别 	给seller看的级别
 */
    private $checktype4seller;
    public function GetChecktype4seller(){
        return $this->checktype4seller ;
    }
/*
 * city 	String 	必须 	城市 	城市
 */
    private $city;
    public function GetCity(){
        return $this->city ;
    }
/*
 * citystate 	String 	必须 	保存城市ID 	保存城市ID
 */
    private $citystate;
    public function GetCitystate(){
        return $this->citystate ;
    }
/*
 * companycode 	String 	必须 	企业注册号 	企业注册号
 */
    private $companycode;
    public function GetCompanycode(){
        return $this->companycode ;
    }
/*
 * companytype 	String 	必须 	公司类型 	公司类型
 */
    private $companytype;
    public function GetCompanytype(){
        return $this->companytype ;
    }
/*
 * contactpersonid 	String 	必须 	联系人 	联系人
 */
    private $contactpersonid;
    public function GetContactpersonid(){
        return $this->contactpersonid ;
    }
/*
 * corporator 	String 	必须 	企业法人 	企业法人
 */
    private $corporator;
    public function GetCorporator(){
        return $this->corporator ;
    }
/*
 * countrycode 	String 	必须 	国家代码 	国家代码
 */
    private $countrycode;
    public function GetCountrycode(){
        return $this->countrycode ;
    }
/*
 * countryname 	String 	必须 	国家编码 	国家编码
 */
    private $countryname;
    public function GetCountryname(){
        return $this->countryname ;
    }
/*
 * createdby 	String 	必须 	记录人 	记录人
 */
    private $createdby;
    public function GetCreatedby(){
        return $this->createdby ;
    }
/*
 * createdon 	Date 	必须 	记录时间 	记录时间
 */
    private $createdon;
    public function GetCreatedon(){
        return $this->createdon ;
    }
/*
 * curlevel 	String 	必须 	seller 当前等级标识 TS：Top Seller,OS：Onramp Seller,NS：New Seller,BS：Baby Seller 	seller 当前等级标识 TS：Top Seller,OS：Onramp Seller,NS：New Seller,BS：Baby Seller
 */
    private $curlevel;
    public function GetCurlevel(){
        return $this->curlevel ;
    }
/*
 * department 	String 	必须 	联系人职务 	联系人职务
 */
    private $department;
    public function GetDepartment(){
        return $this->department ;
    }
/*
 * dhportUserId 	String 	必须 	独立系统用户ID 	独立系统用户ID
 */
    private $dhportUserId;
    public function GetDhportUserId(){
        return $this->dhportUserId ;
    }
/*
 * ecContactperson 	String 	必须 	联系人 	联系人
 */
    private $ecContactperson;
    public function GetEcContactperson(){
        return $this->ecContactperson ;
    }
/*
 * ecEmail 	String 	必须 	email地址 	email地址
 */
    private $ecEmail;
    public function GetEcEmail(){
        return $this->ecEmail ;
    }
/*
 * ecFaxno 	String 	必须 	传真 	传真
 */
    private $ecFaxno;
    public function GetEcFaxno(){
        return $this->ecFaxno ;
    }
/*
 * ecMailingaddress 	String 	必须 	邮寄地址 	邮寄地址
 */
    private $ecMailingaddress;
    public function GetEcMailingaddress(){
        return $this->ecMailingaddress ;
    }
/*
 * ecMobilephone 	String 	必须 	移动电话 	移动电话
 */
    private $ecMobilephone;
    public function GetEcMobilephone(){
        return $this->ecMobilephone ;
    }
/*
 * ecTel 	String 	必须 	电话 	电话
 */
    private $ecTel;
    public function GetEcTel(){
        return $this->ecTel ;
    }
/*
 * evaluatestatus 	Long 	必须 	评审是否通过,0老用户,1新用户待审,2新用户通过,3新用户审核失败 ,4 地址验证通过 ,5 TNS 通过 产品数少于5 	评审是否通过,0老用户,1新用户待审,2新用户通过,3新用户审核失败 ,4 地址验证通过 ,5 TNS 通过 产品数少于5
 */
    private $evaluatestatus;
    public function GetEvaluatestatus(){
        return $this->evaluatestatus ;
    }
/*
 * factorypaytype 	String 	必须 	工厂支付类型 	工厂支付类型
 */
    private $factorypaytype;
    public function GetFactorypaytype(){
        return $this->factorypaytype ;
    }
/*
 * factoryregtype 	String 	必须 	0：普通seller用户 1：factory类型用户 	0：普通seller用户 1：factory类型用户
 */
    private $factoryregtype;
    public function GetFactoryregtype(){
        return $this->factoryregtype ;
    }
/*
 * factoryvalidtime 	Date 	必须 	工厂注册生效时间 	工厂注册生效时间
 */
    private $factoryvalidtime;
    public function GetFactoryvalidtime(){
        return $this->factoryvalidtime ;
    }
/*
 * firstListproDate 	Date 	必须 	seller最早list产品时间 	seller最早list产品时间
 */
    private $firstListproDate;
    public function GetFirstListproDate(){
        return $this->firstListproDate ;
    }
/*
 * foundedtime 	Date 	必须 	公司成立时间 	公司成立时间
 */
    private $foundedtime;
    public function GetFoundedtime(){
        return $this->foundedtime ;
    }
/*
 * fromdetailinfo 	String 	必须 	注册来源 	注册来源
 */
    private $fromdetailinfo;
    public function GetFromdetailinfo(){
        return $this->fromdetailinfo ;
    }
/*
 * fromtype 	String 	必须 	来源 	来源
 */
    private $fromtype;
    public function GetFromtype(){
        return $this->fromtype ;
    }
/*
 * frozendate 	Date 	必须 	解封时间 	解封时间
 */
    private $frozendate;
    public function GetFrozendate(){
        return $this->frozendate ;
    }
/*
 * frozenstate 	String 	必须 	1手动解封 2 自动解封 	1手动解封 2 自动解封
 */
    private $frozenstate;
    public function GetFrozenstate(){
        return $this->frozenstate ;
    }
/*
 * grade 	String 	必须 	金银铜牌标志位 N:未设置 B:铜牌 S:银牌 G:金牌 	金银铜牌标志位 N:未设置 B:铜牌 S:银牌 G:金牌
 */
    private $grade;
    public function GetGrade(){
        return $this->grade ;
    }
/*
 * gradelevel 	String 	必须 	selller mic度级别 	selller mic度级别
 */
    private $gradelevel;
    public function GetGradelevel(){
        return $this->gradelevel ;
    }
/*
 * gradenumber 	Long 	必须 	卖家等级 	卖家等级
 */
    private $gradenumber;
    public function GetGradenumber(){
        return $this->gradenumber ;
    }
/*
 * haspromotionproducts 	String 	必须 	是否有促销产品 	是否有促销产品
 */
    private $haspromotionproducts;
    public function GetHaspromotionproducts(){
        return $this->haspromotionproducts ;
    }
/*
 * haswebstore 	Long 	必须 	用户是否有网店，1为有，0为没有 	用户是否有网店，1为有，0为没有
 */
    private $haswebstore;
    public function GetHaswebstore(){
        return $this->haswebstore ;
    }
/*
 * howtofinddhgate 	String 	必须 	如何得知dhgate 	如何得知dhgate
 */
    private $howtofinddhgate;
    public function GetHowtofinddhgate(){
        return $this->howtofinddhgate ;
    }
/*
 * idcardconfirm 	Long 	必须 	是否已经审核身份证 	是否已经审核身份证
 */
    private $idcardconfirm;
    public function GetIdcardconfirm(){
        return $this->idcardconfirm ;
    }
/*
 * imageuploaded 	Long 	必须 	是否已经上传身份证图片 	是否已经上传身份证图片
 */
    private $imageuploaded;
    public function GetImageuploaded(){
        return $this->imageuploaded ;
    }
/*
 * industryid 	String 	必须 	行业 	行业
 */
    private $industryid;
    public function GetIndustryid(){
        return $this->industryid ;
    }
/*
 * isaddressvalidate 	Long 	必须 	是否需要物理地址验证：0：不需要；1：需要 	是否需要物理地址验证：0：不需要；1：需要
 */
    private $isaddressvalidate;
    public function GetIsaddressvalidate(){
        return $this->isaddressvalidate ;
    }
/*
 * isDhportUser 	Long 	必须 	是否绑定独立系统 1 绑定 0 没有 	是否绑定独立系统 1 绑定 0 没有
 */
    private $isDhportUser;
    public function GetIsDhportUser(){
        return $this->isDhportUser ;
    }
/*
 * isenterprice 	String 	必须 	是否是企业 	是否是企业
 */
    private $isenterprice;
    public function GetIsenterprice(){
        return $this->isenterprice ;
    }
/*
 * isescrow 	String 	必须 	是否是ESCROW 	是否是ESCROW
 */
    private $isescrow;
    public function GetIsescrow(){
        return $this->isescrow ;
    }
/*
 * isfactory 	Long 	必须 	是否为工厂用户 1 是 0不是 	是否为工厂用户 1 是 0不是
 */
    private $isfactory;
    public function GetIsfactory(){
        return $this->isfactory ;
    }
/*
 * ispowerseller 	String 	必须 	是否是POWER SELLER,0 不是,1 是 	是否是POWER SELLER,0 不是,1 是
 */
    private $ispowerseller;
    public function GetIspowerseller(){
        return $this->ispowerseller ;
    }
/*
 * isreadchina 	String 	必须 	是否阅读chinaPost协议状态位 0 未阅读，1 已阅读 	是否阅读chinaPost协议状态位 0 未阅读，1 已阅读
 */
    private $isreadchina;
    public function GetIsreadchina(){
        return $this->isreadchina ;
    }
/*
 * isreadhkpost 	Long 	必须 	sellers是否同意HK Post协议标志 null和0为不同意；1：同意 	sellers是否同意HK Post协议标志 null和0为不同意；1：同意
 */
    private $isreadhkpost;
    public function GetIsreadhkpost(){
        return $this->isreadhkpost ;
    }
/*
 * isreadocean 	Long 	必须 	sellers是否同意海运协议标志 null和0为不同意；1：同意 	sellers是否同意海运协议标志 null和0为不同意；1：同意
 */
    private $isreadocean;
    public function GetIsreadocean(){
        return $this->isreadocean ;
    }
/*
 * isreadrmb 	Long 	必须 	seller是否读过人民币放款使用说明和FAQ。 0：没读过；1读过 	seller是否读过人民币放款使用说明和FAQ。 0：没读过；1读过
 */
    private $isreadrmb;
    public function GetIsreadrmb(){
        return $this->isreadrmb ;
    }
/*
 * isrepeat 	Long 	必须 	0 无重复 1：有重复 	0 无重复 1：有重复
 */
    private $isrepeat;
    public function GetIsrepeat(){
        return $this->isrepeat ;
    }
/*
 * learnaboutid 	String 	必须 	获知来源 	获知来源
 */
    private $learnaboutid;
    public function GetLearnaboutid(){
        return $this->learnaboutid ;
    }
/*
 * mainbusinessover 	String 	必须 	主营行业 	主营行业
 */
    private $mainbusinessover;
    public function GetMainbusinessover(){
        return $this->mainbusinessover ;
    }
/*
 * mainbusinessproduct 	String 	必须 	主要产品类型 	主要产品类型
 */
    private $mainbusinessproduct;
    public function GetMainbusinessproduct(){
        return $this->mainbusinessproduct ;
    }
/*
 * maincata 	String 	必须 	卖家主营行业(gmv最高的行业)(一天更新一次 ) 	卖家主营行业(gmv最高的行业)(一天更新一次 )
 */
    private $maincata;
    public function GetMaincata(){
        return $this->maincata ;
    }
/*
 * maincatabylist 	String 	必须 	根据listing计算的最多的类目，逗号分隔比如014,019 表示014是产品总数 最多的行业，019是listing数量最多的行业 (一天更新一次 ) 	根据listing计算的最多的类目，逗号分隔比如014,019 表示014是产品总数 最多的行业，019是listing数量最多的行业 (一天更新一次 )
 */
    private $maincatabylist;
    public function GetMaincatabylist(){
        return $this->maincatabylist ;
    }
/*
 * maxlevel 	String 	必须 	seller 最高等级标识 TS：Top Selle,OS：Onramp Seller,NS：New Seller,BS：Baby Seller 	seller 最高等级标识 TS：Top Selle,OS：Onramp Seller,NS：New Seller,BS：Baby Seller
 */
    private $maxlevel;
    public function GetMaxlevel(){
        return $this->maxlevel ;
    }
/*
 * modifiedby 	String 	必须 	修改人 	修改人
 */
    private $modifiedby;
    public function GetModifiedby(){
        return $this->modifiedby ;
    }
/*
 * modifiedon 	Date 	必须 	修改时间 	修改时间
 */
    private $modifiedon;
    public function GetModifiedon(){
        return $this->modifiedon ;
    }
/*
 * operatelevel 	Long 	必须 	seller 经营级别 用于识别seller 	seller 经营级别 用于识别seller
 */
    private $operatelevel;
    public function GetOperatelevel(){
        return $this->operatelevel ;
    }
/*
 * owningbusinessunitid 	String 	必须 	AM部门 	AM部门
 */
    private $owningbusinessunitid;
    public function GetOwningbusinessunitid(){
        return $this->owningbusinessunitid ;
    }
/*
 * owninguserid 	String 	必须 	Account manager 	Account manager
 */
    private $owninguserid;
    public function GetOwninguserid(){
        return $this->owninguserid ;
    }
/*
 * payouttype 	Long 	必须 	seller放款标志： 0 美元放款；1人民币放款 	seller放款标志： 0 美元放款；1人民币放款
 */
    private $payouttype;
    public function GetPayouttype(){
        return $this->payouttype ;
    }
/*
 * payseqno 	String 	必须 	表增加支付账款流水号字段 	表增加支付账款流水号字段
 */
    private $payseqno;
    public function GetPayseqno(){
        return $this->payseqno ;
    }
/*
 * payway 	String 	必须 	支付方式，0: 线下支付 1：线上支付 	支付方式，0: 线下支付 1：线上支付
 */
    private $payway;
    public function GetPayway(){
        return $this->payway ;
    }
/*
 * pervalue 	String 	必须 	mic产品所占百分比 	mic产品所占百分比
 */
    private $pervalue;
    public function GetPervalue(){
        return $this->pervalue ;
    }
/*
 * provincestate 	String 	必须 	省份 	省份
 */
    private $provincestate;
    public function GetProvincestate(){
        return $this->provincestate ;
    }
/*
 * readNewsyiInstruction 	String 	必须 	是否读取过新版syi的说明 ''0''或空：否，''1'':是 	是否读取过新版syi的说明 ''0''或空：否，''1'':是
 */
    private $readNewsyiInstruction;
    public function GetReadNewsyiInstruction(){
        return $this->readNewsyiInstruction ;
    }
/*
 * recommendor 	String 	必须 	推荐人 	推荐人
 */
    private $recommendor;
    public function GetRecommendor(){
        return $this->recommendor ;
    }
/*
 * regstatus 	Long 	必须 	用户状态,0为老用户,1为新用户,2009-09-20 16:25:35之前为老用户，也就是临时注册上线之前的用户 	用户状态,0为老用户,1为新用户,2009-09-20 16:25:35之前为老用户，也就是临时注册上线之前的用户
 */
    private $regstatus;
    public function GetRegstatus(){
        return $this->regstatus ;
    }
/*
 * sellerscore 	Double 	必须 	卖家积分 	卖家积分
 */
    private $sellerscore;
    public function GetSellerscore(){
        return $this->sellerscore ;
    }
/*
 * storeopened 	String 	必须 	是否开通商铺 	是否开通商铺
 */
    private $storeopened;
    public function GetStoreopened(){
        return $this->storeopened ;
    }
/*
 * supplierid 	String 	必须 	卖家ID 	卖家ID
 */
    private $supplierid;
    public function GetSupplierid(){
        return $this->supplierid ;
    }
/*
 * suppliername 	String 	必须 	卖家名称 	卖家名称
 */
    private $suppliername;
    public function GetSuppliername(){
        return $this->suppliername ;
    }
/*
 * supplierno 	String 	必须 	卖家编号 	卖家编号
 */
    private $supplierno;
    public function GetSupplierno(){
        return $this->supplierno ;
    }
/*
 * supplierstatusid 	String 	必须 	卖家状态 	卖家状态
 */
    private $supplierstatusid;
    public function GetSupplierstatusid(){
        return $this->supplierstatusid ;
    }
/*
 * thirdauthdate 	Date 	必须 	第三方认证申请时间 	第三方认证申请时间
 */
    private $thirdauthdate;
    public function GetThirdauthdate(){
        return $this->thirdauthdate ;
    }
/*
 * thirdauthpassdate 	Date 	必须 	第三方认证通过时间 	第三方认证通过时间
 */
    private $thirdauthpassdate;
    public function GetThirdauthpassdate(){
        return $this->thirdauthpassdate ;
    }
/*
 * tnsrelationstatus 	String 	必须 	检查是否有相关账户位于TNSSeller黑名单中。0老数据，1等待检测，2有，3没有 	检查是否有相关账户位于TNSSeller黑名单中。0老数据，1等待检测，2有，3没有
 */
    private $tnsrelationstatus;
    public function GetTnsrelationstatus(){
        return $this->tnsrelationstatus ;
    }
/*
 * tnssendmsgflg 	Long 	必须 	用户通过TNS验证的信息是否显示,0为显示,1为不显示 	用户通过TNS验证的信息是否显示,0为显示,1为不显示
 */
    private $tnssendmsgflg;
    public function GetTnssendmsgflg(){
        return $this->tnssendmsgflg ;
    }
/*
 * verify 	String 	必须 	卖家认证状态：未认证N、认证Y、冻结F、终止T，第三方认证通过S，老用户U,老用户M, 取消C 	卖家认证状态：未认证N、认证Y、冻结F、终止T，第三方认证通过S，老用户U,老用户M, 取消C
 */
    private $verify;
    public function GetVerify(){
        return $this->verify ;
    }
/*
 * verifydate 	Date 	必须 	认证时间 	认证时间
 */
    private $verifydate;
    public function GetVerifydate(){
        return $this->verifydate ;
    }
/*
 * verifydetail 	String 	必须 	卖家认证详细信息 	卖家认证详细信息
 */
    private $verifydetail;
    public function GetVerifydetail(){
        return $this->verifydetail ;
    }
/*
 * verifyreport 	String 	必须 	第三方认证报告文档 	第三方认证报告文档
 */
    private $verifyreport;
    public function GetVerifyreport(){
        return $this->verifyreport ;
    }
/*
 * vipdiscountflag 	String 	必须 	vip折扣标志位 	vip折扣标志位
 */
    private $vipdiscountflag;
    public function GetVipdiscountflag(){
        return $this->vipdiscountflag ;
    }
/*
 * visitaliflag 	String 	必须 	是否等过其他网站目前值为ali或ebay 	是否等过其他网站目前值为ali或ebay
 */
    private $visitaliflag;
    public function GetVisitaliflag(){
        return $this->visitaliflag ;
    }
/*
 * visitfromtype 	String 	必须 	注册来源类型 	注册来源类型
 */
    private $visitfromtype;
    public function GetVisitfromtype(){
        return $this->visitfromtype ;
    }
/*
 * webaddress 	String 	必须 	网址 	网址
 */
    private $webaddress;
    public function GetWebaddress(){
        return $this->webaddress ;
    }
/*
 * wherehadoperate 	String 	必须 	用户在哪些网站上有自己的店铺，以逗号分隔 	用户在哪些网站上有自己的店铺，以逗号分隔
 */
    private $wherehadoperate;
    public function GetWherehadoperate(){
        return $this->wherehadoperate ;
    }
/*
 * zip 	String 	必须 	邮政编码 	邮政编码
 */

    private $zip;
    public function GetZip(){
        return $this->zip ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "adGroup", $this->stdResult )) {
            $this->adGroup = $this->stdResult->{"adGroup"};
        }
        if (array_key_exists ( "adKeywords", $this->stdResult )) {
            $this->adKeywords = $this->stdResult->{"adKeywords"};
        }
        if (array_key_exists ( "adSeries", $this->stdResult )) {
            $this->adSeries = $this->stdResult->{"adSeries"};
        }
        if (array_key_exists ( "agreeLr", $this->stdResult )) {
            $this->agreeLr = $this->stdResult->{"agreeLr"};
        }
        if (array_key_exists ( "areacode", $this->stdResult )) {
            $this->areacode = $this->stdResult->{"areacode"};
        }
        if (array_key_exists ( "businesstypeid", $this->stdResult )) {
            $this->businesstypeid = $this->stdResult->{"businesstypeid"};
        }
        if (array_key_exists ( "checktype4seller", $this->stdResult )) {
            $this->checktype4seller = $this->stdResult->{"checktype4seller"};
        }
        if (array_key_exists ( "city", $this->stdResult )) {
            $this->city = $this->stdResult->{"city"};
        }
        if (array_key_exists ( "citystate", $this->stdResult )) {
            $this->citystate = $this->stdResult->{"citystate"};
        }
        if (array_key_exists ( "companycode", $this->stdResult )) {
            $this->companycode = $this->stdResult->{"companycode"};
        }
        if (array_key_exists ( "companytype", $this->stdResult )) {
            $this->companytype = $this->stdResult->{"companytype"};
        }
        if (array_key_exists ( "contactpersonid", $this->stdResult )) {
            $this->contactpersonid = $this->stdResult->{"contactpersonid"};
        }
        if (array_key_exists ( "corporator", $this->stdResult )) {
            $this->corporator = $this->stdResult->{"corporator"};
        }
        if (array_key_exists ( "countrycode", $this->stdResult )) {
            $this->countrycode = $this->stdResult->{"countrycode"};
        }
        if (array_key_exists ( "countryname", $this->stdResult )) {
            $this->countryname = $this->stdResult->{"countryname"};
        }
        if (array_key_exists ( "createdby", $this->stdResult )) {
            $this->createdby = $this->stdResult->{"createdby"};
        }
        if (array_key_exists ( "createdon", $this->stdResult )) {
            $this->createdon = $this->stdResult->{"createdon"};
        }
        if (array_key_exists ( "curlevel", $this->stdResult )) {
            $this->curlevel = $this->stdResult->{"curlevel"};
        }
        if (array_key_exists ( "department", $this->stdResult )) {
            $this->department = $this->stdResult->{"department"};
        }
        if (array_key_exists ( "dhportUserId", $this->stdResult )) {
            $this->dhportUserId = $this->stdResult->{"dhportUserId"};
        }
        if (array_key_exists ( "ecContactperson", $this->stdResult )) {
            $this->ecContactperson = $this->stdResult->{"ecContactperson"};
        }
        if (array_key_exists ( "ecEmail", $this->stdResult )) {
            $this->ecEmail = $this->stdResult->{"ecEmail"};
        }
        if (array_key_exists ( "ecFaxno", $this->stdResult )) {
            $this->ecFaxno = $this->stdResult->{"ecFaxno"};
        }
        if (array_key_exists ( "ecMailingaddress", $this->stdResult )) {
            $this->ecMailingaddress = $this->stdResult->{"ecMailingaddress"};
        }
        if (array_key_exists ( "ecMobilephone", $this->stdResult )) {
            $this->ecMobilephone = $this->stdResult->{"ecMobilephone"};
        }
        if (array_key_exists ( "ecTel", $this->stdResult )) {
            $this->ecTel = $this->stdResult->{"ecTel"};
        }
        if (array_key_exists ( "evaluatestatus", $this->stdResult )) {
            $this->evaluatestatus = $this->stdResult->{"evaluatestatus"};
        }
        if (array_key_exists ( "factorypaytype", $this->stdResult )) {
            $this->factorypaytype = $this->stdResult->{"factorypaytype"};
        }
        if (array_key_exists ( "factoryregtype", $this->stdResult )) {
            $this->factoryregtype = $this->stdResult->{"factoryregtype"};
        }
        if (array_key_exists ( "factoryvalidtime", $this->stdResult )) {
            $this->factoryvalidtime = $this->stdResult->{"factoryvalidtime"};
        }
        if (array_key_exists ( "firstListproDate", $this->stdResult )) {
            $this->firstListproDate = $this->stdResult->{"firstListproDate"};
        }
        if (array_key_exists ( "foundedtime", $this->stdResult )) {
            $this->foundedtime = $this->stdResult->{"foundedtime"};
        }
        if (array_key_exists ( "fromdetailinfo", $this->stdResult )) {
            $this->fromdetailinfo = $this->stdResult->{"fromdetailinfo"};
        }
        if (array_key_exists ( "fromtype", $this->stdResult )) {
            $this->fromtype = $this->stdResult->{"fromtype"};
        }
        if (array_key_exists ( "frozendate", $this->stdResult )) {
            $this->frozendate = $this->stdResult->{"frozendate"};
        }
        if (array_key_exists ( "frozenstate", $this->stdResult )) {
            $this->frozenstate = $this->stdResult->{"frozenstate"};
        }
        if (array_key_exists ( "grade", $this->stdResult )) {
            $this->grade = $this->stdResult->{"grade"};
        }
        if (array_key_exists ( "gradelevel", $this->stdResult )) {
            $this->gradelevel = $this->stdResult->{"gradelevel"};
        }
        if (array_key_exists ( "gradenumber", $this->stdResult )) {
            $this->gradenumber = $this->stdResult->{"gradenumber"};
        }
        if (array_key_exists ( "haspromotionproducts", $this->stdResult )) {
            $this->haspromotionproducts = $this->stdResult->{"haspromotionproducts"};
        }
        if (array_key_exists ( "haswebstore", $this->stdResult )) {
            $this->haswebstore = $this->stdResult->{"haswebstore"};
        }
        if (array_key_exists ( "howtofinddhgate", $this->stdResult )) {
            $this->howtofinddhgate = $this->stdResult->{"howtofinddhgate"};
        }
        if (array_key_exists ( "idcardconfirm", $this->stdResult )) {
            $this->idcardconfirm = $this->stdResult->{"idcardconfirm"};
        }
        if (array_key_exists ( "imageuploaded", $this->stdResult )) {
            $this->imageuploaded = $this->stdResult->{"imageuploaded"};
        }
        if (array_key_exists ( "industryid", $this->stdResult )) {
            $this->industryid = $this->stdResult->{"industryid"};
        }
        if (array_key_exists ( "isaddressvalidate", $this->stdResult )) {
            $this->isaddressvalidate = $this->stdResult->{"isaddressvalidate"};
        }
        if (array_key_exists ( "isDhportUser", $this->stdResult )) {
            $this->isDhportUser = $this->stdResult->{"isDhportUser"};
        }
        if (array_key_exists ( "isenterprice", $this->stdResult )) {
            $this->isenterprice = $this->stdResult->{"isenterprice"};
        }
        if (array_key_exists ( "isescrow", $this->stdResult )) {
            $this->isescrow = $this->stdResult->{"isescrow"};
        }
        if (array_key_exists ( "isfactory", $this->stdResult )) {
            $this->isfactory = $this->stdResult->{"isfactory"};
        }
        if (array_key_exists ( "ispowerseller", $this->stdResult )) {
            $this->ispowerseller = $this->stdResult->{"ispowerseller"};
        }
        if (array_key_exists ( "isreadchina", $this->stdResult )) {
            $this->isreadchina = $this->stdResult->{"isreadchina"};
        }
        if (array_key_exists ( "isreadhkpost", $this->stdResult )) {
            $this->isreadhkpost = $this->stdResult->{"isreadhkpost"};
        }
        if (array_key_exists ( "isreadocean", $this->stdResult )) {
            $this->isreadocean = $this->stdResult->{"isreadocean"};
        }
        if (array_key_exists ( "isreadrmb", $this->stdResult )) {
            $this->isreadrmb = $this->stdResult->{"isreadrmb"};
        }
        if (array_key_exists ( "isrepeat", $this->stdResult )) {
            $this->isrepeat = $this->stdResult->{"isrepeat"};
        }
        if (array_key_exists ( "learnaboutid", $this->stdResult )) {
            $this->learnaboutid = $this->stdResult->{"learnaboutid"};
        }
        if (array_key_exists ( "mainbusinessover", $this->stdResult )) {
            $this->mainbusinessover = $this->stdResult->{"mainbusinessover"};
        }
        if (array_key_exists ( "mainbusinessproduct", $this->stdResult )) {
            $this->mainbusinessproduct = $this->stdResult->{"mainbusinessproduct"};
        }
        if (array_key_exists ( "maincata", $this->stdResult )) {
            $this->maincata = $this->stdResult->{"maincata"};
        }
        if (array_key_exists ( "maincatabylist", $this->stdResult )) {
            $this->maincatabylist = $this->stdResult->{"maincatabylist"};
        }
        if (array_key_exists ( "maxlevel", $this->stdResult )) {
            $this->maxlevel = $this->stdResult->{"maxlevel"};
        }
        if (array_key_exists ( "modifiedby", $this->stdResult )) {
            $this->modifiedby = $this->stdResult->{"modifiedby"};
        }
        if (array_key_exists ( "modifiedon", $this->stdResult )) {
            $this->modifiedon = $this->stdResult->{"modifiedon"};
        }
        if (array_key_exists ( "operatelevel", $this->stdResult )) {
            $this->operatelevel = $this->stdResult->{"operatelevel"};
        }
        if (array_key_exists ( "owningbusinessunitid", $this->stdResult )) {
            $this->owningbusinessunitid = $this->stdResult->{"owningbusinessunitid"};
        }
        if (array_key_exists ( "owninguserid", $this->stdResult )) {
            $this->owninguserid = $this->stdResult->{"owninguserid"};
        }
        if (array_key_exists ( "payouttype", $this->stdResult )) {
            $this->payouttype = $this->stdResult->{"payouttype"};
        }
        if (array_key_exists ( "payseqno", $this->stdResult )) {
            $this->payseqno = $this->stdResult->{"payseqno"};
        }
        if (array_key_exists ( "payway", $this->stdResult )) {
            $this->payway = $this->stdResult->{"payway"};
        }
        if (array_key_exists ( "pervalue", $this->stdResult )) {
            $this->pervalue = $this->stdResult->{"pervalue"};
        }
        if (array_key_exists ( "provincestate", $this->stdResult )) {
            $this->provincestate = $this->stdResult->{"provincestate"};
        }
        if (array_key_exists ( "readNewsyiInstruction", $this->stdResult )) {
            $this->readNewsyiInstruction = $this->stdResult->{"readNewsyiInstruction"};
        }
        if (array_key_exists ( "recommendor", $this->stdResult )) {
            $this->recommendor = $this->stdResult->{"recommendor"};
        }
        if (array_key_exists ( "regstatus", $this->stdResult )) {
            $this->regstatus = $this->stdResult->{"regstatus"};
        }
        if (array_key_exists ( "sellerscore", $this->stdResult )) {
            $this->sellerscore = $this->stdResult->{"sellerscore"};
        }
        if (array_key_exists ( "storeopened", $this->stdResult )) {
            $this->storeopened = $this->stdResult->{"storeopened"};
        }
        if (array_key_exists ( "supplierid", $this->stdResult )) {
            $this->supplierid = $this->stdResult->{"supplierid"};
        }
        if (array_key_exists ( "suppliername", $this->stdResult )) {
            $this->suppliername = $this->stdResult->{"suppliername"};
        }
        if (array_key_exists ( "supplierno", $this->stdResult )) {
            $this->supplierno = $this->stdResult->{"supplierno"};
        }
        if (array_key_exists ( "supplierstatusid", $this->stdResult )) {
            $this->supplierstatusid = $this->stdResult->{"supplierstatusid"};
        }
        if (array_key_exists ( "thirdauthdate", $this->stdResult )) {
            $this->thirdauthdate = $this->stdResult->{"thirdauthdate"};
        }
        if (array_key_exists ( "thirdauthpassdate", $this->stdResult )) {
            $this->thirdauthpassdate = $this->stdResult->{"thirdauthpassdate"};
        }
        if (array_key_exists ( "tnsrelationstatus", $this->stdResult )) {
            $this->tnsrelationstatus = $this->stdResult->{"tnsrelationstatus"};
        }
        if (array_key_exists ( "tnssendmsgflg", $this->stdResult )) {
            $this->tnssendmsgflg = $this->stdResult->{"tnssendmsgflg"};
        }
        if (array_key_exists ( "verify", $this->stdResult )) {
            $this->verify = $this->stdResult->{"verify"};
        }
        if (array_key_exists ( "verifydate", $this->stdResult )) {
            $this->verifydate = $this->stdResult->{"verifydate"};
        }
        if (array_key_exists ( "verifydetail", $this->stdResult )) {
            $this->verifydetail = $this->stdResult->{"verifydetail"};
        }
        if (array_key_exists ( "verifyreport", $this->stdResult )) {
            $this->verifyreport = $this->stdResult->{"verifyreport"};
        }
        if (array_key_exists ( "vipdiscountflag", $this->stdResult )) {
            $this->vipdiscountflag = $this->stdResult->{"vipdiscountflag"};
        }
        if (array_key_exists ( "visitaliflag", $this->stdResult )) {
            $this->visitaliflag = $this->stdResult->{"visitaliflag"};
        }
        if (array_key_exists ( "visitfromtype", $this->stdResult )) {
            $this->visitfromtype = $this->stdResult->{"visitfromtype"};
        }
        if (array_key_exists ( "webaddress", $this->stdResult )) {
            $this->webaddress = $this->stdResult->{"webaddress"};
        }
        if (array_key_exists ( "wherehadoperate", $this->stdResult )) {
            $this->wherehadoperate = $this->stdResult->{"wherehadoperate"};
        }
        if (array_key_exists ( "zip", $this->stdResult )) {
            $this->zip = $this->stdResult->{"zip"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "adGroup", $this->arrayResult )) {
            $this->adGroup = $arrayResult['adGroup'];
        }
        if (array_key_exists ( "adKeywords", $this->arrayResult )) {
            $this->adKeywords = $arrayResult['adKeywords'];
        }
        if (array_key_exists ( "adSeries", $this->arrayResult )) {
            $this->adSeries = $arrayResult['adSeries'];
        }
        if (array_key_exists ( "agreeLr", $this->arrayResult )) {
            $this->agreeLr = $arrayResult['agreeLr'];
        }
        if (array_key_exists ( "areacode", $this->arrayResult )) {
            $this->areacode = $arrayResult['areacode'];
        }
        if (array_key_exists ( "businesstypeid", $this->arrayResult )) {
            $this->businesstypeid = $arrayResult['businesstypeid'];
        }
        if (array_key_exists ( "checktype4seller", $this->arrayResult )) {
            $this->checktype4seller = $arrayResult['checktype4seller'];
        }
        if (array_key_exists ( "city", $this->arrayResult )) {
            $this->city = $arrayResult['city'];
        }
        if (array_key_exists ( "citystate", $this->arrayResult )) {
            $this->citystate = $arrayResult['citystate'];
        }
        if (array_key_exists ( "companycode", $this->arrayResult )) {
            $this->companycode = $arrayResult['companycode'];
        }
        if (array_key_exists ( "companytype", $this->arrayResult )) {
            $this->companytype = $arrayResult['companytype'];
        }
        if (array_key_exists ( "contactpersonid", $this->arrayResult )) {
            $this->contactpersonid = $arrayResult['contactpersonid'];
        }
        if (array_key_exists ( "corporator", $this->arrayResult )) {
            $this->corporator = $arrayResult['corporator'];
        }
        if (array_key_exists ( "countrycode", $this->arrayResult )) {
            $this->countrycode = $arrayResult['countrycode'];
        }
        if (array_key_exists ( "countryname", $this->arrayResult )) {
            $this->countryname = $arrayResult['countryname'];
        }
        if (array_key_exists ( "createdby", $this->arrayResult )) {
            $this->createdby = $arrayResult['createdby'];
        }
        if (array_key_exists ( "createdon", $this->arrayResult )) {
            $this->createdon = $arrayResult['createdon'];
        }
        if (array_key_exists ( "curlevel", $this->arrayResult )) {
            $this->curlevel = $arrayResult['curlevel'];
        }
        if (array_key_exists ( "department", $this->arrayResult )) {
            $this->department = $arrayResult['department'];
        }
        if (array_key_exists ( "dhportUserId", $this->arrayResult )) {
            $this->dhportUserId = $arrayResult['dhportUserId'];
        }
        if (array_key_exists ( "ecContactperson", $this->arrayResult )) {
            $this->ecContactperson = $arrayResult['ecContactperson'];
        }
        if (array_key_exists ( "ecEmail", $this->arrayResult )) {
            $this->ecEmail = $arrayResult['ecEmail'];
        }
        if (array_key_exists ( "ecFaxno", $this->arrayResult )) {
            $this->ecFaxno = $arrayResult['ecFaxno'];
        }
        if (array_key_exists ( "ecMailingaddress", $this->arrayResult )) {
            $this->ecMailingaddress = $arrayResult['ecMailingaddress'];
        }
        if (array_key_exists ( "ecMobilephone", $this->arrayResult )) {
            $this->ecMobilephone = $arrayResult['ecMobilephone'];
        }
        if (array_key_exists ( "ecTel", $this->arrayResult )) {
            $this->ecTel = $arrayResult['ecTel'];
        }
        if (array_key_exists ( "evaluatestatus", $this->arrayResult )) {
            $this->evaluatestatus = $arrayResult['evaluatestatus'];
        }
        if (array_key_exists ( "factorypaytype", $this->arrayResult )) {
            $this->factorypaytype = $arrayResult['factorypaytype'];
        }
        if (array_key_exists ( "factoryregtype", $this->arrayResult )) {
            $this->factoryregtype = $arrayResult['factoryregtype'];
        }
        if (array_key_exists ( "factoryvalidtime", $this->arrayResult )) {
            $this->factoryvalidtime = $arrayResult['factoryvalidtime'];
        }
        if (array_key_exists ( "firstListproDate", $this->arrayResult )) {
            $this->firstListproDate = $arrayResult['firstListproDate'];
        }
        if (array_key_exists ( "foundedtime", $this->arrayResult )) {
            $this->foundedtime = $arrayResult['foundedtime'];
        }
        if (array_key_exists ( "fromdetailinfo", $this->arrayResult )) {
            $this->fromdetailinfo = $arrayResult['fromdetailinfo'];
        }
        if (array_key_exists ( "fromtype", $this->arrayResult )) {
            $this->fromtype = $arrayResult['fromtype'];
        }
        if (array_key_exists ( "frozendate", $this->arrayResult )) {
            $this->frozendate = $arrayResult['frozendate'];
        }
        if (array_key_exists ( "frozenstate", $this->arrayResult )) {
            $this->frozenstate = $arrayResult['frozenstate'];
        }
        if (array_key_exists ( "grade", $this->arrayResult )) {
            $this->grade = $arrayResult['grade'];
        }
        if (array_key_exists ( "gradelevel", $this->arrayResult )) {
            $this->gradelevel = $arrayResult['gradelevel'];
        }
        if (array_key_exists ( "gradenumber", $this->arrayResult )) {
            $this->gradenumber = $arrayResult['gradenumber'];
        }
        if (array_key_exists ( "haspromotionproducts", $this->arrayResult )) {
            $this->haspromotionproducts = $arrayResult['haspromotionproducts'];
        }
        if (array_key_exists ( "haswebstore", $this->arrayResult )) {
            $this->haswebstore = $arrayResult['haswebstore'];
        }
        if (array_key_exists ( "howtofinddhgate", $this->arrayResult )) {
            $this->howtofinddhgate = $arrayResult['howtofinddhgate'];
        }
        if (array_key_exists ( "idcardconfirm", $this->arrayResult )) {
            $this->idcardconfirm = $arrayResult['idcardconfirm'];
        }
        if (array_key_exists ( "imageuploaded", $this->arrayResult )) {
            $this->imageuploaded = $arrayResult['imageuploaded'];
        }
        if (array_key_exists ( "industryid", $this->arrayResult )) {
            $this->industryid = $arrayResult['industryid'];
        }
        if (array_key_exists ( "isaddressvalidate", $this->arrayResult )) {
            $this->isaddressvalidate = $arrayResult['isaddressvalidate'];
        }
        if (array_key_exists ( "isDhportUser", $this->arrayResult )) {
            $this->isDhportUser = $arrayResult['isDhportUser'];
        }
        if (array_key_exists ( "isenterprice", $this->arrayResult )) {
            $this->isenterprice = $arrayResult['isenterprice'];
        }
        if (array_key_exists ( "isescrow", $this->arrayResult )) {
            $this->isescrow = $arrayResult['isescrow'];
        }
        if (array_key_exists ( "isfactory", $this->arrayResult )) {
            $this->isfactory = $arrayResult['isfactory'];
        }
        if (array_key_exists ( "ispowerseller", $this->arrayResult )) {
            $this->ispowerseller = $arrayResult['ispowerseller'];
        }
        if (array_key_exists ( "isreadchina", $this->arrayResult )) {
            $this->isreadchina = $arrayResult['isreadchina'];
        }
        if (array_key_exists ( "isreadhkpost", $this->arrayResult )) {
            $this->isreadhkpost = $arrayResult['isreadhkpost'];
        }
        if (array_key_exists ( "isreadocean", $this->arrayResult )) {
            $this->isreadocean = $arrayResult['isreadocean'];
        }
        if (array_key_exists ( "isreadrmb", $this->arrayResult )) {
            $this->isreadrmb = $arrayResult['isreadrmb'];
        }
        if (array_key_exists ( "isrepeat", $this->arrayResult )) {
            $this->isrepeat = $arrayResult['isrepeat'];
        }
        if (array_key_exists ( "learnaboutid", $this->arrayResult )) {
            $this->learnaboutid = $arrayResult['learnaboutid'];
        }
        if (array_key_exists ( "mainbusinessover", $this->arrayResult )) {
            $this->mainbusinessover = $arrayResult['mainbusinessover'];
        }
        if (array_key_exists ( "mainbusinessproduct", $this->arrayResult )) {
            $this->mainbusinessproduct = $arrayResult['mainbusinessproduct'];
        }
        if (array_key_exists ( "maincata", $this->arrayResult )) {
            $this->maincata = $arrayResult['maincata'];
        }
        if (array_key_exists ( "maincatabylist", $this->arrayResult )) {
            $this->maincatabylist = $arrayResult['maincatabylist'];
        }
        if (array_key_exists ( "maxlevel", $this->arrayResult )) {
            $this->maxlevel = $arrayResult['maxlevel'];
        }
        if (array_key_exists ( "modifiedby", $this->arrayResult )) {
            $this->modifiedby = $arrayResult['modifiedby'];
        }
        if (array_key_exists ( "modifiedon", $this->arrayResult )) {
            $this->modifiedon = $arrayResult['modifiedon'];
        }
        if (array_key_exists ( "operatelevel", $this->arrayResult )) {
            $this->operatelevel = $arrayResult['operatelevel'];
        }
        if (array_key_exists ( "owningbusinessunitid", $this->arrayResult )) {
            $this->owningbusinessunitid = $arrayResult['owningbusinessunitid'];
        }
        if (array_key_exists ( "owninguserid", $this->arrayResult )) {
            $this->owninguserid = $arrayResult['owninguserid'];
        }
        if (array_key_exists ( "payouttype", $this->arrayResult )) {
            $this->payouttype = $arrayResult['payouttype'];
        }
        if (array_key_exists ( "payseqno", $this->arrayResult )) {
            $this->payseqno = $arrayResult['payseqno'];
        }
        if (array_key_exists ( "payway", $this->arrayResult )) {
            $this->payway = $arrayResult['payway'];
        }
        if (array_key_exists ( "pervalue", $this->arrayResult )) {
            $this->pervalue = $arrayResult['pervalue'];
        }
        if (array_key_exists ( "provincestate", $this->arrayResult )) {
            $this->provincestate = $arrayResult['provincestate'];
        }
        if (array_key_exists ( "readNewsyiInstruction", $this->arrayResult )) {
            $this->readNewsyiInstruction = $arrayResult['readNewsyiInstruction'];
        }
        if (array_key_exists ( "recommendor", $this->arrayResult )) {
            $this->recommendor = $arrayResult['recommendor'];
        }
        if (array_key_exists ( "regstatus", $this->arrayResult )) {
            $this->regstatus = $arrayResult['regstatus'];
        }
        if (array_key_exists ( "sellerscore", $this->arrayResult )) {
            $this->sellerscore = $arrayResult['sellerscore'];
        }
        if (array_key_exists ( "storeopened", $this->arrayResult )) {
            $this->storeopened = $arrayResult['storeopened'];
        }
        if (array_key_exists ( "supplierid", $this->arrayResult )) {
            $this->supplierid = $arrayResult['supplierid'];
        }
        if (array_key_exists ( "suppliername", $this->arrayResult )) {
            $this->suppliername = $arrayResult['suppliername'];
        }
        if (array_key_exists ( "supplierno", $this->arrayResult )) {
            $this->supplierno = $arrayResult['supplierno'];
        }
        if (array_key_exists ( "supplierstatusid", $this->arrayResult )) {
            $this->supplierstatusid = $arrayResult['supplierstatusid'];
        }
        if (array_key_exists ( "thirdauthdate", $this->arrayResult )) {
            $this->thirdauthdate = $arrayResult['thirdauthdate'];
        }
        if (array_key_exists ( "thirdauthpassdate", $this->arrayResult )) {
            $this->thirdauthpassdate = $arrayResult['thirdauthpassdate'];
        }
        if (array_key_exists ( "tnsrelationstatus", $this->arrayResult )) {
            $this->tnsrelationstatus = $arrayResult['tnsrelationstatus'];
        }
        if (array_key_exists ( "tnssendmsgflg", $this->arrayResult )) {
            $this->tnssendmsgflg = $arrayResult['tnssendmsgflg'];
        }
        if (array_key_exists ( "verify", $this->arrayResult )) {
            $this->verify = $arrayResult['verify'];
        }
        if (array_key_exists ( "verifydate", $this->arrayResult )) {
            $this->verifydate = $arrayResult['verifydate'];
        }
        if (array_key_exists ( "verifydetail", $this->arrayResult )) {
            $this->verifydetail = $arrayResult['verifydetail'];
        }
        if (array_key_exists ( "verifyreport", $this->arrayResult )) {
            $this->verifyreport = $arrayResult['verifyreport'];
        }
        if (array_key_exists ( "vipdiscountflag", $this->arrayResult )) {
            $this->vipdiscountflag = $arrayResult['vipdiscountflag'];
        }
        if (array_key_exists ( "visitaliflag", $this->arrayResult )) {
            $this->visitaliflag = $arrayResult['visitaliflag'];
        }
        if (array_key_exists ( "visitfromtype", $this->arrayResult )) {
            $this->visitfromtype = $arrayResult['visitfromtype'];
        }
        if (array_key_exists ( "webaddress", $this->arrayResult )) {
            $this->webaddress = $arrayResult['webaddress'];
        }
        if (array_key_exists ( "wherehadoperate", $this->arrayResult )) {
            $this->wherehadoperate = $arrayResult['wherehadoperate'];
        }
        if (array_key_exists ( "zip", $this->arrayResult )) {
            $this->zip = $arrayResult['zip'];
        }
    }
}