<?php

// Set the database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bittech_db";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the SQL query to retrieve data from the database
$sql = "SELECT * FROM risks";

// Execute the query
$result = $conn->query($sql);

// Fetch the data from the result and store it in an array
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Convert the array to JSON format
$json_data = json_encode($data);

// Set the response header to indicate that the response contains JSON data
header('Content-Type: application/json');

// Output the JSON data to the HTML page
echo $json_data;

// Close the database connection
$conn->close();

?>
