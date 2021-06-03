<?php
namespace com\dhgate\openapi\client;
class APIId {

    /**
     * namespace of API, it is required
     *
     * @var string
     */
    var $method;
    /**
     * version of API, optional.
     * If not setup, the default version defined in requestPolicy is used.
     * @var integer
     */
    var $version;
    public function __construct($method,$version) {
        $this->method = $method;
        $this->version = $version;
    }

}
?>