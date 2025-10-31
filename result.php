<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="text-center mt-4">
        <h1>PASSWORD GENERATOR SIMULATOR!</h1>
    </header>
    <main class="d-flex justify-content-center align-items-center vh-100">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="card shadow-lg rounded-4 p-4 text-center bg-white">
                    <h2>RISULTATO PASSWORD</h2>
                    <p class="card-text fs-4 fw-bold text-success">
                        <?php 
                            echo "<div class='col-md-12 mt-5'>
                            Ciao, ecco qui la tua password! <p class='text-success'>". $_SESSION["password"]."</p>
                            </div>";
                        ?>
                    </p>
                    <a href="./index.php">Torna alla pagina di generazione!</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>