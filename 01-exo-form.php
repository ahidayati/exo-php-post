<?php
include "header.php";

//var_dump($_POST['firstName']);
//echo '<br>';
//var_dump($_POST['lastName']);
//echo '<br>';
//var_dump($_POST['age']);
//echo '<br>';
//var_dump($_POST['gender']);
//echo '<br>';
//var_dump($_POST['job']);
//echo '<br>';
//var_dump($_POST['hobbies']);
//echo '<br>';
//var_dump($_POST['checkBox']);

?>
<div class="container my-4">
    <table class="table table-striped">
        <tr>
            <th>First Name</th>
            <td><?php
                    if(isset($_POST['firstName'])){
                        $firstName = $_POST['firstName'];
                        echo $firstName;

                        if(strlen($firstName)>20 | strlen($firstName)<2){
                            header('location: 01-exo.php?errorFirstName=true');
                        }
                    }
                ?></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?php
                if(isset($_POST['lastName'])){
                    $lastName = $_POST['lastName'];
                    echo $lastName;

                    if(strlen($lastName)>20 | strlen($lastName)<2){
                        header('location: 01-exo.php?errorLastName=true');
                    }
                }
                ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?php
                if(isset($_POST['age'])){
                    $age = $_POST['age'];
                    echo $age;

                    if($age>99 | $age<0){
                        header('location: 01-exo.php?errorAge=true');
                    }
                }
                ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php
                if(isset($_POST['gender'])){
                    $gender = $_POST['gender'];
                    echo $gender;

                } else {
                    header('location: 01-exo.php?errorGender=true');
                }
                ?></td>
        </tr>
        <tr>
            <th>Occupation</th>
            <td><?php
                if(isset($_POST['job'])){
                    $job = $_POST['job'];
                    echo $job;

                    if(strlen($job)>99 | strlen($job)<2){
                        header('location: 01-exo.php?errorJob=true');
                    }
                }
                ?></td>
        </tr>
        <tr>
            <th>Hobbies</th>
            <td><?php
                $arrayHobbies = $_POST['hobbies'];
                if(isset($arrayHobbies)){
                    if(count($arrayHobbies)>=2){
                        foreach ($arrayHobbies as $item){
                            echo $item." ";
                        }
                    } else {
                        header('location: 01-exo.php?errorHobbies=true');
                    }
                }
                ?></td>
        </tr>
        <tr>
            <th>Newsletter</th>
            <td><?php
                if(isset($_POST['newsletter'])){
                    echo 'Yes';
                } else {
                    echo 'No';
                }
                ?></td>
        </tr>
    </table>
</div>


<?php include "header.php"; ?>