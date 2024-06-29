<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_alumni";

$conn= new mysqli('localhost','root','','alumni_db')or die("Could not connect to mysql".mysqli_error($con));
// Assuming you have a specific job ID, replace 'your_job_id' with the actual job ID
$jobId = 'your_job_id';
$sql = "SELECT job_link FROM careers WHERE job_id = '$jobId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the job link
    $row = $result->fetch_assoc();
    $jobLink = $row['job_link'];
} else {
    // Handle if no result is found
    $jobLink = "No link found";
}

// Close the database connection
$conn->close();
?>

<script>
  document.getElementById("applyButton").addEventListener("click", function() {
    // Assuming you have the job link stored in a variable
    var jobLink = $jobLink/* Retrieve job link from your database */;
    // Redirect to the job link
    window.location.href = jobLink;
  });
</script>