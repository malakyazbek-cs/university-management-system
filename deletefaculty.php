<?php
	$conn = mysqli_connect("localhost", "root", "" , "uni");
	if(isset($_REQUEST['id'])){
		$fac_id = $_REQUEST['id'];
	}
	
    $delete = "delete from faculty where id='$fac_id' ";
	$result = mysqli_query($conn, $delete);
	
	if ( $result ){
		header('Location: faculty_details.php') ;
		
	}
?>

