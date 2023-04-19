<?php
    function genera_password ($passwordLength){
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}'; 
        $pass = []; 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < $passwordLength; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); 
    }
    ?>