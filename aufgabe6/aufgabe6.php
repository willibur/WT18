<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Datei einlesen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<style>
    .card { background-color: rgba(245, 245, 245, 0.4); }


</style>
</head>
<body class="container-fluid">
<h1>Datei einlesen</h1>
<?php
/*
 * falls das Zeilenende der einzulesenden Datei nicht korrekt
 * erkannt werden sollte, dann sollte die folgende Anweisung
 * ausgeführt werden
 */
ini_set("auto_detect_line_endings", true);
/* Öffnen der Datei zum Lesen "r"
 * Datei muss im gleichen Verzeichnis liegen wie aufgabe6.php
 * andernfalls Pfadangabe ändern
 * @ unterdrückt evtl Warnungen
 */
$file = @fopen ( "./mockdatatext", "r" );
/*
 * wenn das Öffnen der Datei nicht funktioniert hat, ist $file FALSE
 * ansonsten steht der Dateizeiger am Anfang der ersten Zeile
 */
 //$counter=1;
if (! $file) {
    echo "Es ist ein Problem beim Öffnen der Datei 'mockupdatatext' aufgetreten.";
} else {

    /*
     * feof - end of file
     * prüft, ob ein Dateizeiger am Ende der Datei steht
     */

    while ( ! feof ( $file ) ) {
      echo "<div class=container>";
      echo "<div class=card>";
      echo "<div class=card-body>";
      echo "<div class=col-md-7>";
      echo "<ul>";
      echo "<ul class=list-group>";

        /*
         * fegts() liest eine Zeile einer Datei aus
         * fgets() gibt einen String zürück
         * nach Aufruf von fgets() steht der Dateizeiger
         * in der nächsten Zeile (außer, es wurde eine
         * Leselänge als 2. Parameter fgets übergeben)
         */
        for($counter=1; $counter<=10; $counter++ ){

        $firstname = fgets ( $file );
        $surname = fgets ( $file );
        $mailaddress = fgets ( $file );
        fgets ( $file );
        fgets ( $file );

        echo "<li class=list-group-item> $firstname $surname <a href=mailto:$mailaddress>$mailaddress</a></li>";
        /*
         * Sie können für die Lösung der Aufgabe davon ausgehen,
         * dass jeder Datensatz aus 4 Zeilen besteht und dass zwischen
         * den einzelnen Datensätzen immer genau eine Leerzeile ist.
         */
       }
    echo "</ul>";
    echo "</ul>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</br>";


    //echo "</div";
    //echo "</div";

    }

    fclose ( $file );
}
?>
</body>
</html>
