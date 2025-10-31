<?php 
  session_start();
  $_SESSION["passwordLength"] = null;
  $_SESSION["duplicati"] = null;
  $_SESSION["lettere"] = null;
  $_SESSION["numeri"] = null;
  $_SESSION["simboli"] = null;
  $caratteri = "";
  $passwordLength = null;
  static $firstReload = true;
  include_once "./function.php";
  $firstReload = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator Simulator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
  .checkbox-size{
    transform: scale(1.2);
    margin-left: 10px; 
    border: 1px solid black;
  }
  .form-check-input {
    margin-right: 2rem !important;
  }
  .caratteri {
    margin-right: 1.5rem !important;
  }
</style>

<body class="bg-light">
  <header class="text-center mt-4">
      <h1>PASSWORD GENERATOR SIMULATOR!</h1>
  </header>

  <main class="vh-100">
    <?php
      if(isset($_SESSION['alertCaratteri'])){
          echo '<div class="alert alert-warning text-center">'.$_SESSION['alertCaratteri'].'</div>';
          unset($_SESSION['alertCaratteri']);
      }
      if(isset($_SESSION['alertLength'])){
        echo 
        '<div class="alert alert-warning text-center" role="alert">
            Lunghezza della password non inserita...
        </div>';
        unset($_SESSION['alertLength']);
      }
    ?>
      <div class="container text-center mt-5">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <form action="index.php" method="post" class="p-4 border rounded bg-white shadow-sm">
              
              <!-- LUNGHEZZA PASSWORD -->
              <div class="mb-3">
                <label class="form-label" for="passwordLength">Lunghezza password</label>
                <input class="form-control" type="number" min="4" max="36" name="passwordLength" id="passwordLength">
              </div>

              <!-- DUPLICATI? -->
              <div class="mt-3 mb-3">
                <label for="form-label" for="duplicati">Non aggiungere caratteri duplicati</label>
                <input class="checkbox-size" type="checkbox" class="ms-2" name="duplicati">
              </div>

              <!-- INCLUDI LETTERE -->
              <div class="form-check d-flex justify-content-end">
                <input class="checkbox-size form-check-input caratteri" name="lettere" type="checkbox" id="lettere">
                <label class="form-check-label" for="lettere">Caratteri</label>
              </div>

              <!-- INCLUDI NUMERI -->
              <div class="form-check d-flex justify-content-end">
                <input class="checkbox-size form-check-input" name="numeri" type="checkbox" id="numeri">
                <label class="form-check-label" for="numeri">Numeri</label>
              </div>

              <!-- INCLUDI SIMBOLI -->
              <div class="form-check d-flex justify-content-end">
                <input class="checkbox-size form-check-input" name="simboli" type="checkbox" id="simboli">
                <label class="form-check-label" for="simboli">Simboli</label>
              </div>

              <button class="btn btn-primary w-100 mt-4" type="submit">Invia</button>
            </form>
          </div>
        </div>
      </div>
  </main>
</body>
</html>
