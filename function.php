<?php include "db.php"; ?>
<?php

function showAllData() {
    
    // global variableName is used to acess a global variable fro within a function
    global $connection;
   if(!$connection)
        die("Error " . mysqli_error());
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    while($eachrow = mysqli_fetch_assoc($result)){
        $id = $eachrow['id'];
        //on selectionm $id, value becomes $id, i.e 2 for 2, 3 for 3
        echo "<option value='$id'>$id</option>";
    }
}


function updateData(){
    if(isset($_POST['submit'])){
    global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";
        $result = mysqli_query($connection, $query);
        if(!$result)
            die("Error Updating data ". mysqli_error($connection));
        else 
            echo "Updated data";

    }
}

function deleteData(){
    if(isset($_POST['submit'])){

    global $connection;
    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id = $id ";
    $result = mysqli_query($connection, $query);
    if(!$result)
        die("Error deleting data " . mysqli_error($connection));
    else 
        echo "Deleted data";
    }
}

function insertData(){
    if (isset($_POST['submit'])) {
        
    
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    //allows saving username with escape character such as ',
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
   
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);

    $query = "INSERT INTO users(username, password) ";
     //appending string
     $query .= "VALUES ('$username', '$password')";
     $result = mysqli_query($connection, $query);
     if (! $result) 
         die('Query failed' . mysqli_error);
     else 
         echo "Inserted data";
    }
}

 /**
             * In the below code data is retrieved from database
             * $result = mysqli_query($connection, $query); is used to retrieve data and store it in vriable result
             *  $connection implies info about connection: IP, uname, pwd, databasename
             *  $query implies the query to be executed in server
             * $result = mysqli_fetch_assoc($result) fetches data from database along with column name
             * $result = mysqli_fetch_row($result) fetches only the data
             * to use html tags we can do so by simply closing php brackets as done below
             * To execute next line of while loop we again had to open php bracket
             * PHP interpreter will read while(condition)->print_r(variable) and will skip the <pre> tag
             */
          
function retrieveData(){
    global $connection;
    // if(isset($_POST['retrieve'])){
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        while ($eachrow = mysqli_fetch_assoc($result)) {
            ?>
            
            <?php print_r($eachrow); ?>
           
            <?php
        }
    // }
}
?>