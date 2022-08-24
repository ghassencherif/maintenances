<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/application.proto

namespace Google\Cloud\Talent\V4beta1\Application;

use UnexpectedValueException;

/**
 * Enum that represents the application status.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.Application.ApplicationState</code>
 */
class ApplicationState
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>APPLICATION_STATE_UNSPECIFIED = 0;</code>
     */
    const APPLICATION_STATE_UNSPECIFIED = 0;
    /**
     * The current stage is in progress or pending, for example, interviews in
     * progress.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 1;</code>
     */
    const IN_PROGRESS = 1;
    /**
     * The current stage was terminated by a candidate decision.
     *
     * Generated from protobuf enum <code>CANDIDATE_WITHDREW = 2;</code>
     */
    const CANDIDATE_WITHDREW = 2;
    /**
     * The current stage was terminated by an employer or agency decision.
     *
     * Generated from protobuf enum <code>EMPLOYER_WITHDREW = 3;</code>
     */
    const EMPLOYER_WITHDREW = 3;
    /**
     * The current stage is successfully completed, but the next stage (if
     * applicable) has not begun.
     *
     * Generated from protobuf enum <code>COMPLETED = 4;</code>
     */
    const COMPLETED = 4;
    /**
     * The current stage was closed without an exception, or terminated for
     * reasons unrealated to the candidate.
     *
     * Generated from protobuf enum <code>CLOSED = 5;</code>
     */
    const CLOSED = 5;

    private static $valueToName = [
        self::APPLICATION_STATE_UNSPECIFIED => 'APPLICATION_STATE_UNSPECIFIED',
        self::IN_PROGRESS => 'IN_PROGRESS',
        self::CANDIDATE_WITHDREW => 'CANDIDATE_WITHDREW',
        self::EMPLOYER_WITHDREW => 'EMPLOYER_WITHDREW',
        self::COMPLETED => 'COMPLETED',
        self::CLOSED => 'CLOSED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


