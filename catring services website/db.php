<?php
 session_start();
 // servername => localhost
 // username => root
 // password => empty
 // database name => catringsservices
 $conn = mysqli_connect("localhost", "root", "", "catringservices");
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  
 // Taking all values from the form data(input)
 $username =  $_REQUEST['username'];
 $email = $_REQUEST['email'];
 $message =  $_REQUEST['message'];
 
  
 // here our table name is database
 if($username !="" && $email !="" && $message !=""){
    
     // Performing insert query execution
 $sql = "INSERT INTO `userdata`(`username`, `email`, `message`) VALUES ('$username','$email','$message') ";
  
 if(mysqli_query($conn, $sql))   
 {
    $_SESSION['status']="<h5>Thank you for submiting</h5>";
     header("location: contact.php");
 }
 else
 {
    echo "error";
 }
}
 else{
    $_SESSION['status_error']="<h5>Enter Correct Detalis</h5>";
    header("location: contact.php");
 
}