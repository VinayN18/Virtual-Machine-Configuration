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

// Check if form has been submitted
if (isset($_POST['search'])) {
    // Get search input
    $search = $_POST['search'];

    // Search database for input
    $sql = "SELECT * FROM user WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);

    // Display results
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found!";
    }
}

$conn->close();
?>
