<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Networks.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetNetworkRequest</code>
 */
class GetNetworkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the network to return.
     *
     * Generated from protobuf field <code>string network = 232872494 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $network = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           Name of the network to return.
     *     @type string $project
     *           Project ID for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the network to return.
     *
     * Generated from protobuf field <code>string network = 232872494 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Name of the network to return.
     *
     * Generated from protobuf field <code>string network = 232872494 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

}

