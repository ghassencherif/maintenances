<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore.proto

namespace GPBMetadata\Google\Cloud\Metastore\V1;

class Metastore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        $pool->internalAddGeneratedFile(
            '
�Y
)google/cloud/metastore/v1/metastore.protogoogle.cloud.metastore.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/type/dayofweek.proto"�	
ServiceO
hive_metastore_config (2..google.cloud.metastore.v1.HiveMetastoreConfigH 
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A>
labels (2..google.cloud.metastore.v1.Service.LabelsEntry7
network (	B&�A�A 
compute.googleapis.com/Network
endpoint_uri (	B�A
port	 (<
state
 (2(.google.cloud.metastore.v1.Service.StateB�A
state_message (	B�A
artifact_gcs_uri (	B�A5
tier (2\'.google.cloud.metastore.v1.Service.TierH
maintenance_window (2,.google.cloud.metastore.v1.MaintenanceWindow
uid (	B�A`
metadata_management_activity (25.google.cloud.metastore.v1.MetadataManagementActivityB�AO
release_channel (21.google.cloud.metastore.v1.Service.ReleaseChannelB�A-
LabelsEntry
key (	
value (	:8"~
State
STATE_UNSPECIFIED 
CREATING

ACTIVE

SUSPENDING
	SUSPENDED
UPDATING
DELETING	
ERROR";
Tier
TIER_UNSPECIFIED 
	DEVELOPER

ENTERPRISE"I
ReleaseChannel
RELEASE_CHANNEL_UNSPECIFIED 

CANARY

STABLE:a�A^
 metastore.googleapis.com/Service:projects/{project}/locations/{location}/services/{service}B
metastore_config"r
MaintenanceWindow0
hour_of_day (2.google.protobuf.Int32Value+
day_of_week (2.google.type.DayOfWeek"�
HiveMetastoreConfig
version (	B�A]
config_overrides (2C.google.cloud.metastore.v1.HiveMetastoreConfig.ConfigOverridesEntryB
kerberos_config (2).google.cloud.metastore.v1.KerberosConfig6
ConfigOverridesEntry
key (	
value (	:8"s
KerberosConfig1
keytab (2!.google.cloud.metastore.v1.Secret
	principal (	
krb5_config_gcs_uri (	")
Secret
cloud_secret (	H B
value"�
MetadataManagementActivityH
metadata_exports (2).google.cloud.metastore.v1.MetadataExportB�A9
restores (2".google.cloud.metastore.v1.RestoreB�A"�
MetadataImportT
database_dump (26.google.cloud.metastore.v1.MetadataImport.DatabaseDumpB�AH 
name (	B�A
description (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AC
state (2/.google.cloud.metastore.v1.MetadataImport.StateB�A�
DatabaseDump^
database_type (2C.google.cloud.metastore.v1.MetadataImport.DatabaseDump.DatabaseTypeB
gcs_uri (	C
type (20.google.cloud.metastore.v1.DatabaseDumpSpec.TypeB�A"8
DatabaseType
DATABASE_TYPE_UNSPECIFIED 	
MYSQL"T
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED
UPDATING

FAILED:��A�
\'metastore.googleapis.com/MetadataImport\\projects/{project}/locations/{location}/services/{service}/metadataImports/{metadata_import}B

metadata"�
MetadataExport"
destination_gcs_uri (	B�AH 3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AC
state (2/.google.cloud.metastore.v1.MetadataExport.StateB�AQ
database_dump_type (20.google.cloud.metastore.v1.DatabaseDumpSpec.TypeB�A"U
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED
	CANCELLEDB
destination"�
Backup
name (	B�A4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A;
state (2\'.google.cloud.metastore.v1.Backup.StateB�AA
service_revision (2".google.cloud.metastore.v1.ServiceB�A
description (	
restoring_services (	B�A"a
State
STATE_UNSPECIFIED 
CREATING
DELETING

ACTIVE

FAILED
	RESTORING:q�An
metastore.googleapis.com/BackupKprojects/{project}/locations/{location}/services/{service}/backups/{backup}"�
Restore3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A<
state (2(.google.cloud.metastore.v1.Restore.StateB�A7
backup (	B\'�A�A!
metastore.googleapis.com/BackupA
type (2..google.cloud.metastore.v1.Restore.RestoreTypeB�A
details (	B�A"U
State
STATE_UNSPECIFIED 
RUNNING
	SUCCEEDED

FAILED
	CANCELLED"H
RestoreType
RESTORE_TYPE_UNSPECIFIED 
FULL
METADATA_ONLY"�
ListServicesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"z
ListServicesResponse4
services (2".google.cloud.metastore.v1.Service
next_page_token (	
unreachable (	"K
GetServiceRequest6
name (	B(�A�A"
 metastore.googleapis.com/Service"�
CreateServiceRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location

service_id (	B�A8
service (2".google.cloud.metastore.v1.ServiceB�A

request_id (	B�A"�
UpdateServiceRequest4
update_mask (2.google.protobuf.FieldMaskB�A8
service (2".google.cloud.metastore.v1.ServiceB�A

request_id (	B�A"g
DeleteServiceRequest6
name (	B(�A�A"
 metastore.googleapis.com/Service

request_id (	B�A"�
ListMetadataImportsRequest8
parent (	B(�A�A"
 metastore.googleapis.com/Service
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListMetadataImportsResponseC
metadata_imports (2).google.cloud.metastore.v1.MetadataImport
next_page_token (	
unreachable (	"Y
GetMetadataImportRequest=
name (	B/�A�A)
\'metastore.googleapis.com/MetadataImport"�
CreateMetadataImportRequest8
parent (	B(�A�A"
 metastore.googleapis.com/Service
metadata_import_id (	B�AG
metadata_import (2).google.cloud.metastore.v1.MetadataImportB�A

request_id (	B�A"�
UpdateMetadataImportRequest4
update_mask (2.google.protobuf.FieldMaskB�AG
metadata_import (2).google.cloud.metastore.v1.MetadataImportB�A

request_id (	B�A"�
ListBackupsRequest8
parent (	B(�A�A"
 metastore.googleapis.com/Service
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"w
ListBackupsResponse2
backups (2!.google.cloud.metastore.v1.Backup
next_page_token (	
unreachable (	"I
GetBackupRequest5
name (	B\'�A�A!
metastore.googleapis.com/Backup"�
CreateBackupRequest8
parent (	B(�A�A"
 metastore.googleapis.com/Service
	backup_id (	B�A6
backup (2!.google.cloud.metastore.v1.BackupB�A

request_id (	B�A"e
DeleteBackupRequest5
name (	B\'�A�A!
metastore.googleapis.com/Backup

request_id (	B�A"�
ExportMetadataRequest 
destination_gcs_folder (	H 9
service (	B(�A�A"
 metastore.googleapis.com/Service

request_id (	B�AQ
database_dump_type (20.google.cloud.metastore.v1.DatabaseDumpSpec.TypeB�AB
destination"�
RestoreServiceRequest9
service (	B(�A�A"
 metastore.googleapis.com/Service7
backup (	B\'�A�A!
metastore.googleapis.com/BackupI
restore_type (2..google.cloud.metastore.v1.Restore.RestoreTypeB�A

request_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
LocationMetadatak
!supported_hive_metastore_versions (2@.google.cloud.metastore.v1.LocationMetadata.HiveMetastoreVersion;
HiveMetastoreVersion
version (	

is_default ("E
DatabaseDumpSpec"1
Type
TYPE_UNSPECIFIED 	
MYSQL
AVRO2�
DataprocMetastore�
ListServices..google.cloud.metastore.v1.ListServicesRequest/.google.cloud.metastore.v1.ListServicesResponse"=���.,/v1/{parent=projects/*/locations/*}/services�Aparent�

GetService,.google.cloud.metastore.v1.GetServiceRequest".google.cloud.metastore.v1.Service";���.,/v1/{name=projects/*/locations/*/services/*}�Aname�
CreateService/.google.cloud.metastore.v1.CreateServiceRequest.google.longrunning.Operation"x���7",/v1/{parent=projects/*/locations/*}/services:service�Aparent,service,service_id�A
ServiceOperationMetadata�
UpdateService/.google.cloud.metastore.v1.UpdateServiceRequest.google.longrunning.Operation"z���?24/v1/{service.name=projects/*/locations/*/services/*}:service�Aservice,update_mask�A
ServiceOperationMetadata�
DeleteService/.google.cloud.metastore.v1.DeleteServiceRequest.google.longrunning.Operation"h���.*,/v1/{name=projects/*/locations/*/services/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListMetadataImports5.google.cloud.metastore.v1.ListMetadataImportsRequest6.google.cloud.metastore.v1.ListMetadataImportsResponse"O���@>/v1/{parent=projects/*/locations/*/services/*}/metadataImports�Aparent�
GetMetadataImport3.google.cloud.metastore.v1.GetMetadataImportRequest).google.cloud.metastore.v1.MetadataImport"M���@>/v1/{name=projects/*/locations/*/services/*/metadataImports/*}�Aname�
CreateMetadataImport6.google.cloud.metastore.v1.CreateMetadataImportRequest.google.longrunning.Operation"����Q">/v1/{parent=projects/*/locations/*/services/*}/metadataImports:metadata_import�A)parent,metadata_import,metadata_import_id�A#
MetadataImportOperationMetadata�
UpdateMetadataImport6.google.cloud.metastore.v1.UpdateMetadataImportRequest.google.longrunning.Operation"����a2N/v1/{metadata_import.name=projects/*/locations/*/services/*/metadataImports/*}:metadata_import�Ametadata_import,update_mask�A#
MetadataImportOperationMetadata�
ExportMetadata0.google.cloud.metastore.v1.ExportMetadataRequest.google.longrunning.Operation"o���C">/v1/{service=projects/*/locations/*/services/*}:exportMetadata:*�A#
MetadataExportOperationMetadata�
RestoreService0.google.cloud.metastore.v1.RestoreServiceRequest.google.longrunning.Operation"r���<"7/v1/{service=projects/*/locations/*/services/*}:restore:*�Aservice,backup�A
RestoreOperationMetadata�
ListBackups-.google.cloud.metastore.v1.ListBackupsRequest..google.cloud.metastore.v1.ListBackupsResponse"G���86/v1/{parent=projects/*/locations/*/services/*}/backups�Aparent�
	GetBackup+.google.cloud.metastore.v1.GetBackupRequest!.google.cloud.metastore.v1.Backup"E���86/v1/{name=projects/*/locations/*/services/*/backups/*}�Aname�
CreateBackup..google.cloud.metastore.v1.CreateBackupRequest.google.longrunning.Operation"~���@"6/v1/{parent=projects/*/locations/*/services/*}/backups:backup�Aparent,backup,backup_id�A
BackupOperationMetadata�
DeleteBackup..google.cloud.metastore.v1.DeleteBackupRequest.google.longrunning.Operation"r���8*6/v1/{name=projects/*/locations/*/services/*/backups/*}�Aname�A*
google.protobuf.EmptyOperationMetadataL�Ametastore.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.metastore.v1BMetastoreProtoPZBgoogle.golang.org/genproto/googleapis/cloud/metastore/v1;metastore�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

