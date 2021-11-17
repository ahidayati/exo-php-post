<?php
include 'header.php';
?>

<a class="btn btn-primary my-2 mx-2" href="01-exo.php">Link exo-01 form</a>

<a class="btn btn-primary my-2 mx-2" href="02-poke.php">Link exo-02 pokemon</a>

<a class="btn btn-primary my-2 mx-2" href="03-verify.php">Link exo-03 verify</a>

<a class="btn btn-primary my-2 mx-2" href="04-harrypotter.php">Link exo-04 harry potter</a>

<a class="btn btn-primary my-2 mx-2" href="05-ecommerce.php">Link exo-05 api e-commerce</a>

<br><br>
<p>Form Example to use the super global $_POST :</p>
<form action="form.php" method="post">
    <label for="number">Numéro</label>
    <input type="number" name="nb" min="1" max="10">
    <?php
    if(isset($_GET['error_nb'])){
        echo "<p>Votre numéro n'est pas bon</p>";
    }
    ?>

    <br>
    <select name="pet[]" multiple>
        <option value="dog">Un chien</option>
        <option value="cat">Un chat</option>
        <option value="hamster">Un hamster</option>
    </select>

    <button type="submit">Validér</button>
</form>

<?php
include 'footer.php';
?>