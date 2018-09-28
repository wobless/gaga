<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_group_update.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.ApiGroupUpdateResponse</code>
 */
class ApiGroupUpdateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.core.PublicGroupProfile profile = 1;</code>
     */
    private $profile = null;
    /**
     * Generated from protobuf field <code>bool isMute = 2;</code>
     */
    private $isMute = false;
    /**
     * Generated from protobuf field <code>.core.GroupMemberType memberType = 3;</code>
     */
    private $memberType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zaly\Proto\Core\PublicGroupProfile $profile
     *     @type bool $isMute
     *     @type int $memberType
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiGroupUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.core.PublicGroupProfile profile = 1;</code>
     * @return \Zaly\Proto\Core\PublicGroupProfile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Generated from protobuf field <code>.core.PublicGroupProfile profile = 1;</code>
     * @param \Zaly\Proto\Core\PublicGroupProfile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\PublicGroupProfile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isMute = 2;</code>
     * @return bool
     */
    public function getIsMute()
    {
        return $this->isMute;
    }

    /**
     * Generated from protobuf field <code>bool isMute = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMute($var)
    {
        GPBUtil::checkBool($var);
        $this->isMute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.GroupMemberType memberType = 3;</code>
     * @return int
     */
    public function getMemberType()
    {
        return $this->memberType;
    }

    /**
     * Generated from protobuf field <code>.core.GroupMemberType memberType = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMemberType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\GroupMemberType::class);
        $this->memberType = $var;

        return $this;
    }

}

