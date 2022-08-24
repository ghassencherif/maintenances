<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes an evaluation between a machine learning model's predictions and
 * ground truth labels. Created when an [EvaluationJob][google.cloud.datalabeling.v1beta1.EvaluationJob] runs successfully.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.Evaluation</code>
 */
class Evaluation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of an evaluation. The name has the following
     * format:
     * "projects/<var>{project_id}</var>/datasets/<var>{dataset_id}</var>/evaluations/<var>{evaluation_id</var>}'
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Output only. Options used in the evaluation job that created this
     * evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationConfig config = 2;</code>
     */
    private $config = null;
    /**
     * Output only. Timestamp for when the evaluation job that created this
     * evaluation ran.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evaluation_job_run_time = 3;</code>
     */
    private $evaluation_job_run_time = null;
    /**
     * Output only. Timestamp for when this evaluation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
     */
    private $create_time = null;
    /**
     * Output only. Metrics comparing predictions to ground truth labels.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationMetrics evaluation_metrics = 5;</code>
     */
    private $evaluation_metrics = null;
    /**
     * Output only. Type of task that the model version being evaluated performs,
     * as defined in the
     * [evaluationJobConfig.inputConfig.annotationType][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config]
     * field of the evaluation job that created this evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationType annotation_type = 6;</code>
     */
    private $annotation_type = 0;
    /**
     * Output only. The number of items in the ground truth dataset that were used
     * for this evaluation. Only populated when the evaulation is for certain
     * AnnotationTypes.
     *
     * Generated from protobuf field <code>int64 evaluated_item_count = 7;</code>
     */
    private $evaluated_item_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of an evaluation. The name has the following
     *           format:
     *           "projects/<var>{project_id}</var>/datasets/<var>{dataset_id}</var>/evaluations/<var>{evaluation_id</var>}'
     *     @type \Google\Cloud\DataLabeling\V1beta1\EvaluationConfig $config
     *           Output only. Options used in the evaluation job that created this
     *           evaluation.
     *     @type \Google\Protobuf\Timestamp $evaluation_job_run_time
     *           Output only. Timestamp for when the evaluation job that created this
     *           evaluation ran.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp for when this evaluation was created.
     *     @type \Google\Cloud\DataLabeling\V1beta1\EvaluationMetrics $evaluation_metrics
     *           Output only. Metrics comparing predictions to ground truth labels.
     *     @type int $annotation_type
     *           Output only. Type of task that the model version being evaluated performs,
     *           as defined in the
     *           [evaluationJobConfig.inputConfig.annotationType][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config]
     *           field of the evaluation job that created this evaluation.
     *     @type int|string $evaluated_item_count
     *           Output only. The number of items in the ground truth dataset that were used
     *           for this evaluation. Only populated when the evaulation is for certain
     *           AnnotationTypes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Evaluation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of an evaluation. The name has the following
     * format:
     * "projects/<var>{project_id}</var>/datasets/<var>{dataset_id}</var>/evaluations/<var>{evaluation_id</var>}'
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of an evaluation. The name has the following
     * format:
     * "projects/<var>{project_id}</var>/datasets/<var>{dataset_id}</var>/evaluations/<var>{evaluation_id</var>}'
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Output only. Options used in the evaluation job that created this
     * evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationConfig config = 2;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\EvaluationConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Output only. Options used in the evaluation job that created this
     * evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationConfig config = 2;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\EvaluationConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\EvaluationConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Output only. Timestamp for when the evaluation job that created this
     * evaluation ran.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evaluation_job_run_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEvaluationJobRunTime()
    {
        return $this->evaluation_job_run_time;
    }

    public function hasEvaluationJobRunTime()
    {
        return isset($this->evaluation_job_run_time);
    }

    public function clearEvaluationJobRunTime()
    {
        unset($this->evaluation_job_run_time);
    }

    /**
     * Output only. Timestamp for when the evaluation job that created this
     * evaluation ran.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evaluation_job_run_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEvaluationJobRunTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->evaluation_job_run_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp for when this evaluation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
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
     * Output only. Timestamp for when this evaluation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4;</code>
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
     * Output only. Metrics comparing predictions to ground truth labels.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationMetrics evaluation_metrics = 5;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\EvaluationMetrics|null
     */
    public function getEvaluationMetrics()
    {
        return $this->evaluation_metrics;
    }

    public function hasEvaluationMetrics()
    {
        return isset($this->evaluation_metrics);
    }

    public function clearEvaluationMetrics()
    {
        unset($this->evaluation_metrics);
    }

    /**
     * Output only. Metrics comparing predictions to ground truth labels.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationMetrics evaluation_metrics = 5;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\EvaluationMetrics $var
     * @return $this
     */
    public function setEvaluationMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\EvaluationMetrics::class);
        $this->evaluation_metrics = $var;

        return $this;
    }

    /**
     * Output only. Type of task that the model version being evaluated performs,
     * as defined in the
     * [evaluationJobConfig.inputConfig.annotationType][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config]
     * field of the evaluation job that created this evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationType annotation_type = 6;</code>
     * @return int
     */
    public function getAnnotationType()
    {
        return $this->annotation_type;
    }

    /**
     * Output only. Type of task that the model version being evaluated performs,
     * as defined in the
     * [evaluationJobConfig.inputConfig.annotationType][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config]
     * field of the evaluation job that created this evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationType annotation_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAnnotationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataLabeling\V1beta1\AnnotationType::class);
        $this->annotation_type = $var;

        return $this;
    }

    /**
     * Output only. The number of items in the ground truth dataset that were used
     * for this evaluation. Only populated when the evaulation is for certain
     * AnnotationTypes.
     *
     * Generated from protobuf field <code>int64 evaluated_item_count = 7;</code>
     * @return int|string
     */
    public function getEvaluatedItemCount()
    {
        return $this->evaluated_item_count;
    }

    /**
     * Output only. The number of items in the ground truth dataset that were used
     * for this evaluation. Only populated when the evaulation is for certain
     * AnnotationTypes.
     *
     * Generated from protobuf field <code>int64 evaluated_item_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEvaluatedItemCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->evaluated_item_count = $var;

        return $this;
    }

}

