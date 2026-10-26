<?php
    session_start() ;
    $username = $_POST ['username'] ;
    $password = $_POST ['password'] ;
    $con = mysqli_connect ("localhost" ,"root" ,"" ,"uni");
    $sql= "SELECT * from st_info where FullName = '$username' and passwd = '$password' " ;
    $c = mysqli_query($con,$sql);
    if (mysqli_num_rows($c)>0)
    {
        $_SESSION["username"] = $username ;
        header ( 'Location:dashboard.php' );
    }
    else
    {
        header ( 'Location:login_wrong.php' );
    }
?>
