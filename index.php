<!DOCTYPE html>
<html>
<body>

<?php
$servername = "mysql_app";
$username = "root";
$password = "";
$dbname = "school_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname,regno FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>" . $row["id"] . $row["firstname"] . " "  . $row["lastname"] . "     " . $row["regno"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>