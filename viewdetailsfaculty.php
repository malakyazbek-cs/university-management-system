<html>
    <head>
    <head> 
    <title> Faculty Details </title> 
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >  
    <link rel="stylesheet" href="./styles/viewdetailsfaculty.css" >
    </head>
    <body>
        <?php
	    $conn = mysqli_connect("localhost", "root", "" , "uni");
        if (isset ($_REQUEST['id']))
        {
            $id = $_REQUEST ['id'] ;
        }
        $sql = " SELECT * from faculty where id = '$id' " ;
        $res = mysqli_query($conn , $sql) ;
        ?>
        <div id="faculty">
        <table>
        <tr> 
            <th> ID </th> 
            <th> Faculty Name </th> 
            <th> UserName </th> 
            <th> Code </th> 
        </tr>
    <?php
                while ( $rows = mysqli_fetch_array ( $res ) ) {
                ?>
                <tr> <td> <?php echo $rows ['id']; ?> </td> 
                <td> <?php echo $rows ['FacultyName']; ?> </td> 
                <td>  <?php echo $rows ['username']; ?> </td>
                <td>  <?php echo $rows ['password']; ?> </td>
                </tr>
    <?php } ?>
        </table>
        </div>
    </body>
</html>