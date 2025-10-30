<?php
    if(isset($_POST["passwordLength"])){
        $_SESSION["passwordLength"] = $_POST["passwordLength"];
    }
    if(isset($_SESSION["passwordLength"]) && $_SESSION["passwordLength"] != null)
    {    
        $passwordLength = $_SESSION["passwordLength"];
        $password = "";
        var_dump($passwordLength);
        $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        for($i = 0; $i < $passwordLength; $i++){
            $carattere = rand(0, strlen($caratteri)-1);
            $password .= $caratteri[$carattere];
        }
        echo "<div class='col-md-12 mt-5'>
            Ciao, ecco qui la tua password! ". $password."!
        </div>";
    }
    
?>