<?php
  
  // Connecting to data base
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";


// Creat a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not succesful
// if(!$conn)
// {
//     die("Sorry we failed to connect: ".mysqli_connect_error());
// }
// echo " <br> Connection was succesful";




// //Creat a db
// $sql = "CREATE DATABASE users";
// $result = mysqli_query($conn, $sql);

// // Check for database creatio success
// if($result)
// {
//     echo " The data base was created succsfully";
// }
// else{
//     echo " The db was not created successfully because of this error ".mysqli_error($conn);
// }

?>