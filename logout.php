<html>
    <head>
    <title> Dashboard </title>
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >  
    <link rel="stylesheet" href="./styles/logout.css" >
    </head>
<body>
<?php
session_start() ;
if (isset($_POST['done'])) 
{
    session_destroy() ;
    header ( 'Location:st_login.php' ) ;
}
?>
<table>
    <tr> <td> <h1> Welcome <?php echo $_SESSION ["username"] ; ?> ! </h1> </td> </tr>
    <tr><td> 
    <p> 
    <form action="" method="post" enctype= "multipart/form-data" >
    <input type="submit" name="done" value="Logout" > </form> 
    </p> </td> </tr>
</table>
</body>
</html>
