<?php
 require_once("config.php");
 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $message=$_POST['message'];
   $sql = "INSERT INTO message (contact_name,Contact_email,contact_no,contact_message) 
                    VALUES ('$name', '$email', $phone, '$message')";
   $res = mysqli_query($conn, $sql);
 }
 if($res){
     echo "<script>
     window.location.href = 'index.php'
     </script>";
 }


?>