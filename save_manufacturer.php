<?php
require_once('load.php');

 $db1 = new DB();
 $name = $_POST['mname'];
 // INSERT INTO `car_inventory`.`manufacturer` (`id`, `car_model`, `status`, `date`) VALUES (NULL, 'test', '1', CURRENT_TIMESTAMP);
$insert_query = "INSERT INTO `car_inventory`.`manufacturer` (`car_model`, `status`) VALUES ( '$name', '1')";
 $data = $db1->insert_data($dbc,$insert_query);
header('location: car_model.php');
 
