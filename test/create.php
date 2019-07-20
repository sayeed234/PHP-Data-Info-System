<?php
include 'config.php';
include 'database.php';

$db = new Database();

if(isset($_POST['submit'])){

	$appno = mysqli_real_escape_string ($db->link, $_POST['appno']);
	$etano = mysqli_real_escape_string ($db->link, $_POST['etano']);
	$passport = mysqli_real_escape_string ($db->link, $_POST['passport']);
	$country = mysqli_real_escape_string ($db->link, $_POST['country']);
	$issuedate = mysqli_real_escape_string ($db->link, $_POST['issuedate']);
	$expirydate = mysqli_real_escape_string ($db->link, $_POST['expirydate']);
	$etastatus = mysqli_real_escape_string ($db->link, $_POST['etastatus']);
	$etaid = mysqli_real_escape_string ($db->link, $_POST['etaid']);


	$query = "INSERT INTO `tbl_user`(`appno`, `etano`, `passport`,`country`,`issuedate`,`expirydate`,`etastatus`,`etaid`) VALUES ('$appno','$etano','$passport','$country','$issuedate','$expirydate','$etastatus','$etaid')";

	$create = $db->insert($query);
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
		<form style="margin-top: 55px;" action="" method="post">
			<table class="table table-hover table-condensed table-striped table-bordered col-md-6 " style="margin:0 auto; text-align: center; width: 600px">
			    <tr>
					<td colspan="2"><b><h2>ETA Entry Form</h2></b></td>
				</tr>
				<tr>
					<td>ETA ID.</td>
					<td>
						<input class="form-control" type="text" required name="etaid" placeholder="Please enter ID" >
					</td>
				</tr>
				<tr>
					<td>APP No.</td>
					<td>
						<input class="form-control" type="text" required name="appno" placeholder="Please enter App No." />
					</td>
				</tr>
				<tr>
					<td>ETA No.</td>
					<td>
						<input class="form-control" type="text" required name="etano" placeholder="Please enter ETA Name"/>
					</td>
				</tr>
				<tr>
					<td>Passport</td>
					<td>
						<input class="form-control" type="text" required name="passport" placeholder="Please enter Passport"/>
					</td>
				</tr>
				<tr>
					<td>Country</td>
					<td>
						<input class="form-control" type="text" required name="country" placeholder="Please enter Country"/>
					</td>
				</tr>
				<tr>
					<td>Issue Date</td>
					<td>
						<input class="form-control" type="date" required name="issuedate"/>
					</td>
				</tr>
				<tr>
					<td>Expiry Date</td>
					<td>
						<input class="form-control" type="date" required name="expirydate" />
					</td>
				</tr>
				<tr>
					<td>ETA Status</td>
					<td>
						<input class="form-control" type="text" required name="etastatus" placeholder="Please enter ETA Status"/>
					</td>
				</tr>             
			</table>
		</div><br>
		<div style="margin-left: 700px">
			<button type="submit" class="btn btn-success" name="submit">Submit</button> 
			<a class="btn btn-primary" href="index.php">View List</a>
		</div>
           </form>
           <br><br>
       </div>
	</body>
	</html>