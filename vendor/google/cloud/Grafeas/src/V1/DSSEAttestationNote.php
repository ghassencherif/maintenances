<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/dsse_attestation.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grafeas.v1.DSSEAttestationNote</code>
 */
class DSSEAttestationNote extends \Google\Protobuf\Internal\Message
{
    /**
     * DSSEHint hints at the purpose of the attestation authority.
     *
     * Generated from protobuf field <code>.grafeas.v1.DSSEAttestationNote.DSSEHint hint = 1;</code>
     */
    private $hint = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Grafeas\V1\DSSEAttestationNote\DSSEHint $hint
     *           DSSEHint hints at the purpose of the attestation authority.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\DsseAttestation::initOnce();
        parent::__construct($data);
    }

    /**
     * DSSEHint hints at the purpose of the attestation authority.
     *
     * Generated from protobuf field <code>.grafeas.v1.DSSEAttestationNote.DSSEHint hint = 1;</code>
     * @return \Grafeas\V1\DSSEAttestationNote\DSSEHint|null
     */
    public function getHint()
    {
        return $this->hint;
    }

    public function hasHint()
    {
        return isset($this->hint);
    }

    public function clearHint()
    {
        unset($this->hint);
    }

    /**
     * DSSEHint hints at the purpose of the attestation authority.
     *
     * Generated from protobuf field <code>.grafeas.v1.DSSEAttestationNote.DSSEHint hint = 1;</code>
     * @param \Grafeas\V1\DSSEAttestationNote\DSSEHint $var
     * @return $this
     */
    public function setHint($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\DSSEAttestationNote\DSSEHint::class);
        $this->hint = $var;

        return $this;
    }

}

