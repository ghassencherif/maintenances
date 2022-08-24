<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encryption settings for the cluster.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.EncryptionConfig</code>
 */
class EncryptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Cloud KMS key name to use for PD disk encryption for all
     * instances in the cluster.
     *
     * Generated from protobuf field <code>string gce_pd_kms_key_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $gce_pd_kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gce_pd_kms_key_name
     *           Optional. The Cloud KMS key name to use for PD disk encryption for all
     *           instances in the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Cloud KMS key name to use for PD disk encryption for all
     * instances in the cluster.
     *
     * Generated from protobuf field <code>string gce_pd_kms_key_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getGcePdKmsKeyName()
    {
        return $this->gce_pd_kms_key_name;
    }

    /**
     * Optional. The Cloud KMS key name to use for PD disk encryption for all
     * instances in the cluster.
     *
     * Generated from protobuf field <code>string gce_pd_kms_key_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setGcePdKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->gce_pd_kms_key_name = $var;

        return $this;
    }

}
