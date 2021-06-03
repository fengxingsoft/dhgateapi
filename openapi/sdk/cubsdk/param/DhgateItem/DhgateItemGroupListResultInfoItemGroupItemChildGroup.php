<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/17
 * Time: 14:47
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;
use  com\alibaba\openapi\client\entity\SDKDomain;
use  com\alibaba\openapi\client\entity\ByteArray;

class DhgateItemGroupListResultInfoItemGroupItemChildGroup
{

    /*
     * groupEnName 	String 	必须 	产品组英文名称 	示例值：outside
     */
    private $groupEnName;
    public function GetGroupEnName(){
        return $this->groupEnName ;
    }
    /*
     * groupId 	String 	必须 	产品组ID 	示例值：ff8080813e407eb0013e7cb3d5b65ecf
     */
    private $groupId;
    public function GetGroupId(){
        return $this->groupId ;
    }
    /*
     * groupName 	String 	必须 	产品组中文名称 	示例值：分类
     */
    private $groupName;
    public function GetGroupName(){
        return $this->groupName ;
    }
    /*
     * itemCount 	Integer 	必须 	产品组下产品数量 	示例值：10
     */
    private $itemCount;
    public function GetItemCount(){
        return $this->itemCount ;
    }
    /*
     * parentGroupId 	String 	必须 	产品组父类ID 	存在父类组返回父类组id,不存在则返回null;示例值：null
     */
    private $parentGroupId;
    public function GetParentGroupId(){
        return $this->parentGroupId ;
    }
    /*
     * remark 	String 	必须 	产品组备注 	示例值：this is …
     */
    private $remark;
    public function GetRemark(){
        return $this->remark ;
    }
    /*
     * showInStore 	Byte 	必须 	店铺是否显示 	该产品组是否在店铺页面可供选择显示，1显示,0不显示；示例值：1
     */
    private $showInStore;
    public function GetShowInStore(){
        return $this->showInStore ;
    }
    /*
     * updateDate 	String 	必须 	最后更新时间 	对产品组最后一次进行修改或其他操作的时间，日期格式：yyyy-MM-dd HH:mm:ss,精确到秒；示例值：2014-01-12 18:20:21；
     */
    private $updateDate;
    public function GetUpdateDate(){
        return $this->updateDate ;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;

        if (array_key_exists ( "groupEnName", $this->stdResult )) {
            $this->groupEnName = $this->stdResult->{"groupEnName"};
        }
        if (array_key_exists ( "groupId", $this->stdResult )) {
            $this->groupId = $this->stdResult->{"groupId"};
        }
        if (array_key_exists ( "groupName", $this->stdResult )) {
            $this->groupName = $this->stdResult->{"groupName"};
        }
        if (array_key_exists ( "itemCount", $this->stdResult )) {
            $this->itemCount = $this->stdResult->{"itemCount"};
        }
        if (array_key_exists ( "parentGroupId", $this->stdResult )) {
            $this->parentGroupId = $this->stdResult->{"parentGroupId"};
        }
        if (array_key_exists ( "remark", $this->stdResult )) {
            $this->remark = $this->stdResult->{"remark"};
        }
        if (array_key_exists ( "showInStore", $this->stdResult )) {
            $this->showInStore = $this->stdResult->{"showInStore"};
        }
        if (array_key_exists ( "updateDate", $this->stdResult )) {
            $this->updateDate = $this->stdResult->{"updateDate"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;

        if (array_key_exists ( "groupEnName", $this->arrayResult )) {
            $this->groupEnName = $arrayResult['groupEnName'];
        }
        if (array_key_exists ( "groupId", $this->arrayResult )) {
            $this->groupId = $arrayResult['groupId'];
        }
        if (array_key_exists ( "groupName", $this->arrayResult )) {
            $this->groupName = $arrayResult['groupName'];
        }
        if (array_key_exists ( "itemCount", $this->arrayResult )) {
            $this->itemCount = $arrayResult['itemCount'];
        }
        if (array_key_exists ( "parentGroupId", $this->arrayResult )) {
            $this->parentGroupId = $arrayResult['parentGroupId'];
        }
        if (array_key_exists ( "remark", $this->arrayResult )) {
            $this->remark = $arrayResult['remark'];
        }
        if (array_key_exists ( "showInStore", $this->arrayResult )) {
            $this->showInStore = $arrayResult['showInStore'];
        }
        if (array_key_exists ( "updateDate", $this->arrayResult )) {
            $this->updateDate = $arrayResult['updateDate'];
        }
    }
}