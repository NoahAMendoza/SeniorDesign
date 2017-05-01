<?php

#$servername = "ZingCast";
$username = "root";
$password = "password";
$dbName = "zingy";
//Create a connection to the server
$conn = new mysqli( $username, $password, $dbName);

//check the connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connected Successfully";

$command = "";
$table = "";
$value = "";
$toUpdate = "";

switch($command) {
        case "update":
            $query = "update $table where $value = $toUpdate;"; break;
        case "select":
            $query = "select $value from $table "; break;
        case ""
    }


$conn->close();

?>

//Java mobile sends a message to a queue
//read from the queue
    //Login - validate credentials and pass back token
        //first time login - create an entry for the new screen or user
        //any other login - query the valid credentials and compare to provided
                        then provide the device with a thread & messenger queue
    //Content - pass the message to the content manager to be served
    //Quit - close the session
