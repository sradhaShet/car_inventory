<?php
require_once('config.php');
require_once('DB.php');

$db = new DB();
static $dbc;
$dbc = $db->connect_server(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

// @mysql_select_db(DB_NAME) or die("Error in selcting database");