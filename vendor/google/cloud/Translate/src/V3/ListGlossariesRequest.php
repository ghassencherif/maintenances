<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListGlossaries.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.ListGlossariesRequest</code>
 */
class ListGlossariesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project from which to list all of the glossaries.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. Requested page size. The server may return fewer glossaries than
     * requested. If unspecified, the server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A token identifying a page of results the server should return.
     * Typically, this is the value of [ListGlossariesResponse.next_page_token]
     * returned from the previous call to `ListGlossaries` method.
     * The first page is returned if `page_token`is empty or missing.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. Filter specifying constraints of a list operation.
     * Specify the constraint by the format of "key=value", where key must be
     * "src" or "tgt", and the value must be a valid language code.
     * For multiple restrictions, concatenate them by "AND" (uppercase only),
     * such as: "src=en-US AND tgt=zh-CN". Notice that the exact match is used
     * here, which means using 'en-US' and 'en' can lead to different results,
     * which depends on the language code you used when you create the glossary.
     * For the unidirectional glossaries, the "src" and "tgt" add restrictions
     * on the source and target language code separately.
     * For the equivalent term set glossaries, the "src" and/or "tgt" add
     * restrictions on the term set.
     * For example: "src=en-US AND tgt=zh-CN" will only pick the unidirectional
     * glossaries which exactly match the source language code as "en-US" and the
     * target language code "zh-CN", but all equivalent term set glossaries which
     * contain "en-US" and "zh-CN" in their language set will be picked.
     * If missing, no filtering is performed.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the project from which to list all of the glossaries.
     *     @type int $page_size
     *           Optional. Requested page size. The server may return fewer glossaries than
     *           requested. If unspecified, the server picks an appropriate default.
     *     @type string $page_token
     *           Optional. A token identifying a page of results the server should return.
     *           Typically, this is the value of [ListGlossariesResponse.next_page_token]
     *           returned from the previous call to `ListGlossaries` method.
     *           The first page is returned if `page_token`is empty or missing.
     *     @type string $filter
     *           Optional. Filter specifying constraints of a list operation.
     *           Specify the constraint by the format of "key=value", where key must be
     *           "src" or "tgt", and the value must be a valid language code.
     *           For multiple restrictions, concatenate them by "AND" (uppercase only),
     *           such as: "src=en-US AND tgt=zh-CN". Notice that the exact match is used
     *           here, which means using 'en-US' and 'en' can lead to different results,
     *           which depends on the language code you used when you create the glossary.
     *           For the unidirectional glossaries, the "src" and "tgt" add restrictions
     *           on the source and target language code separately.
     *           For the equivalent term set glossaries, the "src" and/or "tgt" add
     *           restrictions on the term set.
     *           For example: "src=en-US AND tgt=zh-CN" will only pick the unidirectional
     *           glossaries which exactly match the source language code as "en-US" and the
     *           target language code "zh-CN", but all equivalent term set glossaries which
     *           contain "en-US" and "zh-CN" in their language set will be picked.
     *           If missing, no filtering is performed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project from which to list all of the glossaries.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project from which to list all of the glossaries.
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
     * Optional. Requested page size. The server may return fewer glossaries than
     * requested. If unspecified, the server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. The server may return fewer glossaries than
     * requested. If unspecified, the server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     * Typically, this is the value of [ListGlossariesResponse.next_page_token]
     * returned from the previous call to `ListGlossaries` method.
     * The first page is returned if `page_token`is empty or missing.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     * Typically, this is the value of [ListGlossariesResponse.next_page_token]
     * returned from the previous call to `ListGlossaries` method.
     * The first page is returned if `page_token`is empty or missing.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Filter specifying constraints of a list operation.
     * Specify the constraint by the format of "key=value", where key must be
     * "src" or "tgt", and the value must be a valid language code.
     * For multiple restrictions, concatenate them by "AND" (uppercase only),
     * such as: "src=en-US AND tgt=zh-CN". Notice that the exact match is used
     * here, which means using 'en-US' and 'en' can lead to different results,
     * which depends on the language code you used when you create the glossary.
     * For the unidirectional glossaries, the "src" and "tgt" add restrictions
     * on the source and target language code separately.
     * For the equivalent term set glossaries, the "src" and/or "tgt" add
     * restrictions on the term set.
     * For example: "src=en-US AND tgt=zh-CN" will only pick the unidirectional
     * glossaries which exactly match the source language code as "en-US" and the
     * target language code "zh-CN", but all equivalent term set glossaries which
     * contain "en-US" and "zh-CN" in their language set will be picked.
     * If missing, no filtering is performed.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filter specifying constraints of a list operation.
     * Specify the constraint by the format of "key=value", where key must be
     * "src" or "tgt", and the value must be a valid language code.
     * For multiple restrictions, concatenate them by "AND" (uppercase only),
     * such as: "src=en-US AND tgt=zh-CN". Notice that the exact match is used
     * here, which means using 'en-US' and 'en' can lead to different results,
     * which depends on the language code you used when you create the glossary.
     * For the unidirectional glossaries, the "src" and "tgt" add restrictions
     * on the source and target language code separately.
     * For the equivalent term set glossaries, the "src" and/or "tgt" add
     * restrictions on the term set.
     * For example: "src=en-US AND tgt=zh-CN" will only pick the unidirectional
     * glossaries which exactly match the source language code as "en-US" and the
     * target language code "zh-CN", but all equivalent term set glossaries which
     * contain "en-US" and "zh-CN" in their language set will be picked.
     * If missing, no filtering is performed.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}
