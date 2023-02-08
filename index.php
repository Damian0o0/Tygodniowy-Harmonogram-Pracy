<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tygodniowy Harmonogram Pracy</title>
</head>
<body>
    <div id="header">
        <select id="opcje">
            <option value="Opcja 1" class="options">Filtruj datą</option>
            <option value="Opcja 2" class="options">Filtruj </option>
          </select>
        <input type="checkbox" id="opisy">Wyświetlaj opisy</input>
        <p id="szerokosckolumn">Szerokość kolumn <input oninput="" type="number" min="1" id="number"></input></p>
        <label for="week-select">Choose week:</label>
          <select id="week-select">
            <option value="week-1">1</option>
            <option value="week-2">2</option>
          </select>
      </div>
    <div id="tabela">
    <table>
      <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Password</th>
      </tr>
      <?php
$conn = mysqli_connect("localhost", "root", "", "tygodniowy_harmonogram_pracy");
   if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
   }

   $sql = "SELECT data, imie from tyhoharmonogrampracy";
   $result = $conn-> query($sql);

   if ($result-> num_rows > 0) {
      while ($row = $result-> fetch_assoc()) {
        echo $row["data"] . "<td><td>" . $row["imie"] . "</td></tr>";
      }
      echo "</table>";
   }
   else {
    echo "0 result";
   }
   $conn->close();
?>
    </table>
    </div>
    
</body>
</html>