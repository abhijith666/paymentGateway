<?php
 require_once("config.php");
 if(isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_phone']) && isset($_POST['user_bio'])){
   $name=$_POST['user_name'];
   $email=$_POST['user_email'];
   $phone=$_POST['user_phone'];
   $bio=$_POST['user_bio'];
   $sql = "INSERT INTO contact (name, email, phone, message) 
                    VALUES ('$name', '$email', $phone, '$bio')";
    $res = mysqli_query($conn, $sql);
 }
 if($res){
     echo "<script>
     window.location.href = 'volunteer.php'
     </script>";
 }


?>