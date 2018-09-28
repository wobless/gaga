<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_site_login.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.site.login
 * error:
 *     error.needRegister
 *
 * Generated from protobuf message <code>site.ApiSiteLoginRequest</code>
 */
class ApiSiteLoginRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     */
    private $preSessionId = '';
    /**
     * Generated from protobuf field <code>string devicePubkPem = 2;</code>
     */
    private $devicePubkPem = '';
    /**
     * Generated from protobuf field <code>string loginName = 3;</code>
     */
    private $loginName = '';
    /**
     * Generated from protobuf field <code>bool isRegister = 4;</code>
     */
    private $isRegister = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $preSessionId
     *     @type string $devicePubkPem
     *     @type string $loginName
     *     @type bool $isRegister
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiSiteLogin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     * @return string
     */
    public function getPreSessionId()
    {
        return $this->preSessionId;
    }

    /**
     * Generated from protobuf field <code>string preSessionId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPreSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->preSessionId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string devicePubkPem = 2;</code>
     * @return string
     */
    public function getDevicePubkPem()
    {
        return $this->devicePubkPem;
    }

    /**
     * Generated from protobuf field <code>string devicePubkPem = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDevicePubkPem($var)
    {
        GPBUtil::checkString($var, True);
        $this->devicePubkPem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string loginName = 3;</code>
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Generated from protobuf field <code>string loginName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginName($var)
    {
        GPBUtil::checkString($var, True);
        $this->loginName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isRegister = 4;</code>
     * @return bool
     */
    public function getIsRegister()
    {
        return $this->isRegister;
    }

    /**
     * Generated from protobuf field <code>bool isRegister = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRegister($var)
    {
        GPBUtil::checkBool($var);
        $this->isRegister = $var;

        return $this;
    }

}

