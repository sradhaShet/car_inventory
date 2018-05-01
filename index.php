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
			 action="save_manufacturer.php" class="fmanifature" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input type="text" placeholder="Manufacturer Name" id="mname"  name="mname" class="input-label" required="required"/>
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