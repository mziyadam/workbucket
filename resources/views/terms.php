<?php
$conn = new mysqli("localhost", "root", "", "workbucket");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["name"]. " - Name: " . $row["email"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>