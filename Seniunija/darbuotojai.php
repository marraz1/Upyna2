<html>
    <head>
        <title>Darbuotojai</title>
        <meta http-equiv="content-type" content="text/html; charset=utf8" />
        <link rel="stylesheet" type="text/css" href="Seniunija/Sen_css.css">
    </head>
      <body>
      <h3 align="center"> Upynos seniūnijoje dirbandys darbuotojai </h3><br>
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


$sql = "SELECT vardas, pavarde, pareigos, adresas, telefonas, faksas, internetinis_adresas, el_pastas FROM darbuotojai";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      ?><h4><strong> <?php echo $row["vardas"]. " " . $row["pavarde"]?> </strong></h4>
      <strong>Pareigos: </strong><?php echo $row["pareigos"]?><br>
      <strong>Adresas: </strong><?php echo $row["adresas"]?><br>
      <strong>Telefonas: </strong><?php echo $row["telefonas"]?><br>
      <strong>Faksas: </strong><?php echo $row["faksas"]?><br>
      <strong>Internetinis adresas: </strong> <a href="<?php echo $row["internetinis_adresas"]?>"><?php echo $row["internetinis_adresas"]?></a><br>
      <strong>El. paštas: </strong><?php echo $row["el_pastas"]?><br>
      <hr class="new5">
      <?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
      </body>
  </html>
