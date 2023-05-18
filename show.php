<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select data from database
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

// Display data
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No data found!";
}

$conn->close();
?>
