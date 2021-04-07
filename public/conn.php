<!-- connection -->
<?php
$severname="localhost";
$username="root";
$password="";
$database="ouat";
$conn=mysqli_connect($severname,$username,$password,$database);
if(!$conn){
    die("connection error".mysqli_connect_error($conn));
}
else{
    
}
?>



<?php
/*include "conn.php";

if(isset($_POST['submit']))
{
    $fname = $_POST['register_first_name'];
    $lname = $_POST['register_last_name'];
    $email = $_POST['register_email'];
    $number = $POST['register_phonenumber'];
    $department = $POST['register_department'];
    $pyear = $POST['register_passing_year'];
    $pass = $POST['register_password'];
    $gender = $POST['register_gender'];


    
   $sql = "INSERT INTO `ouat` (`first_name`, `last_name`, `e_mail`, `phone_number`, `department`, `passing_year`, `password`, `gender`) VALUES ('$fname','$lname ','$email','$number', '$department', '$pyear', '$pass', '$gender')";
   
   $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

}*/
?>
