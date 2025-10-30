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