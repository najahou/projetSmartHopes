<?php
$mysqli = new mysqli("localhost","root","","maison");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM demande")) {
    echo $result -> num_rows;
    // Free result set
    echo $result -> free_result();
}

$mysqli -> close();
?>