<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/15
 * Time: 10:39
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateCategory;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use ArrayObject;
class DhgateCategoryBrandListGetResult{
    /*
     * brandAuthList 	BrandAuth[] 	必须 	资质品牌列表信息 	资质品牌列表信息
     */
    private $brandAuthList;
    public function GetBrandAuthList(){
        return $this->brandAuthList;
    }

    /*
     * brandsList 	Brands[] 	必须 	品牌列表信息 	品牌列表信息
     */
    private $brandsList;
    public function GetBrandsList(){
        return $this->brandsList;
    }

    /*
     * page 	int 	必须 	当前页 	示例值：1
     */
    private $page;
    public function GetPage(){
        return $this->page;
    }

    /*
     * pageCount 	int 	必须 	记录总条数 	示例值：50
     */
    private $pageCount;
    public function GetPageCount(){
        return $this->pageCount;
    }

    /*
     * pageSize 	int 	必须 	当前页显示记录条数 	示例值：20
     */
    private $pageSize;
    public function GetPageSize(){
        return $this->pageSize;
    }


    private $stdResult;

    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "brandAuthList", $this->stdResult )) {
            $this->brandAuthList = $this->stdResult->{"brandAuthList"};
        }

        if (array_key_exists ( "brandsList", $this->stdResult )) {
            $this->brandsList = $this->stdResult->{"brandsList"};
        }
        if (array_key_exists ( "brandAuthList", $this->stdResult )) {
            $brandAuthList=$this->stdResult->{"brandAuthList"};
            $object = json_decode ( json_encode ( $brandAuthList ), true );
            $this->brandAuthList = array ();
            for($i = 0; $i < count ( $object ); $i ++) {
                $arrayobject = new ArrayObject ( $object [$i] );
                $DhgateCategoryBrandListGetBrandAuthListInfo=new DhgateCategoryBrandListGetBrandAuthListInfo();
                $DhgateCategoryBrandListGetBrandAuthListInfo->setArrayResult($arrayobject );
                $this->brandAuthList[$i] = $DhgateCategoryBrandListGetBrandAuthListInfo;
            }
        }
        if (array_key_exists ( "brandsList", $this->stdResult )) {
            $brandsListResult=$this->stdResult->{"brandsList"};
            if(!empty($brandsListResult)){
                $object = json_decode ( json_encode ( $brandsListResult), true );
                $this->brandsList = array ();
                for($i = 0; $i < count ( $object ); $i ++) {
                    $arrayobject = new ArrayObject ( $object [$i] );
                    $DhgateCategoryBrandListGetBrandsListInfo=new DhgateCategoryBrandListGetBrandsListInfo();
                    $DhgateCategoryBrandListGetBrandsListInfo->setArrayResult($arrayobject );
                    $this->brandsList[$i] = $DhgateCategoryBrandListGetBrandsListInfo;
                }
            }


        }
        if (array_key_exists ( "page", $this->stdResult )) {
            $this->page = $this->stdResult->{"page"};
        }
        if (array_key_exists ( "pageCount", $this->stdResult )) {
            $this->pageCount = $this->stdResult->{"pageCount"};
        }
        if (array_key_exists ( "pageSize", $this->stdResult )) {
            $this->pageSize = $this->stdResult->{"pageSize"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult) {
        $this->arrayResult = $arrayResult;
        if (array_key_exists ( "brandAuthList", $this->arrayResult )) {
            $brandAuthListResult=$arrayResult['brandAuthList'];
            $this->brandAuthList = new DhgateCategoryBrandListGetBrandAuthListInfo();
            $this->brandAuthList->setStdResult ( $brandAuthListResult);
        }
        if (array_key_exists ( "brandsList", $this->arrayResult )) {
            $brandsListResult=$arrayResult['brandsList'];
            $this->brandAuthList = new DhgateCategoryBrandListGetBrandsListInfo();
            $this->brandAuthList->setStdResult ( $brandsListResult);
        }
        if (array_key_exists ( "page", $this->arrayResult )) {
            $this->page = $arrayResult['page'];
        }
        if (array_key_exists ( "pageCount", $this->arrayResult )) {
            $this->pageCount = $arrayResult['pageCount'];
        }
        if (array_key_exists ( "pageSize", $this->arrayResult )) {
            $this->pageSize = $arrayResult['pageSize'];
        }
    }
}