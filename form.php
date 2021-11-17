<?php

var_dump($_POST);
echo "<br>";
var_dump($_POST['nb']);
var_dump($_POST['pet']);

if(isset($_POST['nb'])){
    echo "<p>Votre numéro est : ".$_POST['nb']."</p>";

    if($_POST['nb']>7){
        header('location: index.php?error_nb=true');
    }
}