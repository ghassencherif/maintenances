<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [ReservationService.CreateAssignment][google.cloud.bigquery.reservation.v1.ReservationService.CreateAssignment].
 * Note: "bigquery.reservationAssignments.create" permission is required on the
 * related assignee.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.CreateAssignmentRequest</code>
 */
class CreateAssignmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name of the assignment
     * E.g. `projects/myproject/locations/US/reservations/team1-prod`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Assignment resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Assignment assignment = 2;</code>
     */
    private $assignment = null;
    /**
     * The optional assignment ID. Assignment name will be generated automatically
     * if this field is empty.
     * This field must only contain lower case alphanumeric characters or dash.
     * Max length is 64 characters.
     *
     * Generated from protobuf field <code>string assignment_id = 4;</code>
     */
    private $assignment_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name of the assignment
     *           E.g. `projects/myproject/locations/US/reservations/team1-prod`
     *     @type \Google\Cloud\BigQuery\Reservation\V1\Assignment $assignment
     *           Assignment resource to create.
     *     @type string $assignment_id
     *           The optional assignment ID. Assignment name will be generated automatically
     *           if this field is empty.
     *           This field must only contain lower case alphanumeric characters or dash.
     *           Max length is 64 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name of the assignment
     * E.g. `projects/myproject/locations/US/reservations/team1-prod`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name of the assignment
     * E.g. `projects/myproject/locations/US/reservations/team1-prod`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Assignment resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Assignment assignment = 2;</code>
     * @return \Google\Cloud\BigQuery\Reservation\V1\Assignment|null
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    public function hasAssignment()
    {
        return isset($this->assignment);
    }

    public function clearAssignment()
    {
        unset($this->assignment);
    }

    /**
     * Assignment resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Assignment assignment = 2;</code>
     * @param \Google\Cloud\BigQuery\Reservation\V1\Assignment $var
     * @return $this
     */
    public function setAssignment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Reservation\V1\Assignment::class);
        $this->assignment = $var;

        return $this;
    }

    /**
     * The optional assignment ID. Assignment name will be generated automatically
     * if this field is empty.
     * This field must only contain lower case alphanumeric characters or dash.
     * Max length is 64 characters.
     *
     * Generated from protobuf field <code>string assignment_id = 4;</code>
     * @return string
     */
    public function getAssignmentId()
    {
        return $this->assignment_id;
    }

    /**
     * The optional assignment ID. Assignment name will be generated automatically
     * if this field is empty.
     * This field must only contain lower case alphanumeric characters or dash.
     * Max length is 64 characters.
     *
     * Generated from protobuf field <code>string assignment_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAssignmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->assignment_id = $var;

        return $this;
    }

}

