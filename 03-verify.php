<?php include 'header.php'; ?>
    <div class="d-flex justify-content-center my-4">
        <p>Number guessing game. Please enter a number between 1 and 100.</p>
    </div>

    <div class="container">
        <form class="row d-flex justify-content-center" action="03-verify-result.php" method="post">
            <div class="col-auto d-flex align-self-center">
                <label for="inputNb">Number</label>
            </div>
            <div class="col-auto d-flex align-self-center">
                <input type="number" class="form-control" id="inputNb" name="inputNb">

            </div>
            <div class="col-auto d-flex align-self-center">
                <button type="submit" class="btn btn-success">Verify</button>
            </div>
        </form>
    </div>

    <div class="d-flex justify-content-center my-4">
            <?php
            if(isset($_GET['biggerNb'])){
                echo "<br><div class='alert alert-warning' role='alert'>";
                echo "Your guess is too big. Please try again.";
                echo "</div>";
            }

            if(isset($_GET['smallerNb'])){
                echo "<br><div class='alert alert-warning' role='alert'>";
                echo "Your guess is too small. Please try again.";
                echo "</div>";
            }

            if(isset($_GET['correctNb'])){
                echo "<br><div class='alert alert-success' role='alert'>";
                echo "Your guess is correct!";
                echo "</div>";
            }
            ?>
    </div>

<?php include 'footer.php'; ?>