<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banani";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO banu (name,email_id,mobilenumber,services)
VALUES ('$_POST[name]', '$_POST[email]', '$_POST[mobilenumber]','$_POST[services]')";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/banani/");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>