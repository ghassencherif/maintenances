<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.FirewallPolicyAssociation</code>
 */
class FirewallPolicyAssociation extends \Google\Protobuf\Internal\Message
{
    /**
     * The target that the firewall policy is attached to.
     *
     * Generated from protobuf field <code>optional string attachment_target = 175773741;</code>
     */
    private $attachment_target = null;
    /**
     * [Output Only] Deprecated, please use short name instead. The display name of the firewall policy of the association.
     *
     * Generated from protobuf field <code>optional string display_name = 4473832;</code>
     */
    private $display_name = null;
    /**
     * [Output Only] The firewall policy ID of the association.
     *
     * Generated from protobuf field <code>optional string firewall_policy_id = 357211849;</code>
     */
    private $firewall_policy_id = null;
    /**
     * The name for an association.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * [Output Only] The short name of the firewall policy of the association.
     *
     * Generated from protobuf field <code>optional string short_name = 492051566;</code>
     */
    private $short_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $attachment_target
     *           The target that the firewall policy is attached to.
     *     @type string $display_name
     *           [Output Only] Deprecated, please use short name instead. The display name of the firewall policy of the association.
     *     @type string $firewall_policy_id
     *           [Output Only] The firewall policy ID of the association.
     *     @type string $name
     *           The name for an association.
     *     @type string $short_name
     *           [Output Only] The short name of the firewall policy of the association.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The target that the firewall policy is attached to.
     *
     * Generated from protobuf field <code>optional string attachment_target = 175773741;</code>
     * @return string
     */
    public function getAttachmentTarget()
    {
        return isset($this->attachment_target) ? $this->attachment_target : '';
    }

    public function hasAttachmentTarget()
    {
        return isset($this->attachment_target);
    }

    public function clearAttachmentTarget()
    {
        unset($this->attachment_target);
    }

    /**
     * The target that the firewall policy is attached to.
     *
     * Generated from protobuf field <code>optional string attachment_target = 175773741;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachmentTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->attachment_target = $var;

        return $this;
    }

    /**
     * [Output Only] Deprecated, please use short name instead. The display name of the firewall policy of the association.
     *
     * Generated from protobuf field <code>optional string display_name = 4473832;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return isset($this->display_name) ? $this->display_name : '';
    }

    public function hasDisplayName()
    {
        return isset($this->display_name);
    }

    public function clearDisplayName()
    {
        unset($this->display_name);
    }

    /**
     * [Output Only] Deprecated, please use short name instead. The display name of the firewall policy of the association.
     *
     * Generated from protobuf field <code>optional string display_name = 4473832;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * [Output Only] The firewall policy ID of the association.
     *
     * Generated from protobuf field <code>optional string firewall_policy_id = 357211849;</code>
     * @return string
     */
    public function getFirewallPolicyId()
    {
        return isset($this->firewall_policy_id) ? $this->firewall_policy_id : '';
    }

    public function hasFirewallPolicyId()
    {
        return isset($this->firewall_policy_id);
    }

    public function clearFirewallPolicyId()
    {
        unset($this->firewall_policy_id);
    }

    /**
     * [Output Only] The firewall policy ID of the association.
     *
     * Generated from protobuf field <code>optional string firewall_policy_id = 357211849;</code>
     * @param string $var
     * @return $this
     */
    public function setFirewallPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->firewall_policy_id = $var;

        return $this;
    }

    /**
     * The name for an association.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name for an association.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * [Output Only] The short name of the firewall policy of the association.
     *
     * Generated from protobuf field <code>optional string short_name = 492051566;</code>
     * @return string
     */
    public function getShortName()
    {
        return isset($this->short_name) ? $this->short_name : '';
    }

    public function hasShortName()
    {
        return isset($this->short_name);
    }

    public function clearShortName()
    {
        unset($this->short_name);
    }

    /**
     * [Output Only] The short name of the firewall policy of the association.
     *
     * Generated from protobuf field <code>optional string short_name = 492051566;</code>
     * @param string $var
     * @return $this
     */
    public function setShortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->short_name = $var;

        return $this;
    }

}

