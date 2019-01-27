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

    <?php
      $istneu = empty($_POST);
      $hatfehler = false;
    ?>


    <?php
    $vorname = filter_var($_POST["vorname"], FILTER_SANITIZE_STRING);
        if($vorname){}
        else {
          $hatfehler = true;

        }
        $nachname = filter_var($POST["nachname"], FILTER_SANITIZE_STRING);
        if($nachname){}
        else{
          $hatfehler = true;
        }
        $studiengang = filter_var($POST["studiengang"], FILTER_SANITIZE_STRING);
        if($studiengang){}
          else{
            $hatfehler = true;
          }


        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if($email){}
          else{
            $hatfehler = true;
          }

        $passwort = filter_var($POST["passwort"], FILTER_SANITIZE_STRING);
        if($passwort){}
          else{
            $hatfehler = true;
          }
        ?>






  <h1>Anmeldung</h1>
  <div class="card border-dark mb-3">
    <div class="card-body">
<?php
if($istneu || $hatfehler) : ?>

  <form action="aufgabe7.php" method="post">
    <div class="form-group row">
      <label for="vorname" class="col-sm-2 col-form-label" >Vorname: </label>
      <div class="col-sm-10">
        <input type="vorname" class="form-control" name="vorname" placeholder="Vorname">
      </div>
    </div>

    <div class="form-group row">
      <label for="nachname" class="col-sm-2 col-form-label" >Nachname: </label>
      <div class="col-sm-10">
        <input type="nachname" class="form-control" name="nachname" placeholder="Nachname">
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label" >E-Mail: </label>
      <div class="col-sm-10">
        <input type="email" name="email"
        <?php if(empty($email)){
        echo 'class="form-control"';
      }
        elseif ($email) {
          echo 'class="form-control is-valid"';
        }else{
          echo 'class="form-control is-invalid"';
        }
        if(empty($email)) echo
        "placeholder='Email'"; else echo "value='$email'"; ?> >
      </div>
    </div>

    <div class="form-group row">
      <label for="studiengang" class="col-sm-2 col-form-label">Studiengang: </label>
      <div class="col-sm-10">
        <select class="form-control" id="exampleFormControlSelect1" name="studiengang">
          <option>Informatik und Wirtschaft</option>
          <option>Angewandte Informatik</option>
          <option>Wirtschaftsinformatik</option>
       </select>
      </div>
     </div>

    <div class="form-group row">
      <label for="passwort" class="col-sm-2 col-form-label" >Passwort: </label>
      <div class="col-sm-10">
        <input type="passwort" class="form-control" name="passwort" placeholder="Passwort">
      </div>
    </div>



    <button type="submit">Anmelden</button>
  </form>
<?php else : ?>

  <h2>Anmeldung</h2>

  <p> Herzlichen Dank <?php echo $_POST["vorname"]; ?> <?php echo $_POST["nachname"]; ?> vom Studiengang <?php echo $_POST["studiengang"]; ?>!</p>
  <p> Wir haben eine Bestätigung Ihrer Anmeldung an die E-Mail Adresse <?php echo $_POST["email"];?> versendet </p>
  <p><a href="aufgabe7.php">Zurück</a></p>

  <?php endif; ?>











</div>
</div>

</body>
</html>
