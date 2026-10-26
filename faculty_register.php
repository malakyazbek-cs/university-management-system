<html>
    <head> 
    <title>  Faculty Area </title> 
    <link rel="stylesheet" href="./styles/faculty_register.css" >
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >  
    </head>
<body>
    <?php
    $con = mysqli_connect ("localhost" ,"root" ,"" ,"uni");
    if (isset($_POST['done'])) 
    { 
    $n = $_POST ['name'] ;
    $p = $_POST ['username'] ;
    $q = $_POST ['password'] ;
    $x = "INSERT INTO faculty ( FacultyName, username, password ) VALUES ( '$n', '$p','$q' ) " ;
    $s = mysqli_query($con, $x) ;
    if ($s)
    {
        header('Location:done.php') ;
    }
    }
    ?>
    <table>
    <form action="" method="post" enctype= "multipart/form-data" >
    <div id="big">
    <tr> <th colspan="2" id="a" > Faculty Registration Form </th> </tr>
    <tr> <th> Faculty Name : </th> <td> <input id="i" type="text" name="name" placeholder= " Example : Faculty of Engineering " required > </td> </tr>
    <tr> <th> Username : </th> <td> <input id="i" type="username" name="username" placeholder=" Username" required > </td> 
    <tr> <th> Password : </th> <td> <input id="i" type="password" name="password" placeholder=" Password" required > </td> 
    <tr> <th colspan="2" > <input id="b" type="submit" name="done" value = "Register" > </th> </tr>
    </div>
    </form>
    </table>
</body>
</html>
