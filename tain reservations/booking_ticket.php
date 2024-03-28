<?php
// Define your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $date = $_POST["date"];
    $class = $_POST["class"];
    $berth = $_POST["berth"];

    // Insert data into the database (assuming you have a table named 'users' with columns 'username' and 'password')
    $sql = "INSERT INTO booking_ticket (name,email,from,to,date,class,berth) VALUES ('$name', '$email', '$from', '$to', '$date', '$class', '$berth')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
