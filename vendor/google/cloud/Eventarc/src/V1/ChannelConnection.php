<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/channel_connection.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of the ChannelConnection resource.
 * A ChannelConnection is a resource which event providers create during the
 * activation process to establish a connection between the provider and the
 * subscriber channel.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.ChannelConnection</code>
 */
class ChannelConnection extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the connection.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Output only. Server assigned ID of the resource.
     * The server guarantees uniqueness and immutability until deleted.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Required. The name of the connected subscriber Channel.
     * This is a weak reference to avoid cross project and cross accounts
     * references. This must be in
     * `projects/{project}/location/{location}/channels/{channel_id}` format.
     *
     * Generated from protobuf field <code>string channel = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $channel = '';
    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Input only. Activation token for the channel. The token will be used
     * during the creation of ChannelConnection to bind the channel with the
     * provider project. This field will not be stored in the provider resource.
     *
     * Generated from protobuf field <code>string activation_token = 8 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $activation_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the connection.
     *     @type string $uid
     *           Output only. Server assigned ID of the resource.
     *           The server guarantees uniqueness and immutability until deleted.
     *     @type string $channel
     *           Required. The name of the connected subscriber Channel.
     *           This is a weak reference to avoid cross project and cross accounts
     *           references. This must be in
     *           `projects/{project}/location/{location}/channels/{channel_id}` format.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last-modified time.
     *     @type string $activation_token
     *           Input only. Activation token for the channel. The token will be used
     *           during the creation of ChannelConnection to bind the channel with the
     *           provider project. This field will not be stored in the provider resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\ChannelConnection::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the connection.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the connection.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Output only. Server assigned ID of the resource.
     * The server guarantees uniqueness and immutability until deleted.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Server assigned ID of the resource.
     * The server guarantees uniqueness and immutability until deleted.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Required. The name of the connected subscriber Channel.
     * This is a weak reference to avoid cross project and cross accounts
     * references. This must be in
     * `projects/{project}/location/{location}/channels/{channel_id}` format.
     *
     * Generated from protobuf field <code>string channel = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Required. The name of the connected subscriber Channel.
     * This is a weak reference to avoid cross project and cross accounts
     * references. This must be in
     * `projects/{project}/location/{location}/channels/{channel_id}` format.
     *
     * Generated from protobuf field <code>string channel = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel = $var;

        return $this;
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Input only. Activation token for the channel. The token will be used
     * during the creation of ChannelConnection to bind the channel with the
     * provider project. This field will not be stored in the provider resource.
     *
     * Generated from protobuf field <code>string activation_token = 8 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getActivationToken()
    {
        return $this->activation_token;
    }

    /**
     * Input only. Activation token for the channel. The token will be used
     * during the creation of ChannelConnection to bind the channel with the
     * provider project. This field will not be stored in the provider resource.
     *
     * Generated from protobuf field <code>string activation_token = 8 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setActivationToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->activation_token = $var;

        return $this;
    }

}

