<?php
include 'header.php';

//$urlPokeAll = "https://pokeapi.co/api/v2/pokemon/";
//$contentPokeAll = file_get_contents($urlPokeAll);
//$jsonPokeAll = json_decode($contentPokeAll, true);
//
//var_dump($jsonPokeAll);



if(isset($_POST['pokeName'])){
    $pokeName = $_POST['pokeName'];
    $urlEachPoke = "https://pokeapi.co/api/v2/pokemon/".$pokeName;
    $contentEachPoke = file_get_contents($urlEachPoke);

    if($contentEachPoke !== false){

        $jsonEachPoke = json_decode($contentEachPoke, true);

        echo "<div class='container text-center'>";
        echo "<img src=".$jsonEachPoke['sprites']['other']['official-artwork']['front_default']." >";
        echo "<h2 class='text-capitalize'>".$jsonEachPoke['name']."</h2>";
        echo "</div>";

    } else {
        header('location: 02-poke.php?errorPoke=true');
    }
} else {
    echo 'this is an error';
}





include 'footer.php';