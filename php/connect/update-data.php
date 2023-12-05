<?php
    include_once 'connect.php';

    $id = $_GET['update'];
    $sql = "SELECT * FROM vaccination_data WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

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

    if($conn -> connect_error)
    {
        die('Connection Failed : '.$conn -> connect_error);
    }
    else
    {
        if(isset($_POST['update']))
        {
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

            $sql = "UPDATE vaccination_data
                    SET id=$id,firstName='$firstName',
                    lastName='$lastName',
                    middleName='$middleName',
                    email='$email',
                    gender='$gender',
                    status='$status',
                    date='$date',
                    occupation='$occupation',
                    nationality='$nationality',
                    religion='$religion',
                    contactNumber='$contactNumber',
                    height='$height',
                    weight='$weight',
                    temperature='$temperature',
                    allergies='$allergies',
                    vaccineBrand='$vaccineBrand',
                    schedule='$schedule'
                    WHERE id=$id";
            $result = mysqli_query($conn, $sql);

            header("location: ../admin-page/records.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin/form-update/form.css">
</head>
<body>
<form method="POST">
                <div class="personal-info">
                    <div class="name">
                        <div>
                            <input value="<?php echo $firstName; ?>" type="text" placeholder="First name" name="firstName">
                        </div>
                        <div>
                            <input value="<?php echo $middleName; ?>" type="text" placeholder="Middle name" name="middleName">
                        </div>
                        <div>
                            <input value="<?php echo $lastName; ?>" type="text" placeholder="Last name" name="lastName">    
                        </div>
                        <div>
                            <input value="<?php echo $email; ?>" type="email" placeholder="Email" name="email">    
                        </div>
                    </div>    
                    <div class="drop-down">
                        <select class="gender" name="gender">   
                            <option>Male</option>
                            <option>Female</option>
                        </select>    
                        <select class="status" name="status">    
                            <option>Single</option>
                            <option>Married</option>
                            <option>Engaged</option>
                            <option>Divorced</option>
                            <option>Widowed</option>
                            <option>Complicated</option>
                        </select>    
                    </div>    
                    <div class="birthday">
                        <input value="<?php echo $date; ?>" type="date" name="birthday">
                    </div>
                </div>
                <div class="part-2">
                    <div class="additional-info">
                        <input value="<?php echo $occupation; ?>" type="text" placeholder="Occupation" name="occupation">
                        <input value="<?php echo $nationality; ?>" type="text" placeholder="Nationality" name="nationality">
                        <input value="<?php echo $religion; ?>" type="text" placeholder="Religion" name="religion">
                        <input value="<?php echo $contactNumber; ?>" type="number" placeholder="Contact number" name="contactNumber">
                        <div class="height-and-weight">
                            <input value="<?php echo $height; ?>" type="number" placeholder="Height" name="height">
                            <input value="<?php echo $weight; ?>" type="number" placeholder="Weight" name="weight">
                            <input value="<?php echo $temperature; ?>" type="number" placeholder="Temperature" name="temperature">
                        </div>
                        <input value="<?php echo $allergies; ?>" type="text" placeholder="Allergies" name="allergies">
                    </div>
                </div>
                <div>
                <div class="vaccination-details">
                    <div>
                        <h3>What brand of vaccine do you want?</h3>
                        <select  class="vaccine-brand" name="vaccineBrand">
                            <option>Moderna</option>
                            <option>Sinovac</option>
                            <option>Pfizer</option>
                            <option>AstraZeneca</option>
                            <option>Sinopharm</option>
                        </select>
                    </div>
                <div class="schedule">
                    <h3>Choose your schedule</h3>
                    <select class="schedule" name="schedule">
                        <option>2022-03-10</option>
                        <option>2022-03-11</option>
                        <option>2022-03-12</option>
                        <option>2022-03-13</option>
                        <option>2022-03-14</option>
                        <option>2022-03-15</option>
                        <option>2022-03-16</option>
                        <option>2022-03-17</option>
                        <option>2022-03-18</option>
                        <option>2022-03-19</option>
                        <option>2022-03-20</option>
                    </select>
                </div>
                    <div class="update">
                        <button type="button" class="discard-btn" onclick="onDiscardButtonClick()">Discard</button>
                        <button name="update" class="update-btn" onclick="onUpdateButtonClick()" onmouseover="onR3BackHover()" onmouseout="onR3BackUnhover()">Update</button>
                    </div>
                </div>
            </form>

            <script>
                const discard = document.querySelector('.discard-btn');
                
                function onDiscardButtonClick()
                {
                    window.location.href = "../admin-page/records.php";
                }
            </script>
</body>
</html>

