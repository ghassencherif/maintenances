<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information on if the current connection is being throttled.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.ThrottleState</code>
 */
class ThrottleState extends \Google\Protobuf\Internal\Message
{
    /**
     * How much this connection is being throttled. Zero means no throttling,
     * 100 means fully throttled.
     *
     * Generated from protobuf field <code>int32 throttle_percent = 1;</code>
     */
    private $throttle_percent = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $throttle_percent
     *           How much this connection is being throttled. Zero means no throttling,
     *           100 means fully throttled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * How much this connection is being throttled. Zero means no throttling,
     * 100 means fully throttled.
     *
     * Generated from protobuf field <code>int32 throttle_percent = 1;</code>
     * @return int
     */
    public function getThrottlePercent()
    {
        return $this->throttle_percent;
    }

    /**
     * How much this connection is being throttled. Zero means no throttling,
     * 100 means fully throttled.
     *
     * Generated from protobuf field <code>int32 throttle_percent = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setThrottlePercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->throttle_percent = $var;

        return $this;
    }

}

