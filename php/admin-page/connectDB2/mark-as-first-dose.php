<?php
    $connect = mysqli_connect('localhost', 'root', '', 'vaccination_registration');

    if(isset($_GET['mark']))
    {
        $id = $_GET['mark'];
        
        $query = "SELECT * FROM vaccination_data WHERE id=$id";
        $results = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($results);
        
        $firstName = $row['firstName'];
        $middleName = $row['middleName'];
        $lastName =  $row['lastName'];
        $email =  $row['email'];
        $gender =  $row['gender'];
        $status =  $row['status'];
        $date =  date('Y-m-d', strtotime($row['date']));
        $occupation =  $row['occupation'];
        $nationality =  $row['nationality'];
        $religion =  $row['religion'];
        $contactNumber =  $row['contactNumber'];
        $height =  $row['height'];
        $weight =  $row['weight'];
        $temperature =  $row['temperature'];
        $allergies =  $row['allergies'];
        $vaccineBrand =  $row['vaccineBrand'];
        $schedule = $row['schedule'];

        // INSERT INTO VACCINATED TABLE

        $insertQuery = "INSERT INTO first_dose(firstName, middleName, lastName,
        email, gender, status, date, occupation, nationality, religion, contactNumber, 
        height, weight, temperature, allergies, vaccineBrand, schedule) VALUES('$firstName', '$middleName', '$lastName',
        '$email', '$gender', '$status', '$date', '$occupation', '$nationality', '$religion', '$contactNumber', 
        '$height', '$weight', '$temperature', '$allergies', '$vaccineBrand', '$schedule')";

        mysqli_query($connect, $insertQuery);

        // DELETE FROM PREVIOUS TABLE

        $connect->query("DELETE FROM vaccination_data WHERE id=$id");
        header("location: ../vaccinated/vaccinated-page.php");
    }
?>