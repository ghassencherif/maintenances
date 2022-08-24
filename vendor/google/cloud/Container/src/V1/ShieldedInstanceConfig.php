<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of Shielded Instance options.
 *
 * Generated from protobuf message <code>google.container.v1.ShieldedInstanceConfig</code>
 */
class ShieldedInstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines whether the instance has Secure Boot enabled.
     * Secure Boot helps ensure that the system only runs authentic software by
     * verifying the digital signature of all boot components, and halting the
     * boot process if signature verification fails.
     *
     * Generated from protobuf field <code>bool enable_secure_boot = 1;</code>
     */
    private $enable_secure_boot = false;
    /**
     * Defines whether the instance has integrity monitoring enabled.
     * Enables monitoring and attestation of the boot integrity of the instance.
     * The attestation is performed against the integrity policy baseline. This
     * baseline is initially derived from the implicitly trusted boot image when
     * the instance is created.
     *
     * Generated from protobuf field <code>bool enable_integrity_monitoring = 2;</code>
     */
    private $enable_integrity_monitoring = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_secure_boot
     *           Defines whether the instance has Secure Boot enabled.
     *           Secure Boot helps ensure that the system only runs authentic software by
     *           verifying the digital signature of all boot components, and halting the
     *           boot process if signature verification fails.
     *     @type bool $enable_integrity_monitoring
     *           Defines whether the instance has integrity monitoring enabled.
     *           Enables monitoring and attestation of the boot integrity of the instance.
     *           The attestation is performed against the integrity policy baseline. This
     *           baseline is initially derived from the implicitly trusted boot image when
     *           the instance is created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines whether the instance has Secure Boot enabled.
     * Secure Boot helps ensure that the system only runs authentic software by
     * verifying the digital signature of all boot components, and halting the
     * boot process if signature verification fails.
     *
     * Generated from protobuf field <code>bool enable_secure_boot = 1;</code>
     * @return bool
     */
    public function getEnableSecureBoot()
    {
        return $this->enable_secure_boot;
    }

    /**
     * Defines whether the instance has Secure Boot enabled.
     * Secure Boot helps ensure that the system only runs authentic software by
     * verifying the digital signature of all boot components, and halting the
     * boot process if signature verification fails.
     *
     * Generated from protobuf field <code>bool enable_secure_boot = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSecureBoot($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_secure_boot = $var;

        return $this;
    }

    /**
     * Defines whether the instance has integrity monitoring enabled.
     * Enables monitoring and attestation of the boot integrity of the instance.
     * The attestation is performed against the integrity policy baseline. This
     * baseline is initially derived from the implicitly trusted boot image when
     * the instance is created.
     *
     * Generated from protobuf field <code>bool enable_integrity_monitoring = 2;</code>
     * @return bool
     */
    public function getEnableIntegrityMonitoring()
    {
        return $this->enable_integrity_monitoring;
    }

    /**
     * Defines whether the instance has integrity monitoring enabled.
     * Enables monitoring and attestation of the boot integrity of the instance.
     * The attestation is performed against the integrity policy baseline. This
     * baseline is initially derived from the implicitly trusted boot image when
     * the instance is created.
     *
     * Generated from protobuf field <code>bool enable_integrity_monitoring = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableIntegrityMonitoring($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_integrity_monitoring = $var;

        return $this;
    }

}
