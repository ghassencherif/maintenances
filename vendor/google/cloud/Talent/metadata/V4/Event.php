<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/event.proto

namespace GPBMetadata\Google\Cloud\Talent\V4;

class Event
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"google/cloud/talent/v4/event.protogoogle.cloud.talent.v4google/protobuf/timestamp.proto"�
ClientEvent

request_id (	
event_id (	B�A4
create_time (2.google.protobuf.TimestampB�A5
	job_event (2 .google.cloud.talent.v4.JobEventH 
event_notes	 (	B
event"�
JobEvent@
type (2-.google.cloud.talent.v4.JobEvent.JobEventTypeB�A
jobs (	B�A"�
JobEventType
JOB_EVENT_TYPE_UNSPECIFIED 

IMPRESSION
VIEW
VIEW_REDIRECT
APPLICATION_START
APPLICATION_FINISH 
APPLICATION_QUICK_SUBMISSION
APPLICATION_REDIRECT!
APPLICATION_START_FROM_SEARCH$
 APPLICATION_REDIRECT_FROM_SEARCH	
APPLICATION_COMPANY_SUBMIT

BOOKMARK
NOTIFICATION	
HIRED
SENT_CV
INTERVIEW_GRANTEDBn
com.google.cloud.talent.v4B
EventProtoPZ<google.golang.org/genproto/googleapis/cloud/talent/v4;talent�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

