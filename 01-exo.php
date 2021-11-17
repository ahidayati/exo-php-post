<?php include 'header.php'; ?>

<div class="container">
    <div class="col-6">
        <form action="01-exo-form.php" method="post">
            <div class="mb-3">
                <label for="firstNameInput" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstNameInput" name="firstName" minlength="2" maxlength="20" value="test first name">
                <?php
                if(isset($_GET['errorFirstName'])){
                    echo "<div class='bg-danger text-white text-center'>";
                    echo "First name must not exceed 200 characters or inferior than 2 characters.";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="lastNameInput" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastNameInput" name="lastName" minlength="2" maxlength="20" value="test last name">
                <?php
                if(isset($_GET['errorLastName'])){
                    echo "<div class='bg-danger text-white text-center'>";
                    echo "Last name must not exceed 200 characters or inferior than 2 characters.";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="ageInput" class="form-label">Age</label>
                <input type="number" class="form-control" id="ageInput" name="age" value="30" min="0" max="99">
                <?php
                if(isset($_GET['errorAge'])){
                    echo "<div class='bg-danger text-white text-center'>";
                    echo "Age must not exceed 99 or inferior than 0.";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="mb-3">
                <p>Gender</p>
                <label for="genderInputM" class="form-check-label">Man</label>
                <input type="radio" class="form-check-input" id="genderInputM" value="man" name="gender">

                <label for="genderInputW" class="form-check-label">Woman</label>
                <input type="radio" class="form-check-input" id="genderInputW" value="woman" name="gender">

                <label for="genderInputNB" class="form-check-label">Non-Binary</label>
                <input type="radio" class="form-check-input" id="genderInputNB" value="non-binary" name="gender">
                <?php
                if(isset($_GET['errorGender'])){
                    echo "<div class='bg-danger text-white text-center'>";
                    echo "Gender field must be filled out.";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="OccupationInput" class="form-label">Occupation</label>
                <input type="text" class="form-control" id="OccupationInput" name="job"  maxlength="99" value="test occupation">
                <?php
                if(isset($_GET['errorJob'])){
                    echo "<div class='bg-danger text-white text-center'>";
                    echo "Occupation must not exceed 200 characters or inferior than 2 characters.";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="hobbiesInput" class="form-label">Hobbies (Hold down "control" to select more than one. Must be selected at least 2.)</label>
                <select class="form-select" name="hobbies[]" multiple>
                    <option selected="selected" value="gaming">Gaming.</option>
                    <option value="music">Music / Playing an instrument.</option>
                    <option value="sports">Sports.</option>
                    <option selected="selected" value="art">Art / Drawing / Painting.</option>
                    <option value="reading">Reading.</option>
                    <option value="movie">Watch Movie / Netflix.</option>
                </select>
                <?php
                if(isset($_GET['errorHobbies'])){
                    echo "<div class='bg-danger text-white text-center'>";
                    echo "Hobbies field must be selected at least 2.";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="checkInput" name="newsletter" value="true" checked>
                <label class="form-check-label" for="checkInput">Newsletter</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<?php include 'footer.php'; ?>