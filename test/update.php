	<?php
	include 'config.php';
	include 'database.php';
	?>
	<?php

	$id =$_GET['id'];
	$db	= new Database();
	$query	= "SELECT  * FROM tbl_user WHERE id=$id";
	$editdata	= $db->select($query)->fetch_assoc();


	if(isset($_POST['update'])){
		$appno = mysqli_real_escape_string ($db->link, $_POST['appno']);
		$etano = mysqli_real_escape_string ($db->link, $_POST['etano']);
		$passport = mysqli_real_escape_string ($db->link, $_POST['passport']);
		$country = mysqli_real_escape_string ($db->link, $_POST['country']);
		$issuedate = mysqli_real_escape_string ($db->link, $_POST['issuedate']);
		$expirydate = mysqli_real_escape_string ($db->link, $_POST['expirydate']);
		$etastatus = mysqli_real_escape_string ($db->link, $_POST['etastatus']);
		$etaid = mysqli_real_escape_string ($db->link, $_POST['etaid']);

		$query = "UPDATE `tbl_user` SET `appno`='$appno',`etano`='$etano',`passport`='$passport',`country`='$country',`issuedate`='$issuedate',`expirydate`='$expirydate',`etastatus`='$etastatus',`etaid`='$etaid' WHERE id='$id'";

		$update = $db->update($query);
		print_r($update );
	}
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>ETA ADMIN FROM</title>
		<link rel="stylesheet" href="inc/bootstrap.min.css" media="screen" title="no title">
		<script type="text/javascript" src="inc/bootstrap.min.js"></script>
		<script type="text/javascript" src="inc/jquery.min.js"></script> 
	</head>
	<body>
		<div>
		<form style="margin-top: 15px;" action="update.php?id=<?php echo $id;?>"method="post">
			<table class="table table-hover table-condensed table-striped table-bordered col-md-6 " style="margin:0 auto; text-align: center; width: 600px">
				<tr>
					<td>ETA ID</td>
					<td>
						<input class="form-control" type="text" name="etaid"  value="<?php echo($editdata['etaid'])?>">
					</td>
				</tr>

				<tr>
					<td>APP No.</td>
					<td>
						<input class="form-control" type="text" name="appno"  value="<?php echo($editdata['appno'])?>">
					</td>
				</tr>
				
				<tr>
					<td>ETA No</td>
					<td>
						<input class="form-control" type="text" name="etano"  value="<?php echo($editdata['etano'])?>">
					</td>
				</tr>
				<tr>
					<td>Passport</td>
					<td>
						<input class="form-control" type="text" name="passport" value="<?php echo($editdata['passport'])?>">
					</td>
				</tr>
				<tr>
					<td>Country</td>
					<td>
						<input class="form-control" type="text" name="country" value="<?php echo($editdata['country'])?>">
					</td>
				</tr>

				<tr>
					<td>Issue Date</td>
					<td>
						<input class="form-control" type="date" name="issuedate"  value="<?php echo($editdata['issuedate'])?>">
					</td>
				</tr>
				<tr>
					<td>Expiry Date</td>
					<td>
						<input class="form-control" type="date" name="expirydate" value="<?php echo($editdata['expirydate'])?>">
					</td>
				</tr>
				<tr>
					<td>ETA Status</td>
					<td>
						<input class="form-control" type="text" name="etastatus" value="<?php echo($editdata['etastatus'])?>">
					</td>
				</tr>
				
				
			

			</table>
		</div> <br>
		<div style="margin-left: 390px">
			<button type="submit" class="btn btn-success" name="update">Update</button> 
			<a class="btn btn-primary" href="index.php">View List</a>
		</div>

	</body>
	</html>