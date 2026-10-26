<html>
    <head>
    <head> 
    <title> Faculty Area </title> 
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >  
    <link rel="stylesheet" href="./styles/faculty_details.css" >
    </head>
    <body>
        <?php
	    $conn = mysqli_connect("localhost", "root", "" , "uni");
        $sql = "SELECT * from faculty order by id ASC" ;
        $res = mysqli_query($conn , $sql) ;
        ?>
        <div id="faculty">
        <table>
            <tr> 
            <th> ID </th> 
            <th> Faculty Name </th> 
            <th> View Details </th> 
            <th> Edit </th> 
            <th> Delete </th> 
            </tr>
                <?php
                while ( $rows = mysqli_fetch_array ( $res ) ) {
                ?>
                <tr> <td> <?php echo $rows ['id']; ?> </td> 
                <td> <?php echo $rows ['FacultyName']; ?> </td> 
                <td> <a href="viewdetailsfaculty.php?id=<?php echo $rows['id'];?>">
				View Details </a> </td>
				<td> <a href="updatefaculty.php?id=<?php echo $rows['id'];?>">
				Edit </a> </td>
				<td> <a id = "b" href="deletefaculty.php?id=<?php echo $rows['id'];?>">
				Delete </a> </td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </body>
</html>