<html>
<head>    
	<title>  View All Student </title> 
    <link rel="stylesheet" href="./styles/viewallstudent.css" >
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >  
</head>
<body>	
<?php
	$conn = mysqli_connect("localhost", "root", "" , "uni");
	$query = "select * from st_info order by id ASC";
	$result = mysqli_query($conn, $query);
?>
<div>
		<table>
			<tr>
				<th> &nbsp; ID &nbsp; </th>
				<th> &nbsp; Name &nbsp; </th>
				<th> &nbsp; Show Profile &nbsp; </th>
				<th> &nbsp; Edit &nbsp; </th>
				<th> &nbsp; Delete &nbsp; </th>
				<th> &nbsp; Photo &nbsp; </th>
			</tr>
			<?php 
			while ($rows = mysqli_fetch_array($result)) {
            ?>
			<tr>
				<td> &nbsp; <?php echo $rows['id'];?> &nbsp; </td>
				<td> &nbsp; <?php echo $rows['FullName'];?> &nbsp; </td>
				<td> &nbsp; <a href="viewdetailsstudent.php?id=<?php echo $rows['id'];?>">
				View Details</a> &nbsp; </td>
				<td> &nbsp; <a href="updatestudent.php?id=<?php echo $rows['id'];?>">
				Edit</a> &nbsp; </td>
				<td> &nbsp; <a id = "b" href="deletestudent.php?id=<?php echo $rows['id'];?>">
				Delete</a> &nbsp; </td>
				<td> &nbsp; <img src="image/<?php echo $rows['filename'];?>" width="50px" height="50px"> &nbsp; </td>
			</tr>
			<?php } ?>
		</table>
</div>
			</body>
			</html>