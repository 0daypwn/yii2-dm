<?php
namespace myy\yii2dm;

class Connection extends \yii\db\Connection 
{
    public $schemaMap = [
        'pgsql' => 'yii\db\pgsql\Schema', // PostgreSQL
        'mysqli' => 'yii\db\mysql\Schema', // MySQL
        'mysql' => 'yii\db\mysql\Schema', // MySQL
        'sqlite' => 'yii\db\sqlite\Schema', // sqlite 3
        'sqlite2' => 'yii\db\sqlite\Schema', // sqlite 2
        'sqlsrv' => 'yii\db\mssql\Schema', // newer MSSQL driver on MS Windows hosts
        'oci' => 'yii\db\oci\Schema', // Oracle driver
        'mssql' => 'yii\db\mssql\Schema', // older MSSQL driver on MS Windows hosts
        'dblib' => 'yii\db\mssql\Schema', // dblib drivers on GNU/Linux (and maybe other OSes) hosts
        'cubrid' => 'yii\db\cubrid\Schema', // CUBRID
        'dm' => 'myy\yii2dm\Schema', // 达梦
    ];

    public $commandMap = [
        'pgsql' => 'yii\db\Command', // PostgreSQL
        'mysqli' => 'yii\db\Command', // MySQL
        'mysql' => 'yii\db\Command', // MySQL
        'sqlite' => 'yii\db\sqlite\Command', // sqlite 3
        'sqlite2' => 'yii\db\sqlite\Command', // sqlite 2
        'sqlsrv' => 'yii\db\Command', // newer MSSQL driver on MS Windows hosts
        'oci' => 'yii\db\oci\Command', // Oracle driver
        'mssql' => 'yii\db\Command', // older MSSQL driver on MS Windows hosts
        'dblib' => 'yii\db\Command', // dblib drivers on GNU/Linux (and maybe other OSes) hosts
        'cubrid' => 'yii\db\Command', // CUBRID
        'dm' => 'myy\yii2dm\Command', // 达梦
    ];
}