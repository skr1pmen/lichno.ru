<?php

$DB_HOST = getenv('DATABASE_HOST') ?: 'localhost';
$DB_NAME = getenv('DATABASE_NAME') ?: 'lichno';
$DB_USER = getenv("DATABASE_USER") ?: 'postgres';
$DB_PASSWORD = getenv("DATABASE_PASSWORD") ?: '';

return [
    'class' => 'yii\db\Connection',
    'dsn' => "pgsql:host=$DB_HOST;dbname=$DB_NAME",
    'username' => $DB_USER,
    'password' => $DB_PASSWORD,
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
