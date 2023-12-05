<?php
    include_once 'connect.php';

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName =  $_POST['lastName'];
    $email =  $_POST['email'];
    $gender =  $_POST['gender'];
    $status =  $_POST['status'];
    $date =  date('Y-m-d', strtotime($_POST['birthday']));
    $occupation =  $_POST['occupation'];
    $nationality =  $_POST['nationality'];
    $religion =  $_POST['religion'];
    $contactNumber =  $_POST['contactNumber'];
    $height =  $_POST['height'];
    $weight =  $_POST['weight'];
    $temperature =  $_POST['temperature'];
    $allergies =  $_POST['allergies'];
    $vaccineBrand =  $_POST['vaccineBrand'];
    $schedule = $_POST['schedule'];

    if($conn -> connect_error)
    {
        die('Connection Failed : '.$conn -> connect_error);
    }
    else
    {
        $query = "INSERT INTO vaccination_data(firstName, middleName, lastName,
        email, gender, status, date, occupation, nationality, religion, contactNumber, 
        height, weight, temperature, allergies, vaccineBrand, schedule) VALUES('$firstName', '$middleName', '$lastName',
        '$email', '$gender', '$status', '$date', '$occupation', '$nationality', '$religion', '$contactNumber', 
        '$height', '$weight', '$temperature', '$allergies', '$vaccineBrand', '$schedule')";

        mysqli_query($conn, $query);

        header("location: ../../index.php");
    }
?>