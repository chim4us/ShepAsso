<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//This function handles the password CRYPT_BLOWFISH for user login
function cryptPass($input, $rounds = 7){
    $salt = "";
    $saltChars = array_merge(range('A','Z'),range('a','z'),range(0,9));
    for($i = 0; $i < 22; $i++){
        $salt .= $saltChars[array_rand($saltChars)];
    }
    return crypt($input,sprintf('$2y$%02d$',$rounds) . $salt);
}

?>