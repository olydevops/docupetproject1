<?php
ob_start();
//DB Connection
define('DB_HOST','docupetdb.ckufjagp4ysm.us-east-1.rds.amazonaws.com');
define('DB_USER','admin');
define('DB_PASS','adminadmin');
define('DB_NAME','docupetdb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
