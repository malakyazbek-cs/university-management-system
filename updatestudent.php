<?php
    session_start();
	$conn = mysqli_connect("localhost", "root", "" , "uni");
    if(isset($_REQUEST['id'])){
		$st_id = $_REQUEST['id'];
	}
	$query = "select * from st_info where id='$st_id'";
	$result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_array($result);
?>
<html>
    <head> 
    <title>  Edit Student Info </title> 
    <link rel="stylesheet" href="./styles/updatestudent.css" >
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >    
    </head>
<body>
<form action="update.php" method="POST">
		<div id="b" >
        <p> ID : </p> <input type=number name='id' value="<?php echo $rows['id'];?>" readonly > 
        <p> Name : </p> <input type=text name='FullName' value="<?php echo $rows['FullName'];?>" > 
		<p> Adress : </p> <input type=text name='Addres' value=" <?php echo $rows['Addres'];?>" >
        <p> Gender : </p> <input type=text name='gender' value=" <?php echo $rows['gender'];?>" >
        <p> E_mail : </p> <input type=text name='email' value=" <?php echo $rows['email'];?>" >
        <p> Phone : </p> <input type=text name='phone' value=" <?php echo $rows['phone'];?>" >
        <p> Major: </p> <input type=text name='major' value=" <?php echo $rows['major'];?>" > 
        <p> <input type="submit" name="submit" value="Update"> </p>
</form>
</body>
</html>
