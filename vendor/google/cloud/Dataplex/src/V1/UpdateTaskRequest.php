<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/service.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update task request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.UpdateTaskRequest</code>
 */
class UpdateTaskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Required. Update description.
     * Only fields specified in `update_mask` are updated.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task task = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $task = null;
    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update.
     *     @type \Google\Cloud\Dataplex\V1\Task $task
     *           Required. Update description.
     *           Only fields specified in `update_mask` are updated.
     *     @type bool $validate_only
     *           Optional. Only validate the request, but do not perform mutations.
     *           The default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. Update description.
     * Only fields specified in `update_mask` are updated.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task task = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\Task|null
     */
    public function getTask()
    {
        return $this->task;
    }

    public function hasTask()
    {
        return isset($this->task);
    }

    public function clearTask()
    {
        unset($this->task);
    }

    /**
     * Required. Update description.
     * Only fields specified in `update_mask` are updated.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Task task = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\Task $var
     * @return $this
     */
    public function setTask($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Task::class);
        $this->task = $var;

        return $this;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

