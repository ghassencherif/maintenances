<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * In contrast to a single BackendService in HttpRouteAction to which all matching traffic is directed to, WeightedBackendService allows traffic to be split across multiple BackendServices. The volume of traffic for each BackendService is proportional to the weight specified in each WeightedBackendService
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.WeightedBackendService</code>
 */
class WeightedBackendService extends \Google\Protobuf\Internal\Message
{
    /**
     * The full or partial URL to the default BackendService resource. Before forwarding the request to backendService, the loadbalancer applies any relevant headerActions specified as part of this backendServiceWeight.
     *
     * Generated from protobuf field <code>optional string backend_service = 306946058;</code>
     */
    private $backend_service = null;
    /**
     * Specifies changes to request and response headers that need to take effect for the selected backendService. headerAction specified here take effect before headerAction in the enclosing HttpRouteRule, PathMatcher and UrlMap. Note that headerAction is not supported for Loadbalancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpHeaderAction header_action = 328077352;</code>
     */
    private $header_action = null;
    /**
     * Specifies the fraction of traffic sent to backendService, computed as weight / (sum of all weightedBackendService weights in routeAction) . The selection of a backend service is determined only for new traffic. Once a user's request has been directed to a backendService, subsequent requests will be sent to the same backendService as determined by the BackendService's session affinity policy. The value must be between 0 and 1000
     *
     * Generated from protobuf field <code>optional uint32 weight = 282149496;</code>
     */
    private $weight = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backend_service
     *           The full or partial URL to the default BackendService resource. Before forwarding the request to backendService, the loadbalancer applies any relevant headerActions specified as part of this backendServiceWeight.
     *     @type \Google\Cloud\Compute\V1\HttpHeaderAction $header_action
     *           Specifies changes to request and response headers that need to take effect for the selected backendService. headerAction specified here take effect before headerAction in the enclosing HttpRouteRule, PathMatcher and UrlMap. Note that headerAction is not supported for Loadbalancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *     @type int $weight
     *           Specifies the fraction of traffic sent to backendService, computed as weight / (sum of all weightedBackendService weights in routeAction) . The selection of a backend service is determined only for new traffic. Once a user's request has been directed to a backendService, subsequent requests will be sent to the same backendService as determined by the BackendService's session affinity policy. The value must be between 0 and 1000
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The full or partial URL to the default BackendService resource. Before forwarding the request to backendService, the loadbalancer applies any relevant headerActions specified as part of this backendServiceWeight.
     *
     * Generated from protobuf field <code>optional string backend_service = 306946058;</code>
     * @return string
     */
    public function getBackendService()
    {
        return isset($this->backend_service) ? $this->backend_service : '';
    }

    public function hasBackendService()
    {
        return isset($this->backend_service);
    }

    public function clearBackendService()
    {
        unset($this->backend_service);
    }

    /**
     * The full or partial URL to the default BackendService resource. Before forwarding the request to backendService, the loadbalancer applies any relevant headerActions specified as part of this backendServiceWeight.
     *
     * Generated from protobuf field <code>optional string backend_service = 306946058;</code>
     * @param string $var
     * @return $this
     */
    public function setBackendService($var)
    {
        GPBUtil::checkString($var, True);
        $this->backend_service = $var;

        return $this;
    }

    /**
     * Specifies changes to request and response headers that need to take effect for the selected backendService. headerAction specified here take effect before headerAction in the enclosing HttpRouteRule, PathMatcher and UrlMap. Note that headerAction is not supported for Loadbalancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpHeaderAction header_action = 328077352;</code>
     * @return \Google\Cloud\Compute\V1\HttpHeaderAction|null
     */
    public function getHeaderAction()
    {
        return $this->header_action;
    }

    public function hasHeaderAction()
    {
        return isset($this->header_action);
    }

    public function clearHeaderAction()
    {
        unset($this->header_action);
    }

    /**
     * Specifies changes to request and response headers that need to take effect for the selected backendService. headerAction specified here take effect before headerAction in the enclosing HttpRouteRule, PathMatcher and UrlMap. Note that headerAction is not supported for Loadbalancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpHeaderAction header_action = 328077352;</code>
     * @param \Google\Cloud\Compute\V1\HttpHeaderAction $var
     * @return $this
     */
    public function setHeaderAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpHeaderAction::class);
        $this->header_action = $var;

        return $this;
    }

    /**
     * Specifies the fraction of traffic sent to backendService, computed as weight / (sum of all weightedBackendService weights in routeAction) . The selection of a backend service is determined only for new traffic. Once a user's request has been directed to a backendService, subsequent requests will be sent to the same backendService as determined by the BackendService's session affinity policy. The value must be between 0 and 1000
     *
     * Generated from protobuf field <code>optional uint32 weight = 282149496;</code>
     * @return int
     */
    public function getWeight()
    {
        return isset($this->weight) ? $this->weight : 0;
    }

    public function hasWeight()
    {
        return isset($this->weight);
    }

    public function clearWeight()
    {
        unset($this->weight);
    }

    /**
     * Specifies the fraction of traffic sent to backendService, computed as weight / (sum of all weightedBackendService weights in routeAction) . The selection of a backend service is determined only for new traffic. Once a user's request has been directed to a backendService, subsequent requests will be sent to the same backendService as determined by the BackendService's session affinity policy. The value must be between 0 and 1000
     *
     * Generated from protobuf field <code>optional uint32 weight = 282149496;</code>
     * @param int $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->weight = $var;

        return $this;
    }

}

