<?php
	$conn = mysqli_connect("localhost", "root", "" , "uni");
    if(isset($_REQUEST['id'])){
		$fac_id = $_REQUEST['id'];
	}
	$query = "select * from faculty where id='$fac_id'";
	$result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_array($result)
?>
<html>
    <head> 
    <title>  Edit Faculty Info </title> 
    <link rel="stylesheet" href="./styles/updatefaculty.css" >
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >    
    </head>
<body>
<form action="updatefac.php" method="POST">
		<div id="b" > 
        <p> ID : </p> <input type=number name='id' value="<?php echo $rows['id'];?>" readonly > 
        <p> Faculty Name : </p>  <input type=text name='FacultyName' value="<?php echo $rows['FacultyName'];?>" > 
		<p> Username : </p> <input type=text name='username' value=" <?php echo $rows['username'];?>" >
        <p> Code : </p> <input type=text name='password' value=" <?php echo $rows['password'];?>" > 
        <p> </p>
        <input type="submit" name="submit" value="Update"> 
        </div>
</form>
</body>
</html>
