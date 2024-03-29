<?php


namespace SmartParticipation\model;

/**
 * Class AccessLogRecord
 * @package SmartParticipation\model
 */
class AccessLogRecord extends Model
{
  /** @var int */
  public $aid;

  /** @var string Session ID */
  public $sid;

  /** @var string Page title */
  public $title;

  /** @var string Internal path */
  public $path;

  /** @var string Referrer URI */
  public $url;

  /** @var string */
  public $hostname;

  /** @var int */
  public $uid;

  /** @var string */
  public $user_agent;

  /** @var int Page load time (milliseconds) */
  public $timer;

  /** @var int */
  public $timestamp;

  protected static function getAttributeLabels()
  {
    return array(
      'aid' => t('Log ID'),
      'sid' => t('User Session'),
      'title' => t('Page Title'),
      'path' => t('Internal Path'),
      'url' => t('Referrer URI'),
      'hostname' => t('IP Address'),
      'uid' => t('User ID'),
      'user_agent' => t('User Agent'),
      'timer' => t('Page Load Time (milliseconds)'),
      'timestamp' => t('Visit Datetime'),
    );
  }
}