<html>
    <head>
    <title> Dashboard </title>
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >  
    <link rel="stylesheet" href="./styles/dashboard.css" >
    </head>
<body>
<?php
session_start() ;
?>
<table>
    <tr> <td> <h1> Welcome <?php echo $_SESSION ["username"] ; ?> ! </h1> </td> </tr>
    <tr> <td> <p> <a href="st_login.php"> Back &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> </p> </td> <td> <p> <a href="Logout.php"> New </a> </p> </td> </tr>
</table>
</body>
</html>
