<?php

/**
 * stores the database configurations
 * @author Fredrick <mconyango@gmail.com>
 */
//development
return array(
    'connectionString' => 'mysql:host=localhost;port=3306;dbname=smartcou_smartcounty',
    'emulatePrepare' => true,
    'username' => 'smartcou_root',
    'password' => 'k1k2f3m+c8',
    'schemaCachingDuration' => 600,
    'tablePrefix' => '',
    'enableParamLogging' => false,
    'enableProfiling' => false,
    'charset' => 'utf8',
    'nullConversion' => PDO::NULL_EMPTY_STRING,
    'initSQLs' => array("set time_zone='+00:00';"),
);