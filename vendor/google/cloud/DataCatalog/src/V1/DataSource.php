<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/data_source.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Physical location of an entry.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.DataSource</code>
 */
class DataSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Service that physically stores the data.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.DataSource.Service service = 1;</code>
     */
    private $service = 0;
    /**
     * Full name of a resource as defined by the service. For example:
     * `//bigquery.googleapis.com/projects/{PROJECT_ID}/locations/{LOCATION}/datasets/{DATASET_ID}/tables/{TABLE_ID}`
     *
     * Generated from protobuf field <code>string resource = 2;</code>
     */
    private $resource = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $service
     *           Service that physically stores the data.
     *     @type string $resource
     *           Full name of a resource as defined by the service. For example:
     *           `//bigquery.googleapis.com/projects/{PROJECT_ID}/locations/{LOCATION}/datasets/{DATASET_ID}/tables/{TABLE_ID}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\DataSource::initOnce();
        parent::__construct($data);
    }

    /**
     * Service that physically stores the data.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.DataSource.Service service = 1;</code>
     * @return int
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Service that physically stores the data.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.DataSource.Service service = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\DataSource\Service::class);
        $this->service = $var;

        return $this;
    }

    /**
     * Full name of a resource as defined by the service. For example:
     * `//bigquery.googleapis.com/projects/{PROJECT_ID}/locations/{LOCATION}/datasets/{DATASET_ID}/tables/{TABLE_ID}`
     *
     * Generated from protobuf field <code>string resource = 2;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Full name of a resource as defined by the service. For example:
     * `//bigquery.googleapis.com/projects/{PROJECT_ID}/locations/{LOCATION}/datasets/{DATASET_ID}/tables/{TABLE_ID}`
     *
     * Generated from protobuf field <code>string resource = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

}

