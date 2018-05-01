<?php
require_once('load.php');

$db1 = new DB();
$name = $_POST['model_name'];
$manu_id = $_POST['mid'];
$sql="select id from models order by id DESC LIMIT 1";
$data =$db->get_data($dbc,$sql);
$id = intval($data[0]['id'])+1;
$insert_query = "INSERT INTO `car_inventory`.`models` (`id`, `manu_id`,`model_name`, `status`) VALUES ('$id','$manu_id' ,'$name', '1');";
$data = $db1->insert_data($dbc,$insert_query);

// $insert_query = "INSERT INTO `car_inventory`.`manu_model` (`id`, `model_id`, `manu_id`) VALUES (NULL, '$id', '$manu_id')";
// $data = $db1->insert_data($insert_query);

header('location: car_details.php');
 
