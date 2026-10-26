<?php 
$conn = mysqli_connect("localhost", "root", "" , "uni") ;
if ($conn)
{
    $st_id = $_POST['id'] ;
    $name = $_POST ['FullName'];
    $address = $_POST ['Addres'];
    $gender = $_POST ['gender'];
    $email = $_POST ['email'];
    $major = $_POST ['major'];
    $phone = $_POST ['phone'];
    $query = "UPDATE st_info set FullName = '$name' , Addres = '$address' , gender = '$gender' , email = '$email' , major = '$major' , phone = '$phone' where id = '$st_id' " ;
    $result = mysqli_query ($conn,$query) ;
if ($result)
{
    header('Location:viewallstudent.php') ;
}
else 
{
    echo " Error updating information " ;
}
mysqli_close ($conn) ;
}
?>
