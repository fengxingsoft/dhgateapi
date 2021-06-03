<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/14
 * Time: 14:29
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateBase;
class DhgateBaseCountrysGetInfo
{
    /*
     * area
     * @return String 	必须
     * 区域
     */
    private $area;

    public function GetArea()
    {
        return $this->area;
    }

    /*
     * callingcode
     * @Return String 	必须
     * 国家区号代码 	如中国为86
     */
    private $callingcode;

    public function GetCallingcode()
    {
        return $this->callingcode;
    }

    /*
     * countrycode
     * @return String 	必须
     * 国家代码
     */
    private $countrycode;

    public function GetCountrycode()
    {
        return $this->countrycode;
    }

    /*
     * countryid
     * @return String 	必须
     * 国家ID 	国家ID
     */
    private $countryid;

    public function GetCountryid()
    {
        return $this->countryid;
    }

    /*
     * currency
     * String 	必须
     * 币种 	如中国币种为RMB
     */
    private $currency;

    public function GetCurrency()
    {
        return $this->currency;
    }

    /*
     * description
     * String 	必须
     * 描述
     */
    private $description;

    public function GetDescription()
    {
        return $this->description;
    }

    /*
     * name
     * String 	必须
     * 国家名称
     */

    private $name;

    public function GetName()
    {
        return $this->name;
    }

    /*
     * sortvalue
     * BigDecimal 	必须
     * 排序值
     */
    private $sortvalue;

    public function GetSortvalue()
    {
        return $this->sortvalue;
    }

    /*
     * vaild
     * String 必须
     * 是否有效：1有效 	是否有效：1有效
     */
    private $vaild;

    public function GetVaild()
    {
        return $this->vaild;
    }

    private $chinaarea;

    public function GetChinaArea()
    {
        return $this->chinaarea;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("area", $this->stdResult)) {
            $this->area = $this->stdResult->{"area"};
        }
        if (array_key_exists("callingcode", $this->stdResult)) {
            $this->callingcode = $this->stdResult->{"callingcode"};
        }
        if (array_key_exists("chinaarea", $this->stdResult)) {
            $this->chinaarea = $this->stdResult->{"chinaarea"};
        }
        if (array_key_exists("countrycode", $this->stdResult)) {
            $this->countrycode = $this->stdResult->{"countrycode"};
        }
        if (array_key_exists("countryid", $this->stdResult)) {
            $this->countryid = $this->stdResult->{"countryid"};
        }
        if (array_key_exists("currency", $this->stdResult)) {
            $this->currency = $this->stdResult->{"currency"};
        }
        if (array_key_exists("description", $this->stdResult)) {
            $this->description = $this->stdResult->{"description"};
        }
        if (array_key_exists("name", $this->stdResult)) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists("sortvalue", $this->stdResult)) {
            $this->sortvalue = $this->stdResult->{"sortvalue"};
        }
        if (array_key_exists("vaild", $this->stdResult)) {
            $this->vaild = $this->stdResult->{"vaild"};
        }
    }

    private $arrayResult;

    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("area", $this->arrayResult)) {
            $this->area = $arrayResult['area'];
        }
        if (array_key_exists("callingcode", $this->arrayResult)) {
            $this->callingcode = $arrayResult['callingcode'];
        }
        if (array_key_exists("chinaarea", $this->arrayResult)) {
            $this->chinaarea = $arrayResult['chinaarea'];
        }
        if (array_key_exists("countrycode", $this->arrayResult)) {
            $this->countrycode = $arrayResult['countrycode'];
        }
        if (array_key_exists("countryid", $this->arrayResult)) {
            $this->countryid = $arrayResult['countryid'];
        }
        if (array_key_exists("currency", $this->arrayResult)) {
            $this->currency = $arrayResult['currency'];
        }
        if (array_key_exists("description", $this->arrayResult)) {
            $this->description = $arrayResult['description'];
        }
        if (array_key_exists("name", $this->arrayResult)) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists("sortvalue", $this->arrayResult)) {
            $this->sortvalue = $arrayResult['sortvalue'];
        }
        if (array_key_exists("vaild", $this->arrayResult)) {
            $this->vaild = $arrayResult['vaild'];
        }
    }
}









