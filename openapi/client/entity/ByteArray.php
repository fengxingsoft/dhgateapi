<?php
namespace com\dhgate\openapi\client\entity;
use ArrayObject;
class ByteArray {

    private $bytesValue;

    public function setBytesValue($bytesValue) {
        $this->bytesValue = $bytesValue;
    }

    public function getByteValue() {
        return $this->bytesValue;
    }
}
?>