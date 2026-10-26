<html>
    <head> 
    <title>  Student Area </title> 
    <link rel="stylesheet" href="./styles/register.css" >
    <link rel="icon" type="image/x-icon" href="./bgs/1.png" >  
    </head>
<body>
    <?php
    $con = mysqli_connect ("localhost" ,"root" ,"" ,"uni");
    if (isset($_POST['done'])) 
    { 
    $n = $_POST ['name'] ;
    $p = $_POST ['password'] ;
    $a = $_POST ['address'] ;
    $g = $_POST ['gender'] ;
    $m = $_POST ['e_mail'] ;
    $w = $_POST ['major'] ;
    $q = $_POST ['phone'] ;
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./image/" . $filename;
    $x = "INSERT INTO st_info ( FullName, passwd, Addres, gender, email , filename , major , phone ) VALUES ('$n', '$p','$a','$g','$m', '$filename' ,'$w' , '$q' ) " ;
    $s = mysqli_query($con, $x) ;
    if (move_uploaded_file($tempname, $folder)) 
    {
        if (isset($s))
        { 
            header("Location:done.php"); 
        }
    } 
    }
    ?>
    <table>
    <form action="" method="post" enctype= "multipart/form-data" >
    <tr> <th colspan="2" id="a" > Student Registration Form </th> </tr>
    <tr> <th> Name : </th> <td> <input id="i" type="text" name="name" placeholder= "Full Name" required > </td> </tr>
    <tr> <th> Password: </th> <td> <input id="i" type="password" name="password" placeholder="password" required > </td> 
    <tr> <th> E - mail : </th> <td> <input id="i" type="email" name="e_mail" placeholder="example@email.com" required > </td> 
    <tr> <th> Date of Birth : </th> 
    <td> <select name = "date" >
    <option value="Jan" required > Jan </option> <option value="Feb" required > Feb </option> 
    <option value="Mar" required > Mar </option> <option value="Apr" required > Apr </option>
    <option value="May" required > May </option> <option value="Jun" required > Jun </option> 
    <option value="Jul" required > Jul </option> <option value="Aug" required > Aug </option> 
    <option value="Sep" required > Sep </option> <option value="Oct" required > Oct </option> 
    <option value="Nov" required > Nov </option> <option value="Dec" required > Dec </option> </select>
    <input id="t" type="text" name="day" placeholder= "Day" maxlength="2" required >
    <input id="t" type="text" name="day" placeholder= "Year" maxlength="4" required >
    </td> 
    <tr> <th> Contact : </th> <td>  <input id="i" type="text" name="phone" placeholder="phone" maxlength="12" required > </td> </tr>
    <tr> <th> Gender : </th> 
    <td>  <input type="radio" name="gender" value="Male" required > Male <input type="radio" name="gender" value="Female" required > Female </td> </tr>
    <tr> <th> Address : </th> <td> <input id="i" type="text" name="address" placeholder= "Address" required > </td> </tr>
    <tr> <th> Major: </th> <td> <input id="i" type="text" name="major" placeholder="major" required > </td> 
    <tr> <th> Image:  </th> <td> <input type="file" name="img" value="upload_image" required >  </td></tr>
    <tr> <th colspan="2" > <input id="b" type="submit" name="done" value = "Register" > </th> </tr>
    </form>
    </table>
</body>
</html>
