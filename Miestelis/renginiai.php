<html>
    <head>
      <title>Renginiai</title>
    </head>
<body>
<h2>Renginių sąrašas</h2>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Data</th>
      <th scope="col">Pavadinimas</th>
      <th scope="col">Vieta</th>
      <th scope="col">Papildoma informacija</th>
    </tr>
  </thead>
  <tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "upyna";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
else {
//echo "Connected successfully";
$conn->query("SET NAMES 'utf8'");
}


$sql = "SELECT data, vieta, pavadinimas, informacija FROM renginiai";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
$i=1;
while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $row["data"]?></td>
      <td><?php echo $row["pavadinimas"]?></td>
      <td><?php echo $row["vieta"]?></td>
      <td><a href="<?php echo $row["informacija"]?>"><?php echo $row["informacija"]?></td>
    </tr>
    <?php $i++?>
<?php
}
} else {
echo "0 results";
}

mysqli_close($conn);
?>
</tbody>
</table>
</head>
</html>
