<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `DeleteCertificateMapEntry` method.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.DeleteCertificateMapEntryRequest</code>
 */
class DeleteCertificateMapEntryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A name of the certificate map entry to delete. Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateMaps/&#42;&#47;certificateMapEntries/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. A name of the certificate map entry to delete. Must be in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;certificateMaps/&#42;&#47;certificateMapEntries/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A name of the certificate map entry to delete. Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateMaps/&#42;&#47;certificateMapEntries/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A name of the certificate map entry to delete. Must be in the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateMaps/&#42;&#47;certificateMapEntries/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

