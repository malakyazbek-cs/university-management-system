<?php
	$conn = mysqli_connect("localhost", "root", "" , "uni");
	if(isset($_REQUEST['id'])){
		$st_id = $_REQUEST['id'];
	}
	
    $delete = "delete from st_info where id='$st_id' ";
	$result = mysqli_query($conn, $delete);
	
	if ( $result ){
		header('Location: viewallstudent.php');
		
	}
?>



