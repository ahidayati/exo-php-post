<?php

$nbNeeded = 50;

if(isset($_POST['inputNb'])){
    $guessNb = $_POST['inputNb'];
    if($guessNb>$nbNeeded){
        header('location: 03-verify.php?biggerNb=true');
    } else if($guessNb<$nbNeeded){
        header('location: 03-verify.php?smallerNb=true');
    } else {
        header('location: 03-verify.php?correctNb=true');
    }
}