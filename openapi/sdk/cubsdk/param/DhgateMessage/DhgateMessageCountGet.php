<?php
/**
 * Created by IntelliJ IDEA.
 * User: 风行
 * Date: 2019/3/11
 * Time: 17:49
 */

namespace com\dhgate\openapi\sdk\cubsdk\param\DhgateMessage;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class DhgateMessageCountGet
{
    /*
     * @msgcount
     * 站内信总量接口
     */
    private $msgCount;

    public function getMsgCount()
    {
        return $this->msgCount;
    }

    /*
     * @readCount
     * 已读消息量
     */
    private $readCount;

    public function getReadCount()
    {
        return $this->readCount;
    }

    /*
     * unReadBuyCount
     * 未读买卖消息量
     *
     */
    private $unReadBuyCount;

    public function getUnReadBuyCount()
    {
        return $this->unReadBuyCount;
    }

    /*
     * unReadCount
     * 未读站内信总量
     */
    private $unReadCount;

    public function getUnReadCount()
    {
        return $this->unReadBuyCount;
    }

    /*
     * unReadPlatCount
     * 未读平台公告消息量
     *
     */
    private $unReadPlatCount;

    public function getUnReadPlatCount()
    {
        return $this->unReadPlatCount;
    }

    /*
     * unReadSysCount
     * 未读系统消息量
     */
    private $unReadSysCount;

    public function getUnReadSysCount()
    {
        return $this->unReadSysCount;
    }

    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("msgCount", $this->stdResult)) {
            $this->msgCount = $this->stdResult->{"msgCount"};
        }
        if (array_key_exists('readCount', $this->stdResult)) {
            $this->readCount = $this->stdResult->{"readCount"};
        }
        if (array_key_exists('unReadBuyCount', $this->stdResult)) {
            $this->unReadBuyCount = $this->stdResult->{"unReadBuyCount"};
        }
        if (array_key_exists('unReadCount', $this->stdResult)) {
            $this->unReadCount = $this->stdResult->{"unReadCount"};
        }
        if (array_key_exists('unReadPlatCount', $this->stdResult)) {
            $this->unReadPlatCount = $this->stdResult->{"unReadPlatCount"};
        }
        if (array_key_exists('unReadSysCount', $this->stdResult)) {
            $this->unReadSysCount = $this->stdResult->{"unReadSysCount"};
        }

    }
}