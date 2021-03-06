<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from /var/www/d7civi47latest/sites/default/files/civicrm/ext/com.joineryhq.eventbrite/xml/schema/CRM/Eventbrite/EventbriteLog.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:db11b9170f8203ff503e5ec700fc2398)
 */

/**
 * Database access object for the EventbriteLog entity.
 */
class CRM_Eventbrite_DAO_EventbriteLog extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_eventbrite_log';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique EventbriteLog ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * When was the log entry created.
   *
   * @var timestamp
   */
  public $created_date;

  /**
   * Message type. See CRM_Eventbrite_BAO_EventbriteLog::MESSAGE_TYPE_ID_*
   *
   * @var int unsigned
   */
  public $message_type_id;

  /**
   * Logged message
   *
   * @var text
   */
  public $message;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_eventbrite_log';
    parent::__construct();
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => ts('Unique EventbriteLog ID'),
          'required' => TRUE,
          'table_name' => 'civicrm_eventbrite_log',
          'entity' => 'EventbriteLog',
          'bao' => 'CRM_Eventbrite_DAO_EventbriteLog',
          'localizable' => 0,
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Created Date'),
          'description' => ts('When was the log entry created.'),
          'required' => FALSE,
          'export' => TRUE,
          'where' => 'civicrm_eventbrite_log.created_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_eventbrite_log',
          'entity' => 'EventbriteLog',
          'bao' => 'CRM_Eventbrite_DAO_EventbriteLog',
          'localizable' => 0,
        ],
        'message_type_id' => [
          'name' => 'message_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => ts('Message type. See CRM_Eventbrite_BAO_EventbriteLog::MESSAGE_TYPE_ID_*'),
          'required' => TRUE,
          'table_name' => 'civicrm_eventbrite_log',
          'entity' => 'EventbriteLog',
          'bao' => 'CRM_Eventbrite_DAO_EventbriteLog',
          'localizable' => 0,
        ],
        'message' => [
          'name' => 'message',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Message'),
          'description' => ts('Logged message'),
          'required' => TRUE,
          'table_name' => 'civicrm_eventbrite_log',
          'entity' => 'EventbriteLog',
          'bao' => 'CRM_Eventbrite_DAO_EventbriteLog',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'eventbrite_log', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'eventbrite_log', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
