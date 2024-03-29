<?php

function smartparticipation_core_ab_test_schema()
{
  $t = get_t();

  return array(
    'sp_ab_test' => array(
      'description' => $t('Stores info about A/B tests'),
      'fields' => array(
        'abid' => array(
          'description' => $t('A/B test id'),
          'type' => 'varchar',
          'length' => 32,
          'not null' => TRUE,
        ),
        'title' => array(
          'description' => $t('The title of the A/B test'),
          'type' => 'varchar',
          'length' => 140,
          'not null' => TRUE,
        ),
        'description' => array(
          'description' => $t('A description of the A/B test'),
          'type' => 'text',
          'not null' => FALSE,
        ),
        'variant_a_title' => array(
          'description' => $t('The title of the first test sample or variant'),
          'type' => 'varchar',
          'length' => 140,
          'not null' => TRUE,
        ),
        'variant_b_title' => array(
          'description' => $t('The title of the second test sample or variant'),
          'type' => 'varchar',
          'length' => 140,
          'not null' => TRUE,
        ),
        'created' => array(
          'type' => 'int',
          'unsigned' => true,
          'not null' => true,
          'default' => 0,
          'description' => $t('Created timestamp'),
        ),
        'modified' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => TRUE,
          'default' => 0,
          'description' => $t('Last modified timestamp')
        ),
      ),
      'primary key' => array('abid'),
    ),
    'sp_ab_test_user_variant' => array(
      'fields' => array(
        'abid' => array(
          'description' => $t('A/B test id'),
          'type' => 'varchar',
          'length' => 32,
          'not null' => TRUE,
        ),
        'uid' => array(
          'description' => $t('User id'),
          'type' => 'int',
          'not null' => TRUE,
        ),
        'variant' => array(
          'description' => $t('Enum for VARIANT_A or VARIANT_B'),
          'type' => 'varchar',
          'length' => 9,
          'not null' => TRUE,
        ),
        'assigned' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => TRUE,
          'default' => 0,
          'description' => $t('Timestamp of when variant was assigned for user')
        ),
      ),
      'primary key' => array('abid','uid'),
      'foreign keys' => array(
        'user' => array(
          'table' => 'users',
          'columns' => array('uid' => 'uid'),
        ),
      ),
    ),
  );

}