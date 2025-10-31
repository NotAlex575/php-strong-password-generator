<?php 
    session_start();
    $_SESSION["passwordLength"] = null;
    include_once "./function.php";
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
  }
</style>

<body class="bg-light">
    <header class="text-center mt-4">
        <h1>PASSWORD GENERATOR SIMULATOR!</h1>
    </header>

  <main class="d-flex justify-content-center align-items-center vh-100">
    <div class="container text-center">
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

            <button class="btn btn-primary w-100" type="submit">Invia</button>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
