<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/12
 * Time: 11:12
 */
namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateAlbum;
use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
class DhgateAlbumGetResult{
    /*
     * albWindowId
     * 返回参数
     */
    private $albWindowId;
    public function getAlbWindowId(){
        return $this->albWindowId;
    }
    /*
   * albName
   * 返回参数
   */
private $albName;
    public function getAlbName(){
        return $this->albName;
    }
    /*
   * albNumber
   * 返回参数
   */
private $albNumber;
    public function getAlbNumber(){
        return $this->albNumber;
    }
    /*
   * spaceSize
   * 返回参数
   */
private $spaceSize;
    public function getSpaceSize(){
        return $this->spaceSize;
    }
    /*
   * insertDate
   * 返回参数
   */
private $insertDate;
    public function getInsertDate(){
        return $this->insertDate;
    }
    /*
   * udpateDate
   * 返回参数
   */
private $udpateDate;
    public function getUdpateDate(){
        return $this->udpateDate;
    }
    /*
* defAlbum
* 返回参数
*/
    private $defAlbum;
    public function getDefAlbum(){
        return $this->defAlbum;
    }
    /*
* firstImg
* 返回参数
*/
    private $firstImg;
    public function getFirstImg(){
        return $this->firstImg;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("albWindowId", $this->stdResult)) {
            $this->albWindowId = $this->stdResult->{"albWindowId"};
        }
        if (array_key_exists('albName', $this->stdResult)) {
            $this->albName = $this->stdResult->{"albName"};
        }
        if (array_key_exists('albNumber', $this->stdResult)) {
            $this->albNumber = $this->stdResult->{"albNumber"};
        }
        if (array_key_exists('spaceSize', $this->stdResult)) {
            $this->spaceSize = $this->stdResult->{"spaceSize"};
        }
        if (array_key_exists('insertDate', $this->stdResult)) {
            $this->insertDate = $this->stdResult->{"insertDate"};
        }
        if (array_key_exists('udpateDate', $this->stdResult)) {
            $this->udpateDate = $this->stdResult->{"udpateDate"};
        }
        if (array_key_exists('defAlbum', $this->stdResult)) {
            $this->defAlbum = $this->stdResult->{"defAlbum"};
        }
        if (array_key_exists('firstImg', $this->stdResult)) {
            $this->firstImg = $this->stdResult->{"firstImg"};
        }

    }
}

