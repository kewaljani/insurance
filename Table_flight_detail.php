<?php
include 'Connection.php' ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
flight_id VARCHAR(30) NOT NULL,
airline_name VARCHAR(30) NOT NULL,
flight_type VARCHAR(30) NOT NULL,
class_type VARCHAR(30) NOT NULL,
from_place VARCHAR(30) NOT NULL,
to_place VARCHAR(30) NOT NULL,
d_date VARCHAR(30) NOT NULL,
no_of_seats VARCHAR(30) NOT NULL,
DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>