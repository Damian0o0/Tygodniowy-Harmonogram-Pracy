<?php
$conn = mysqli_connect("localhost", "root", "", "testttt");
   if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
   }

   $sql = "SELECT id, username, password from login";
   $result = $conn-> query($sql);

   if ($result-> num_rows > 0) {
      while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["id"] . "</td><td>" . $row["username"] . "<td><td>" . $row["password"] . "</td></tr>";
      }
      echo "</table>";
   }
   else {
    echo "0 result";
   }
   $conn->close();
?>