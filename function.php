<?php

    if(isset($_POST["passwordLength"])){
        $_SESSION["passwordLength"] = $_POST["passwordLength"];
    }

    if(isset($_POST["duplicati"]) || isset($_POST["lettere"]) || isset($_POST["numeri"]) || isset($_POST["simboli"])){
        $_SESSION["duplicati"] = $_POST["duplicati"] ?? 0;
        $_SESSION["lettere"] = $_POST["lettere"] ?? 0;
        $_SESSION["numeri"] = $_POST["numeri"] ?? 0;
        $_SESSION["simboli"] = $_POST["simboli"] ?? 0;
    }

    if(isset($_SESSION["passwordLength"]) && $_SESSION["passwordLength"] != null && !empty($_POST))
    {    
        $passwordLength = $_SESSION["passwordLength"];
        $password = "";
        $caratteri = "";
        if($_SESSION["lettere"] != 0  && $_SESSION["lettere"] != null){
            $caratteri .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        }
        if($_SESSION["numeri"] != 0 && $_SESSION["numeri"] != null){
            $caratteri .="0123456789";
        }
        if($_SESSION["simboli"] != 0  && $_SESSION["simboli"] != null){
            $caratteri .= "@#?!+-/*$%&-";
        } 
        if($caratteri === ""){
            $_SESSION['alertCaratteri'] = "Nessun filtro inserito di lettere/numeri/caratteri per la creazione della password..."; 
        }
        else{
            for($i = 0; $i < $passwordLength; $i++){
                $carattere = rand(0, strlen($caratteri)-1);  
                $password .= $caratteri[$carattere];
                if($_SESSION["duplicati"] != 0  && $_SESSION["duplicati"] != null){
                    $caratteri = str_split($caratteri);
                    echo "rimosso ".$caratteri[$carattere]."<br><br>"; 
                    unset($caratteri[$carattere]);
                    $caratteri = implode('', $caratteri);
                }
            }
            $_SESSION["password"] = $password;
            header("Location: ./result.php");
        }
    }
    elseif($_SESSION["passwordLength"] == null && !empty($_POST)){
        $_SESSION['alertLength'] = "Lunghezza della password non inserita...";
    }

    
//
?>
