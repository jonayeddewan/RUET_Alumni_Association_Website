<?php
// redirect.php
// Replace DB_HOST, DB_USER, DB_PASSWORD, and DB_NAME with your database credentials
//$conn1 = new mysqli('localhot', 'DB_USER', 'DB_PASSWORD', 'DB_NAME');
include 'db_connect.php'; 

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$result = $conn1->query("SELECT job_link FROM careers ORDER BY id DESC LIMIT 1");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $redirectLink = $row['job_link'];
    header("Location: $redirectLink");
    exit();
} else {
    echo "No link found";
}

$conn1->close();
?>