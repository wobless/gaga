<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_passport_password_updateInvitationCode.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.passport.password.updateInvitationCode
 * 
 *
 * Generated from protobuf message <code>site.ApiPassportPasswordUpdateInvitationCodeRequest</code>
 */
class ApiPassportPasswordUpdateInvitationCodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sitePubkPem = 1;</code>
     */
    private $sitePubkPem = '';
    /**
     * Generated from protobuf field <code>string invitationCode = 2;</code>
     */
    private $invitationCode = '';
    /**
     * Generated from protobuf field <code>string preSessionId = 3;</code>
     */
    private $preSessionId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sitePubkPem
     *     @type string $invitationCode
     *     @type string $preSessionId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiPassportPasswordUpdateInvitationCode::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sitePubkPem = 1;</code>
     * @return string
     */
    public function getSitePubkPem()
    {
        return $this->sitePubkPem;
    }

    /**
     * Generated from protobuf field <code>string sitePubkPem = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSitePubkPem($var)
    {
        GPBUtil::checkString($var, True);
        $this->sitePubkPem = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string invitationCode = 2;</code>
     * @return string
     */
    public function getInvitationCode()
    {
        return $this->invitationCode;
    }

    /**
     * Generated from protobuf field <code>string invitationCode = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInvitationCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->invitationCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string preSessionId = 3;</code>
     * @return string
     */
    public function getPreSessionId()
    {
        return $this->preSessionId;
    }

    /**
     * Generated from protobuf field <code>string preSessionId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPreSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->preSessionId = $var;

        return $this;
    }

}

