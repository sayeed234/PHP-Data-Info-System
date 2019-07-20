<?php
/*
	include 'config.php';
	include 'database.php';
	$id =$_GET['id'];
	$db	= new Database();
print_r($_GET);
	if(isset($_GET['id'])){
		$query ="DELETE FROM tbl_user WHERE id='$id' ";
		$deletedata = $db->delete($query) ;
		//header("location:index.php");
		

	}*/
	
?>

<?php
include 'config.php';
include 'database.php';

$db	= new Database();

$redirect = [
	'tbl_user'=>'index.php',
];
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$alies = $_GET['alies'];
	$query = "DELETE FROM $alies WHERE id=$id";
	$deletedata = $db->delete($query);
	header("location:$redirect[$alies]");
}
?>



