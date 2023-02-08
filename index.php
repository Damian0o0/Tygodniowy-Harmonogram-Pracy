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
            <option value="Opcja 1" class="options">Data</option>
            <option value="Opcja 2" class="options">Imie</option>
            <option value="Opcja 3" class="options">Nazwisko</option>
          </select>
        <input type="checkbox" id="opisy">Wyświetlaj opisy</input>
        <p id="szerokosckolumn">Szerokość kolumn <input oninput="changeWidth()" type="number" id="number"></input></input></p>
        <button onclick="changeWidth()">Change Width</button>
      </div>
    <div id="tabela">
    <table>
      <tr>
      <th>Data</th>
      <th>Imie</th>
      <th>Nazwisko</th>
      <th>Opis</th>
      </tr>
      <?php
$conn = mysqli_connect("localhost", "root", "", "tygodniowy_harmonogram_pracy");
   if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
   }

   $sql = "SELECT data, imie, nazwisko, opis from tygodniowyharmonogrampracy";
   $result = $conn-> query($sql);

   if ($result-> num_rows > 0) {
      while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["data"] . "</td><td>" . $row["imie"] . "<td><td>" . $row["nazwisko"] . "</td></tr>". $row["opis"] . "</td></tr>";
      }
      echo "</table>";
   }
   else {
    echo "0 result";
   }
   $conn->close();
?>
    </table>
    <script>
  function changeWidth() {
    var inputValue = document.getElementById("number").value;
    var table = document.querySelector("#tabela table");
    var ths = table.getElementsByTagName("th");
    for (var i = 0; i < ths.length; i++) {
        ths[i].style.width = inputValue + "%";
    }
}
</script>
    </div>
</body>
</html>