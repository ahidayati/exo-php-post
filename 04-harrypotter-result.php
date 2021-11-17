<?php
include 'header.php';


if(isset($_POST['charName'])){
    $charName = $_POST['charName'];

    $urlHarpot = "http://hp-api.herokuapp.com/api/characters";
    $contentHarpot = file_get_contents($urlHarpot);
    $jsonHarpot = json_decode($contentHarpot, true);

    foreach ($jsonHarpot as $item){
        if(strtolower($item['name']) === strtolower($charName)){
            echo "<div class='container text-center'>";
            echo "<h2>".$item['name']."</h2>";
            echo "<p class='fs-4'>".$item['gender']."</p>";
            echo "<p class='fs-4'>".$item['dateOfBirth']."</p>";
            echo "<p class='fs-4'>".$item['actor']."</p>";
            echo "<img src=".$item['image']." >";
            echo "</div>";
        }
    }

} else {
    echo 'This is an error';
}

include 'footer.php';