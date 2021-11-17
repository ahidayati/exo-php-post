<?php include 'header.php'; ?>

    <div class="container p-5">
        <form class="row g-3 d-flex justify-content-center" action="04-harrypotter-result.php" method="post">
            <div class="col-auto">
                <label for="inputCharacter" class="visually-hidden">Character's Name</label>
                <input type="text" class="form-control" id="inputCharacter" name="charName" placeholder="Character's Name">
                <?php
                if(isset($_GET['errorChar'])){
                    echo "<br><div class='alert alert-danger' role='alert'>";
                    echo "This character does not exist.";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-dark mb-3">Search Character in Harry Potter</button>
            </div>
        </form>
    </div>

<?php include 'footer.php'; ?>