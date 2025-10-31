<?php
    if(isset($_POST["passwordLength"])){
        $_SESSION["passwordLength"] = $_POST["passwordLength"];
    }

    if(isset($_POST["duplicati"]) || isset($_POST["lettere"]) || isset($_POST["numeri"]) || isset($_POST["simboli"])){
        $_SESSION["duplicati"] = $_POST["duplicati"] ?? 0;
        $_SESSION["lettere"] = $_POST["lettere"] ?? 0;
        $_SESSION["numeri"] = $_POST["numeri"] ?? 0;
        $_SESSION["simboli"] = $_POST["simboli"] ?? 0;
        var_dump($_SESSION["duplicati"]);
        var_dump($_SESSION["lettere"]);
        var_dump($_SESSION["numeri"]);
        var_dump($_SESSION["simboli"]);
    }

    if(isset($_SESSION["passwordLength"]) && $_SESSION["passwordLength"] != null)
    {    
        $passwordLength = $_SESSION["passwordLength"];
        $password = "";
        $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#?!+-/*$%&-";
        if($_SESSION["lettere"] != 0  && $_SESSION["lettere"] != null) echo "lettere si<br>";
        if($_SESSION["numeri"] != 0 && $_SESSION["numeri"] != null) echo "numeri si<br>";
        if($_SESSION["simboli"] != 0  && $_SESSION["simboli"] != null) echo "simboli si<br>";
        if($_SESSION["duplicati"] != 0  && $_SESSION["duplicati"] != null) echo "no ai duplicati<br>";
        for($i = 0; $i < $passwordLength; $i++){
            $carattere = rand(0, strlen($caratteri)-1);
            $password .= $caratteri[$carattere];
        }
        $_SESSION["password"] = $password;
       // header("Location: ./result.php");
       // exit;
    }

    
//
?>
