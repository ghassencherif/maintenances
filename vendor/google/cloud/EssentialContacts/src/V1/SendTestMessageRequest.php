<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/essentialcontacts/v1/service.proto

namespace Google\Cloud\EssentialContacts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the SendTestMessage method.
 *
 * Generated from protobuf message <code>google.cloud.essentialcontacts.v1.SendTestMessageRequest</code>
 */
class SendTestMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The list of names of the contacts to send a test message to.
     * Format: organizations/{organization_id}/contacts/{contact_id},
     * folders/{folder_id}/contacts/{contact_id} or
     * projects/{project_id}/contacts/{contact_id}
     *
     * Generated from protobuf field <code>repeated string contacts = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $contacts;
    /**
     * Required. The name of the resource to send the test message for. All
     * contacts must either be set directly on this resource or inherited from
     * another resource that is an ancestor of this one. Format:
     * organizations/{organization_id}, folders/{folder_id} or
     * projects/{project_id}
     *
     * Generated from protobuf field <code>string resource = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $resource = '';
    /**
     * Required. The notification category to send the test message for. All
     * contacts must be subscribed to this category.
     *
     * Generated from protobuf field <code>.google.cloud.essentialcontacts.v1.NotificationCategory notification_category = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $notification_category = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $contacts
     *           Required. The list of names of the contacts to send a test message to.
     *           Format: organizations/{organization_id}/contacts/{contact_id},
     *           folders/{folder_id}/contacts/{contact_id} or
     *           projects/{project_id}/contacts/{contact_id}
     *     @type string $resource
     *           Required. The name of the resource to send the test message for. All
     *           contacts must either be set directly on this resource or inherited from
     *           another resource that is an ancestor of this one. Format:
     *           organizations/{organization_id}, folders/{folder_id} or
     *           projects/{project_id}
     *     @type int $notification_category
     *           Required. The notification category to send the test message for. All
     *           contacts must be subscribed to this category.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Essentialcontacts\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The list of names of the contacts to send a test message to.
     * Format: organizations/{organization_id}/contacts/{contact_id},
     * folders/{folder_id}/contacts/{contact_id} or
     * projects/{project_id}/contacts/{contact_id}
     *
     * Generated from protobuf field <code>repeated string contacts = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Required. The list of names of the contacts to send a test message to.
     * Format: organizations/{organization_id}/contacts/{contact_id},
     * folders/{folder_id}/contacts/{contact_id} or
     * projects/{project_id}/contacts/{contact_id}
     *
     * Generated from protobuf field <code>repeated string contacts = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContacts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->contacts = $arr;

        return $this;
    }

    /**
     * Required. The name of the resource to send the test message for. All
     * contacts must either be set directly on this resource or inherited from
     * another resource that is an ancestor of this one. Format:
     * organizations/{organization_id}, folders/{folder_id} or
     * projects/{project_id}
     *
     * Generated from protobuf field <code>string resource = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Required. The name of the resource to send the test message for. All
     * contacts must either be set directly on this resource or inherited from
     * another resource that is an ancestor of this one. Format:
     * organizations/{organization_id}, folders/{folder_id} or
     * projects/{project_id}
     *
     * Generated from protobuf field <code>string resource = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * Required. The notification category to send the test message for. All
     * contacts must be subscribed to this category.
     *
     * Generated from protobuf field <code>.google.cloud.essentialcontacts.v1.NotificationCategory notification_category = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getNotificationCategory()
    {
        return $this->notification_category;
    }

    /**
     * Required. The notification category to send the test message for. All
     * contacts must be subscribed to this category.
     *
     * Generated from protobuf field <code>.google.cloud.essentialcontacts.v1.NotificationCategory notification_category = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setNotificationCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\EssentialContacts\V1\NotificationCategory::class);
        $this->notification_category = $var;

        return $this;
    }

}

