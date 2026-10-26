<?php 
$conn = mysqli_connect("localhost", "root", "" , "uni") ;
if ($conn)
{
$fac_id = $_POST['id'] ;
$faculty_name = $_POST ['FacultyName'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$query = "UPDATE faculty set FacultyName = '$faculty_name' , username = '$username' , password = '$password' where id = '$fac_id'" ;
$result = mysqli_query ($conn,$query) ;
if ($result)
{
    header('Location: faculty_details.php') ;
}
else
{
    echo "Error !!" ;
}
}
mysqli_close($conn);
?>
