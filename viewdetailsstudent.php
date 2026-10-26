
<html>
    <head> 
	<title> Student Details </title>
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >  
    <link rel="stylesheet" href="./styles/st.css" >
	</head>
<body>
<?php
	$conn = mysqli_connect("localhost", "root", "" , "uni");
    if(isset($_REQUEST['id'])){
		$st_id = $_REQUEST['id'];
	}
	$query = "select * from st_info where id='$st_id'";
	$result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_array($result)
?>
	<img src="image/<?php echo $rows['filename'];?>" >
	<p> Full Name : <?php echo $rows['FullName']; ?> </p> 
	<p> Address : <?php echo $rows['Addres'];?> </p>
	<p> Gender : <?php echo $rows['gender'];?> </p>
	<p> E_mail : <?php echo $rows['email'];?> </p>
	<p> Phone : <?php echo $rows['phone'];?> </p>
	<p> Major : <?php echo $rows['major'];?> </p>
</body>
</html>
