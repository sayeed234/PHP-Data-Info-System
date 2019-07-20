<?php
include 'config.php';
include 'database.php';

?>

<?php
	$db	= new Database();
	$query	= "SELECT  * FROM tbl_user";
	$read	= $db->select($query);
?>


<!DOCTYPE html>
<html>
<head>
	<title>ETA ADMIN FROM</title>
	<link rel="stylesheet" href="inc/bootstrap.min.css" media="screen" title="no title">
	<link rel="stylesheet" href="inc/data.css" media="screen" title="no title">
	<link rel="stylesheet" href="inc/data3.css" media="screen" title="no title">
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>
	<script type="text/javascript" src="inc/jquery.min.js"></script>
	<script type="text/javascript" src="inc/data1.js"></script>
	<script type="text/javascript" src="inc/data2.js"></script>
	<script type="text/javascript" src="inc/data4.js"></script>
	
</head>
<body>

	<div class="container">
	<div class="row "style="margin-top:30px;">

		    <a style="margin-left: 186px; margin-top:20px" class="btn btn-success"  href="create.php">Add Data</a>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark ">
            <tr>
			    <th>ETA ID</th>
                <th>App No.</th>
                <th>ETA No.</th>
                <th>Passport</th>
                <th>Country</th>
                <th>Issue date</th>
                <th>Expiry date</th>
				<th>ETA Status</th>
				<th>Action</th>			
            </tr>
        </thead>
        <tbody>
		<?php if ($read){?>
			<?php 
		while ($row = $read->fetch_assoc()){?>
				<tr style='text-align:center'>
					<td> <?php echo $row['etaid']; ?>  </td>
					<td> <?php echo $row['appno']; ?>  </td>
					<td> <?php echo $row['etano']; ?>  </td>
					<td> <?php echo $row['passport']; ?>  </td>
					<td> <?php echo $row['country']; ?>  </td>
					<td> <?php echo $row['issuedate']; ?>  </td>
					<td> <?php echo $row['expirydate']; ?>  </td>
					<td> <?php echo $row['etastatus']; ?>  </td>
					<!--  -->
					<td> 
						<a class="btn btn-primary" href="update.php?id=<?php echo $row['id'];?>&&alies=tbl_user">Edit</a>
						<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>&&alies=tbl_user">Delete</a>
					</td>

				</tr>
			<?php } ?>
		<?php }else{ ?>

		<?php } ?>
           
        </tbody>
        <tfoot>
		     <tr>
		        <th>ETA ID</th>
                <th>App No.</th>
                <th>ETA No.</th>
                <th>Passport</th>
                <th>Country</th>
                <th>Issue date</th>
                <th>Expiry date</th>
				<th>ETA Status</th>
				<th>Action</th>
            </tr>
		</tfoot>
		</table>

		
		</div>
	</div>

	

	<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
	</script>
</body>
</html>