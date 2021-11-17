<?php
include 'header.php';

if(isset($_GET['errorFirstName'])){
    echo "<div class='bg-danger text-white fs-5 text-center'>";
    echo "First name must not exceed 200 characters or inferior than 2 characters.";
    echo "</div>";
}

if(isset($_GET['errorLastName'])){
    echo "<div class='bg-danger text-white fs-5 text-center'>";
    echo "Last name must not exceed 200 characters or inferior than 2 characters.";
    echo "</div>";
}

if(isset($_GET['errorAge'])){
    echo "<div class='bg-danger text-white fs-5 text-center'>";
    echo "Age must not exceed 99 or inferior than 0.";
    echo "</div>";
}

if(isset($_GET['errorGender'])){
    echo "<div class='bg-danger text-white fs-5 text-center'>";
    echo "Gender field must be filled out.";
    echo "</div>";
}

if(isset($_GET['errorJob'])){
    echo "<div class='bg-danger text-white fs-5 text-center'>";
    echo "Occupation must not exceed 200 characters or inferior than 2 characters.";
    echo "</div>";
}

if(isset($_GET['errorHobbies'])){
    echo "<div class='bg-danger text-white fs-5 text-center'>";
    echo "Hobbies field must be selected at least 2.";
    echo "</div>";
}

include 'footer.php';