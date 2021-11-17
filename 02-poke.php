<?php include 'header.php'; ?>

<div class="container p-5">
    <form class="row g-3 d-flex justify-content-center" action="02-poke-result.php" method="post">
        <div class="col-auto">
            <label for="inputPokemon" class="visually-hidden">Pokemon's Name</label>
            <input type="text" class="form-control" id="inputPokemon" name="pokeName" placeholder="Pokemon's Name">
            <?php
            if(isset($_GET['errorPoke'])){
                echo "<br><div class='alert alert-danger' role='alert'>";
                echo "This Pokémon does not exist.";
                echo "</div>";
            }
            ?>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-warning mb-3">Search Pokemon</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>