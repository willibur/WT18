<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Anmeldung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>
  <h1>Anmeldung</h1>
  <p> Herzlichen Dank <?php echo $_POST["vorname"]; ?> <?php echo $_POST["nachname"]; ?> vom Studiengang <?php echo $_POST["studiengang"]; ?>!</p>
  <p> Wir haben eine Bestätigung Ihrer Anmeldung an die E-Mail Adresse <?php echo $_POST["email"];?> versendet </p>
  <p><a href="aufgabe7.php">Zurück</a></p>



  <?php $vorname = filter_var($vorname, FILTER_SANITIZE_STRING);?>
  <?php $nachname = filter_var($nachname, FILTER_SANITIZE_STRING);?>
  <?php $studiengang = filter_var($studiengang, FILTER_SANITIZE_STRING);?>
  <?php $email = filter_var($email, FILTER_SANITIZE_EMAIL);?>
  <?php $passwort = filter_var($passwort, FILTER_SANITIZE_STRING);?>



</body>
</html>
