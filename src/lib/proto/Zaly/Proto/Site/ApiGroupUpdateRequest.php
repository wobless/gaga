<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_group_update.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.group.update
 *
 * Generated from protobuf message <code>site.ApiGroupUpdateRequest</code>
 */
class ApiGroupUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string groupId = 1;</code>
     */
    private $groupId = '';
    /**
     * Generated from protobuf field <code>repeated .site.ApiGroupUpdateValue values = 2;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $groupId
     *     @type \Zaly\Proto\Site\ApiGroupUpdateValue[]|\Google\Protobuf\Internal\RepeatedField $values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiGroupUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string groupId = 1;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Generated from protobuf field <code>string groupId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->groupId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .site.ApiGroupUpdateValue values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .site.ApiGroupUpdateValue values = 2;</code>
     * @param \Zaly\Proto\Site\ApiGroupUpdateValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zaly\Proto\Site\ApiGroupUpdateValue::class);
        $this->values = $arr;

        return $this;
    }

}

