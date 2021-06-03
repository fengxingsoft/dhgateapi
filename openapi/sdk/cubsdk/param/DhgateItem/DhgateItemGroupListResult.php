<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateItem;

use ArrayObject;

class DhgateItemGroupListResult
{

    /*
     * count 	long 	必须 	总记录数 	示例值：50
     */
    private $count;

    public function GetCount()
    {
        return $this->count;
    }

    /*
     * itemGroupList 	ItemGroup[] 	必须 	产品组列表 	产品组列表信息
     */
    private $itemGroupList;

    public function GetItemGroupList()
    {
        return $this->itemGroupList;
    }

    /*
     * pageTotal 	int 	必须 	总页数 	示例值：20
     */

    private $pageTotal;

    public function GetPageTotal()
    {
        return $this->pageTotal;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("count", $this->stdResult)) {
            $this->count = $this->stdResult->{"count"};
        }
        if (array_key_exists("itemGroupList", $this->stdResult)) {
            $this->itemGroupList = $this->stdResult->{"itemGroupList"};

        }
        if (array_key_exists("itemGroupList", $this->stdResult)) {
            $itemGroupListResult = $this->stdResult->{"itemGroupList"};
            $object = json_decode(json_encode($itemGroupListResult), true);
            $this->itemGroupList = array();
            for ($i = 0; $i < count($object); $i++) {
                $arrayobject = new ArrayObject ($object [$i]);
                $DhgateAlbumListInfoResult = new DhgateItemGroupListResultInfoItemGroup();
                $DhgateAlbumListInfoResult->setArrayResult($arrayobject);
                $this->itemGroupList[$i] = $DhgateAlbumListInfoResult;
            }
        }
        if (array_key_exists("pageTotal", $this->stdResult)) {
            $this->pageTotal = $this->stdResult->{"pageTotal"};
        }
    }

    private $arrayResult;

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;

        if (array_key_exists("count", $this->arrayResult)) {
            $this->count = $arrayResult['count'];
        }
        if (array_key_exists("itemGroupList", $this->arrayResult)) {
            $this->itemGroupList = $arrayResult['itemGroupList'];
        }
        if (array_key_exists("pageTotal", $this->arrayResult)) {
            $this->pageTotal = $arrayResult['pageTotal'];
        }
    }
}