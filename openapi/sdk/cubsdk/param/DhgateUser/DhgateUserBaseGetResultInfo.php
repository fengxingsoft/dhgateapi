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

class DhgateUserBaseGetResultInfo
{

/*
 * appid 	String 	必须 	用户所属平台 	用户所属平台
 */
    private $appid;
    public function GetAppid(){
        return $this->appid ;
    }
/*
 * businessunitid 	String 	必须 	部门主键 	部门主键
 */
    private $businessunitid;
    public function GetBusinessunitid(){
        return $this->businessunitid ;
    }
/*
 * cellphoneisvalid 	String 	必须 	是否验证了手机号 	是否验证了手机号
 */
    private $cellphoneisvalid;
    public function GetCellphoneisvalid(){
        return $this->cellphoneisvalid ;
    }
/*
 * contactpersonid 	String 	必须 	Dhgate,第三方认证的详细状态码 	Dhgate,第三方认证的详细状态码
 */
    private $contactpersonid;
    public function GetContactpersonid(){
        return $this->contactpersonid ;
    }
/*
 * ecInternalemailaddress 	String 	必须 	MSN 	MSN
 */
    private $ecInternalemailaddress;
    public function GetEcInternalemailaddress(){
        return $this->ecInternalemailaddress ;
    }
/*
 * ecMobilephone 	String 	必须 	移动电话 	移动电话
 */
    private $ecMobilephone;
    public function GetEcMobilephone(){
        return $this->ecMobilephone ;
    }
/*
 * ecPersonalemailaddress 	String 	必须 	email地址 	email地址
 */
    private $ecPersonalemailaddress;
    public function GetEcPersonalemailaddress(){
        return $this->ecPersonalemailaddress ;
    }
/*
 * ecPremail 	String 	必须 	准备使用的Email 	准备使用的Email
 */
    private $ecPremail;
    public function GetEcPremail(){
        return $this->ecPremail ;
    }
/*
 * ecQq 	String 	必须 	qq号码 	qq号码
 */
    private $ecQq;
    public function GetEcQq(){
        return $this->ecQq ;
    }
/*
 * emailisvalid 	String 	必须 	邮件是否验证,0:未验证,1:已验 	邮件是否验证,0:未验证,1:已验
 */
    private $emailisvalid;
    public function GetEmailisvalid(){
        return $this->emailisvalid ;
    }
/*
 * firstname 	String 	必须 	FIRSTNAME 	FIRSTNAME
 */
    private $firstname;
    public function GetFirstname(){
        return $this->firstname ;
    }
/*
 * fromip 	String 	必须 	来源IP 	来源IP
 */
    private $fromip;
    public function GetFromip(){
        return $this->fromip ;
    }
/*
 * fullname 	String 	必须 	FULLNAME 	FULLNAME
 */
    private $fullname;
    public function GetFullname(){
        return $this->fullname ;
    }
/*
 * gender 	String 	必须 	性别 	性别
 */
    private $gender;
    public function GetGender(){
        return $this->gender ;
    }
/*
 * homephone 	String 	必须 	住宅电话 	住宅电话
 */
    private $homephone;
    public function GetHomephone(){
        return $this->homephone ;
    }
/*
 * idcard 	String 	必须 	身份证号 	身份证号
 */
    private $idcard;
    public function GetIdcard(){
        return $this->idcard ;
    }
/*
 * idcardurl 	String 	必须 	身份证图片 	身份证图片
 */
    private $idcardurl;
    public function GetIdcardurl(){
        return $this->idcardurl ;
    }
/*
 * isdisabled 	String 	必须 	是否可用 	是否可用
 */
    private $isdisabled;
    public function GetIsdisabled(){
        return $this->isdisabled ;
    }
/*
 * jobtitle 	String 	必须 	工作职位 	工作职位
 */
    private $jobtitle;
    public function GetJobtitle(){
        return $this->jobtitle ;
    }
/*
 * lastlogondate 	Date 	必须 	最后登录时间 	最后登录时间
 */
    private $lastlogondate;
    public function GetLastlogondate(){
        return $this->lastlogondate ;
    }
/*
 * lastname 	String 	必须 	LASTNAME 	LASTNAME
 */
    private $lastname;
    public function GetLastname(){
        return $this->lastname ;
    }
/*
 * logoncount 	Long 	必须 	登录次数 	登录次数
 */
    private $logoncount;
    public function GetLogoncount(){
        return $this->logoncount ;
    }
/*
 * middlename 	String 	必须 	MIDDLENAME 	MIDDLENAME
 */
    private $middlename;
    public function GetMiddlename(){
        return $this->middlename ;
    }
/*
 * mobileisvalid 	String 	必须 	手机是否通过校验，0为未通过，1为通过 	手机是否通过校验，0为未通过，1为通过
 */
    private $mobileisvalid;
    public function GetMobileisvalid(){
        return $this->mobileisvalid ;
    }
/*
 * nickname 	String 	必须 	昵称 	昵称
 */
    private $nickname;
    public function GetNickname(){
        return $this->nickname ;
    }
/*
 * organizationid 	String 	必须 	公司主键 	公司主键
 */
    private $organizationid;
    public function GetOrganizationid(){
        return $this->organizationid ;
    }
/*
 * salutation 	String 	必须 	尊称 	尊称
 */
    private $salutation;
    public function GetSalutation(){
        return $this->salutation ;
    }
/*
 * skype 	String 	必须 	skype 	skype
 */
    private $skype;
    public function GetSkype(){
        return $this->skype ;
    }
/*
 * systemuserid 	String 	必须 	主键ID 	主键ID
 */
    private $systemuserid;
    public function GetSystemuserid(){
        return $this->systemuserid ;
    }
/*
 * territoryid 	String 	必须 	行业经理 	行业经理
 */
    private $territoryid;
    public function GetTerritoryid(){
        return $this->territoryid ;
    }
/*
 * title 	String 	必须 	头衔 	头衔
 */
    private $title;
    public function GetTitle(){
        return $this->title ;
    }
/*
 * usertype 	Long 	必须 	用户类型，0老用户，1新用 	用户类型，0老用户，1新用
 */
    private $usertype;
    public function GetUsertype(){
        return $this->usertype ;
    }
/*
 * validupdatedate 	Date 	必须 	邮件验证日期 	邮件验证日期
 */
    private $validupdatedate;
    public function GetValidupdatedate(){
        return $this->validupdatedate ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "appid", $this->stdResult )) {
            $this->appid = $this->stdResult->{"appid"};
        }
        if (array_key_exists ( "businessunitid", $this->stdResult )) {
            $this->businessunitid = $this->stdResult->{"businessunitid"};
        }
        if (array_key_exists ( "cellphoneisvalid", $this->stdResult )) {
            $this->cellphoneisvalid = $this->stdResult->{"cellphoneisvalid"};
        }
        if (array_key_exists ( "contactpersonid", $this->stdResult )) {
            $this->contactpersonid = $this->stdResult->{"contactpersonid"};
        }
        if (array_key_exists ( "ecInternalemailaddress", $this->stdResult )) {
            $this->ecInternalemailaddress = $this->stdResult->{"ecInternalemailaddress"};
        }
        if (array_key_exists ( "ecMobilephone", $this->stdResult )) {
            $this->ecMobilephone = $this->stdResult->{"ecMobilephone"};
        }
        if (array_key_exists ( "ecPersonalemailaddress", $this->stdResult )) {
            $this->ecPersonalemailaddress = $this->stdResult->{"ecPersonalemailaddress"};
        }
        if (array_key_exists ( "ecPremail", $this->stdResult )) {
            $this->ecPremail = $this->stdResult->{"ecPremail"};
        }
        if (array_key_exists ( "ecQq", $this->stdResult )) {
            $this->ecQq = $this->stdResult->{"ecQq"};
        }
        if (array_key_exists ( "emailisvalid", $this->stdResult )) {
            $this->emailisvalid = $this->stdResult->{"emailisvalid"};
        }
        if (array_key_exists ( "firstname", $this->stdResult )) {
            $this->firstname = $this->stdResult->{"firstname"};
        }
        if (array_key_exists ( "fromip", $this->stdResult )) {
            $this->fromip = $this->stdResult->{"fromip"};
        }
        if (array_key_exists ( "fullname", $this->stdResult )) {
            $this->fullname = $this->stdResult->{"fullname"};
        }
        if (array_key_exists ( "gender", $this->stdResult )) {
            $this->gender = $this->stdResult->{"gender"};
        }
        if (array_key_exists ( "homephone", $this->stdResult )) {
            $this->homephone = $this->stdResult->{"homephone"};
        }
        if (array_key_exists ( "idcard", $this->stdResult )) {
            $this->idcard = $this->stdResult->{"idcard"};
        }
        if (array_key_exists ( "idcardurl", $this->stdResult )) {
            $this->idcardurl = $this->stdResult->{"idcardurl"};
        }
        if (array_key_exists ( "isdisabled", $this->stdResult )) {
            $this->isdisabled = $this->stdResult->{"isdisabled"};
        }
        if (array_key_exists ( "jobtitle", $this->stdResult )) {
            $this->jobtitle = $this->stdResult->{"jobtitle"};
        }
        if (array_key_exists ( "lastlogondate", $this->stdResult )) {
            $this->lastlogondate = $this->stdResult->{"lastlogondate"};
        }
        if (array_key_exists ( "lastname", $this->stdResult )) {
            $this->lastname = $this->stdResult->{"lastname"};
        }
        if (array_key_exists ( "logoncount", $this->stdResult )) {
            $this->logoncount = $this->stdResult->{"logoncount"};
        }
        if (array_key_exists ( "middlename", $this->stdResult )) {
            $this->middlename = $this->stdResult->{"middlename"};
        }
        if (array_key_exists ( "mobileisvalid", $this->stdResult )) {
            $this->mobileisvalid = $this->stdResult->{"mobileisvalid"};
        }
        if (array_key_exists ( "nickname", $this->stdResult )) {
            $this->nickname = $this->stdResult->{"nickname"};
        }
        if (array_key_exists ( "organizationid", $this->stdResult )) {
            $this->organizationid = $this->stdResult->{"organizationid"};
        }
        if (array_key_exists ( "salutation", $this->stdResult )) {
            $this->salutation = $this->stdResult->{"salutation"};
        }
        if (array_key_exists ( "skype", $this->stdResult )) {
            $this->skype = $this->stdResult->{"skype"};
        }
        if (array_key_exists ( "systemuserid", $this->stdResult )) {
            $this->systemuserid = $this->stdResult->{"systemuserid"};
        }
        if (array_key_exists ( "territoryid", $this->stdResult )) {
            $this->territoryid = $this->stdResult->{"territoryid"};
        }
        if (array_key_exists ( "title", $this->stdResult )) {
            $this->title = $this->stdResult->{"title"};
        }
        if (array_key_exists ( "usertype", $this->stdResult )) {
            $this->usertype = $this->stdResult->{"usertype"};
        }
        if (array_key_exists ( "validupdatedate", $this->stdResult )) {
            $this->validupdatedate = $this->stdResult->{"validupdatedate"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "appid", $this->arrayResult )) {
            $this->appid = $arrayResult['appid'];
        }
        if (array_key_exists ( "businessunitid", $this->arrayResult )) {
            $this->businessunitid = $arrayResult['businessunitid'];
        }
        if (array_key_exists ( "cellphoneisvalid", $this->arrayResult )) {
            $this->cellphoneisvalid = $arrayResult['cellphoneisvalid'];
        }
        if (array_key_exists ( "contactpersonid", $this->arrayResult )) {
            $this->contactpersonid = $arrayResult['contactpersonid'];
        }
        if (array_key_exists ( "ecInternalemailaddress", $this->arrayResult )) {
            $this->ecInternalemailaddress = $arrayResult['ecInternalemailaddress'];
        }
        if (array_key_exists ( "ecMobilephone", $this->arrayResult )) {
            $this->ecMobilephone = $arrayResult['ecMobilephone'];
        }
        if (array_key_exists ( "ecPersonalemailaddress", $this->arrayResult )) {
            $this->ecPersonalemailaddress = $arrayResult['ecPersonalemailaddress'];
        }
        if (array_key_exists ( "ecPremail", $this->arrayResult )) {
            $this->ecPremail = $arrayResult['ecPremail'];
        }
        if (array_key_exists ( "ecQq", $this->arrayResult )) {
            $this->ecQq = $arrayResult['ecQq'];
        }
        if (array_key_exists ( "emailisvalid", $this->arrayResult )) {
            $this->emailisvalid = $arrayResult['emailisvalid'];
        }
        if (array_key_exists ( "firstname", $this->arrayResult )) {
            $this->firstname = $arrayResult['firstname'];
        }
        if (array_key_exists ( "fromip", $this->arrayResult )) {
            $this->fromip = $arrayResult['fromip'];
        }
        if (array_key_exists ( "fullname", $this->arrayResult )) {
            $this->fullname = $arrayResult['fullname'];
        }
        if (array_key_exists ( "gender", $this->arrayResult )) {
            $this->gender = $arrayResult['gender'];
        }
        if (array_key_exists ( "homephone", $this->arrayResult )) {
            $this->homephone = $arrayResult['homephone'];
        }
        if (array_key_exists ( "idcard", $this->arrayResult )) {
            $this->idcard = $arrayResult['idcard'];
        }
        if (array_key_exists ( "idcardurl", $this->arrayResult )) {
            $this->idcardurl = $arrayResult['idcardurl'];
        }
        if (array_key_exists ( "isdisabled", $this->arrayResult )) {
            $this->isdisabled = $arrayResult['isdisabled'];
        }
        if (array_key_exists ( "jobtitle", $this->arrayResult )) {
            $this->jobtitle = $arrayResult['jobtitle'];
        }
        if (array_key_exists ( "lastlogondate", $this->arrayResult )) {
            $this->lastlogondate = $arrayResult['lastlogondate'];
        }
        if (array_key_exists ( "lastname", $this->arrayResult )) {
            $this->lastname = $arrayResult['lastname'];
        }
        if (array_key_exists ( "logoncount", $this->arrayResult )) {
            $this->logoncount = $arrayResult['logoncount'];
        }
        if (array_key_exists ( "middlename", $this->arrayResult )) {
            $this->middlename = $arrayResult['middlename'];
        }
        if (array_key_exists ( "mobileisvalid", $this->arrayResult )) {
            $this->mobileisvalid = $arrayResult['mobileisvalid'];
        }
        if (array_key_exists ( "nickname", $this->arrayResult )) {
            $this->nickname = $arrayResult['nickname'];
        }
        if (array_key_exists ( "organizationid", $this->arrayResult )) {
            $this->organizationid = $arrayResult['organizationid'];
        }
        if (array_key_exists ( "salutation", $this->arrayResult )) {
            $this->salutation = $arrayResult['salutation'];
        }
        if (array_key_exists ( "skype", $this->arrayResult )) {
            $this->skype = $arrayResult['skype'];
        }
        if (array_key_exists ( "systemuserid", $this->arrayResult )) {
            $this->systemuserid = $arrayResult['systemuserid'];
        }
        if (array_key_exists ( "territoryid", $this->arrayResult )) {
            $this->territoryid = $arrayResult['territoryid'];
        }
        if (array_key_exists ( "title", $this->arrayResult )) {
            $this->title = $arrayResult['title'];
        }
        if (array_key_exists ( "usertype", $this->arrayResult )) {
            $this->usertype = $arrayResult['usertype'];
        }
        if (array_key_exists ( "validupdatedate", $this->arrayResult )) {
            $this->validupdatedate = $arrayResult['validupdatedate'];
        }
    }
}