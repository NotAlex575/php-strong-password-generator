<?php
    if(isset($_POST["passwordLength"])){
        $_SESSION["passwordLength"] = $_POST["passwordLength"];
    }
    if(isset($_SESSION["passwordLength"]) && $_SESSION["passwordLength"] != null)
    {    
        $passwordLength = $_SESSION["passwordLength"];
        $password = "";
        $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        for($i = 0; $i < $passwordLength; $i++){
            $carattere = rand(0, strlen($caratteri)-1);
            $password .= $caratteri[$carattere];
        }
        $_SESSION["password"] = $password;
        header("Location: ./result.php");
        exit;
    }
    
?>