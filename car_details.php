<?php require_once('load.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport"    content="width=device-width, initial-scale=1.0">
		<title>Car Inventory System</title>
		<link rel="shortcut icon" href="#">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- <link rel="stylesheet" href="assets/css/main.css"> -->
	</head>
	<body>
		<div class="container">
			<ul>
				<li> <a href="index.php"> Manufacturer </a> </li>
				<li> <a href="car_model.php"> Car Model </a> </li>
				<li> <a href="car_details.php"> Car Details </a> </li>
			</ul>
			<form id="fmanifature" name="fmanifature" 
			 action="save_model.php" class="fmanifature" method="post"  enctype="multipart/form-data">
			<div class="row">
				<?php 
				$db = new DB();
				$sql="SELECT m.car_model,md.model_name,count(md.id) as count FROM `manufacturer` m LEFT JOIN models md ON md.manu_id = m.id  WHERE m.status = 1 and md.status = 1 group by m.id,md.model_name ";
				$data =$db->get_data($dbc,$sql);
				?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<table id="details" border='5'>
					<tr>
						<th>Sr. Num</th>
						<th>Manudacturer</th>
						<th>Model</th>
						<th>count</th>
						<th></th>
					</tr>
					<?php foreach($data as $key=>$val) { ?>
						<tr>
							<td><?= $key+1 ?></td>
							<td><?= $val['car_model'] ?></td>
							<td><?= $val['model_name'] ?></td>
							<td id="c<?= $key ?>"><?= $val['count'] ?></td>
							<td> <input type="button" value="sold" class="sold" onclick="change_count(this);"></td>
						</tr>
					<?php } ?>
				</table>
				</div>
			</div>
		</div>
		<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>