

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator Simulator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <header class="text-center mt-4">
    <h1>PASSWORD GENERATOR SIMULATOR!</h1>
  </header>

  <main class="d-flex justify-content-center align-items-center vh-100">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <form action="index.php" method="get" class="p-4 border rounded bg-white shadow-sm">
            <div class="mb-3">
              <label class="form-label" for="passwordLength">Lunghezza password</label>
              <input class="form-control" type="number" min="4" max="36" name="passwordLength" id="passwordLength">
            </div>
            <button class="btn btn-primary w-100" type="submit">Invia</button>
          </form>
        </div>
        <?php
        $passwordLength = $_GET["passwordLength"]?? "";
        if($passwordLength != null){
            $password = "";
            $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            for($i = 0; $i < $passwordLength; $i++){
                $carattere = rand(0, strlen($caratteri)-1);
                $password .= $caratteri[$carattere];
            }
            echo "<div class='col-md-12 mt-5'>
                Ciao, ecco qui la tua password! ". $password ."!
            </div>";
        }
        ?>
      </div>
    </div>
  </main>
</body>
</html>
