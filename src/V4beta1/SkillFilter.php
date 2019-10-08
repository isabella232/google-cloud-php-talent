<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Skill filter of the search.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.SkillFilter</code>
 */
class SkillFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The skill name. For example, "java", "j2ee", and so on.
     *
     * Generated from protobuf field <code>string skill = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $skill = '';
    /**
     * Whether to apply negation to the filter so profiles matching the filter
     * are excluded.
     *
     * Generated from protobuf field <code>bool negated = 2;</code>
     */
    private $negated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $skill
     *           Required. The skill name. For example, "java", "j2ee", and so on.
     *     @type bool $negated
     *           Whether to apply negation to the filter so profiles matching the filter
     *           are excluded.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The skill name. For example, "java", "j2ee", and so on.
     *
     * Generated from protobuf field <code>string skill = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Required. The skill name. For example, "java", "j2ee", and so on.
     *
     * Generated from protobuf field <code>string skill = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSkill($var)
    {
        GPBUtil::checkString($var, True);
        $this->skill = $var;

        return $this;
    }

    /**
     * Whether to apply negation to the filter so profiles matching the filter
     * are excluded.
     *
     * Generated from protobuf field <code>bool negated = 2;</code>
     * @return bool
     */
    public function getNegated()
    {
        return $this->negated;
    }

    /**
     * Whether to apply negation to the filter so profiles matching the filter
     * are excluded.
     *
     * Generated from protobuf field <code>bool negated = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setNegated($var)
    {
        GPBUtil::checkBool($var);
        $this->negated = $var;

        return $this;
    }

}

