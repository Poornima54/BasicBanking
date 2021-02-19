<?php
   // try to conncet to database
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "sbi_bank";
// Create connection with database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {  
    echo '<h1>MySQL Server is not connected</h1>';
}

?>