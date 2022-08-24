<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [CreateDatabase][google.spanner.admin.database.v1.DatabaseAdmin.CreateDatabase].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.CreateDatabaseRequest</code>
 */
class CreateDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the instance that will serve the new database.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. A `CREATE DATABASE` statement, which specifies the ID of the
     * new database.  The database ID must conform to the regular expression
     * `[a-z][a-z0-9_\-]*[a-z0-9]` and be between 2 and 30 characters in length.
     * If the database ID is a reserved word or if it contains a hyphen, the
     * database ID must be enclosed in backticks (`` ` ``).
     *
     * Generated from protobuf field <code>string create_statement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $create_statement = '';
    /**
     * Optional. A list of DDL statements to run inside the newly created
     * database. Statements can create tables, indexes, etc. These
     * statements execute atomically with the creation of the database:
     * if there is an error in any statement, the database is not created.
     *
     * Generated from protobuf field <code>repeated string extra_statements = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $extra_statements;
    /**
     * Optional. The encryption configuration for the database. If this field is not
     * specified, Cloud Spanner will encrypt/decrypt all data at rest using
     * Google default encryption.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionConfig encryption_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $encryption_config = null;
    /**
     * Optional. The dialect of the Cloud Spanner Database.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.DatabaseDialect database_dialect = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $database_dialect = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the instance that will serve the new database.
     *           Values are of the form `projects/<project>/instances/<instance>`.
     *     @type string $create_statement
     *           Required. A `CREATE DATABASE` statement, which specifies the ID of the
     *           new database.  The database ID must conform to the regular expression
     *           `[a-z][a-z0-9_\-]*[a-z0-9]` and be between 2 and 30 characters in length.
     *           If the database ID is a reserved word or if it contains a hyphen, the
     *           database ID must be enclosed in backticks (`` ` ``).
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $extra_statements
     *           Optional. A list of DDL statements to run inside the newly created
     *           database. Statements can create tables, indexes, etc. These
     *           statements execute atomically with the creation of the database:
     *           if there is an error in any statement, the database is not created.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\EncryptionConfig $encryption_config
     *           Optional. The encryption configuration for the database. If this field is not
     *           specified, Cloud Spanner will encrypt/decrypt all data at rest using
     *           Google default encryption.
     *     @type int $database_dialect
     *           Optional. The dialect of the Cloud Spanner Database.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the instance that will serve the new database.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the instance that will serve the new database.
     * Values are of the form `projects/<project>/instances/<instance>`.
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
     * Required. A `CREATE DATABASE` statement, which specifies the ID of the
     * new database.  The database ID must conform to the regular expression
     * `[a-z][a-z0-9_\-]*[a-z0-9]` and be between 2 and 30 characters in length.
     * If the database ID is a reserved word or if it contains a hyphen, the
     * database ID must be enclosed in backticks (`` ` ``).
     *
     * Generated from protobuf field <code>string create_statement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCreateStatement()
    {
        return $this->create_statement;
    }

    /**
     * Required. A `CREATE DATABASE` statement, which specifies the ID of the
     * new database.  The database ID must conform to the regular expression
     * `[a-z][a-z0-9_\-]*[a-z0-9]` and be between 2 and 30 characters in length.
     * If the database ID is a reserved word or if it contains a hyphen, the
     * database ID must be enclosed in backticks (`` ` ``).
     *
     * Generated from protobuf field <code>string create_statement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCreateStatement($var)
    {
        GPBUtil::checkString($var, True);
        $this->create_statement = $var;

        return $this;
    }

    /**
     * Optional. A list of DDL statements to run inside the newly created
     * database. Statements can create tables, indexes, etc. These
     * statements execute atomically with the creation of the database:
     * if there is an error in any statement, the database is not created.
     *
     * Generated from protobuf field <code>repeated string extra_statements = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtraStatements()
    {
        return $this->extra_statements;
    }

    /**
     * Optional. A list of DDL statements to run inside the newly created
     * database. Statements can create tables, indexes, etc. These
     * statements execute atomically with the creation of the database:
     * if there is an error in any statement, the database is not created.
     *
     * Generated from protobuf field <code>repeated string extra_statements = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtraStatements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->extra_statements = $arr;

        return $this;
    }

    /**
     * Optional. The encryption configuration for the database. If this field is not
     * specified, Cloud Spanner will encrypt/decrypt all data at rest using
     * Google default encryption.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionConfig encryption_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\EncryptionConfig|null
     */
    public function getEncryptionConfig()
    {
        return $this->encryption_config;
    }

    public function hasEncryptionConfig()
    {
        return isset($this->encryption_config);
    }

    public function clearEncryptionConfig()
    {
        unset($this->encryption_config);
    }

    /**
     * Optional. The encryption configuration for the database. If this field is not
     * specified, Cloud Spanner will encrypt/decrypt all data at rest using
     * Google default encryption.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionConfig encryption_config = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\EncryptionConfig $var
     * @return $this
     */
    public function setEncryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\EncryptionConfig::class);
        $this->encryption_config = $var;

        return $this;
    }

    /**
     * Optional. The dialect of the Cloud Spanner Database.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.DatabaseDialect database_dialect = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getDatabaseDialect()
    {
        return $this->database_dialect;
    }

    /**
     * Optional. The dialect of the Cloud Spanner Database.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.DatabaseDialect database_dialect = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setDatabaseDialect($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Database\V1\DatabaseDialect::class);
        $this->database_dialect = $var;

        return $this;
    }

}

