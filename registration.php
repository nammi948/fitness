<?php include 'connect.php';
   session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
   $name=$_POST['name'];
     $email=$_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $address=$_POST['address'];
       $city=$_POST['city'];
        $state=$_POST['state'];
         $pincode=$_POST['pincode'];
         
         $result=mysqli_query($con,"SELECT  * FROM  userss where email='$email'");
         if(mysqli_num_rows($result)> 0){
            echo "<script>alert('Already Email Exists');</script>";
         }
         $sql="INSERT INTO userss (name,email,password,address,city,state,pincode)
          VALUE('$name','$email','$password','$address','$city','$state','$pincode') ";
          $data=mysqli_query($con,$sql);
          if($data){
         echo "<script>alert('Registration Successful');window.location.href = 'register.php';</script>";
          }
          else{
              echo "<script>alert('Registration Unsuccessful');window.location.href='register.php';</script>";
          }
         
        }
?>