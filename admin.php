<html>
<head> 
    <title> Admin Login </title> 
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >  
    <link rel="stylesheet" href="./styles/admin.css" >
</head>
<body>
<?php
    $con = mysqli_connect ("localhost" ,"root" ,"" ,"uni");
    if (isset($_POST['done'])) 
    { 
        $username = $_POST ['username'] ;
        $password = $_POST ['password'] ;
        $con = mysqli_connect ("localhost" ,"root" ,"" ,"uni");
        $sql= "SELECT * from a_dmin where username = '$username' and passwd = '$password' " ;
        $c = mysqli_query($con,$sql) ;
        if (mysqli_num_rows($c)>0)
        {
            header('Location:admin_info.php') ;
        }
        else
        {
            header('Location:admin_wrong.php') ;
        }
    }
?>
    <div id = "big">
        <form action="" method="post" enctype= "multipart/form-data" > 
        <fieldset id="container"> <legend id="word"> Admin Login </legend> <br>
        <input type="text" name="username" placeholder="Username" required > <br>
        <input type="text" name="password" placeholder="Password" required > <br>         
        <input type="submit" name="done" value="Login" >            
        </fieldset>
        </form>
    </div>
</body>
</html>