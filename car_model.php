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
			 action="save_model.php" class="fmanifature" method="post" enctype="multipart/form-data">
			<div class="row">
				<?php 
				$db = new DB();
				$sql="select DISTINCT(car_model) AS car_model,id from manufacturer where status =1";
				$data =$db->get_data($dbc,$sql);
				?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<select name="mid">
					<option value=""> select option</option>
					<?php foreach($data as $val) { ?>
						<option value="<?= $val['id'] ?>"><?= $val['car_model'] ?></option>
					<?php } ?>
					</select>
					<input type="text" placeholder="Model" id="model_name"  name="model_name" class="input-label" required="required"/>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input type="submit" value="Submit" name="submit" />
				</div>
			</div>
		</div>
		<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>