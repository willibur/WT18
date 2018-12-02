<!DOCTYPE html>
<!-- Dokumententyp -->
<html lang="de">

<head>
  <meta charset="UTF-8">
  <title>PHP</title>
  <link href="styles/styles5.css" rel="stylesheet">

  <?php

  function zufzahl($max, $anzahl, $stellen){
  echo  "<tr><th>Zufallszahl</th>";
  for ($i=1; $i<$stellen ; $i++) {
  echo "<th>ersten $i Stellen</th>";
}

  echo "</tr>";
   for($i=1; $i<=$anzahl; $i++)
    {
      $zzahl = rand(1,$max);

      echo "<tr>";
      echo "<td>$zzahl</td>";
      for($j=1; $j<$stellen; $j++)
      {
        $gerundet = abschneiden($zzahl, $j);
        echo "<td>$gerundet</td>";
      }
      echo "</tr>";
    }
  }
  function abschneiden($zahl,$stellen=2)
    {
      $base = pow(10,$stellen);
      return $zahl - ($zahl % $base);
    }
 ?>

</head>

<body>

  <h1>Zufallszahlen</h1>
  <table>
    <?php zufzahl(20000, 20, 4); ?>
  </table>

</body>

</html>
