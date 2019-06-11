<?php
 $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
  
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   if ($connection) 
       echo "We are connected";
    else
        die("Error connecting to database");


        //SEND data
    $query = "INSERT INTO users(username, password) ";
    //appending string
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if (! $result) 
        die('Query failed' . mysqli_error);


        //RETRIEVE DATA

}
?>
