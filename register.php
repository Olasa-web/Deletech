<?php 
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_FILES['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_POST['photo']['tmp_name'];
$std=$_POST['std'];



if($password!=$cpassword){
       echo '<script>
       alert("Passwords did not match");
       window.location="../partials/registration.php";
       </script';

}

else{
 
   move_uploaded_file($tmp_name,"../uploads/$image");
   $sql="insert into 'userdata' (username,mobile,password,photo,standard,
   status,votes) values ('$username','$mobile','$password','$image',$std', 0,0)";
   $result=mysqli_query($connection,$sql);
if($result){
    echo '<script>
    alert("Registration successfull");
    window.location="../";
    </script>';

}else{
    die("could not connect".mysqli_connect_error());
}

}


?>