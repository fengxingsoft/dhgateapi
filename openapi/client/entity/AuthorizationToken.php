<?php
namespace com\dhgate\openapi\client\entity;
class AuthorizationToken {

    private $access_token;
    private $refresh_token;
    private $expires_in;
    private $scope;

    public function setAccessToken($accessToken) {
        $this->access_token = $accessToken;
    }
    public function getAccessToken() {
        return $this->access_token;
    }
    public function setReferToken($refresh_token) {
        $this->refresh_token = $refresh_token;
    }
    public function getReferToken() {
        return $this->refresh_token;
    }
    public function getExpireIn(){
        return $this->expires_in;
    }
    public function setScope($scope){
        $this->refresh_token = $scope;
    }
    public function getScope(){
        return $this->scope;
    }

    private $stdResult;
    public function setStdResult($stdResult) {
        $this->stdResult = $stdResult;
        if (array_key_exists ( "access_token", $this->stdResult )) {
            $this->access_token = $this->stdResult->{"access_token"};
        }
        if (array_key_exists ( "refresh_token", $this->stdResult )) {
            $this->refresh_token = $this->stdResult->{"refresh_token"};
        }
        if (array_key_exists ( "expires_in", $this->stdResult )) {
            $this->expires_in = $this->stdResult->{"expires_in"};
        }
        if (array_key_exists ( "scope", $this->stdResult )) {
            $this->scope = $this->stdResult->{"scope"};
        }


    }

}
?>