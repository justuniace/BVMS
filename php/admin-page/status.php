<?php
    $connect = mysqli_connect('localhost', 'root', '', 'vaccination_registration');

    $sql = "SELECT * FROM  vaccinated";
    $result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/admin/status/status.css">

</head>
<body>
    <div class="container">
        <div class="upper">
            <?php
                include_once 'header.php';
            ?>
        </div>
        <div class="lower">
            <div class="subheader">
                <ul>
                    <li>
                        <a class="vaccinated-h" href="status.php">Vaccinated</a>
                    </li>
                    <li>
                        <a href="vaccine-status/first-dose.php">First Dose</a>
                    </li>
                    <li>
                        <a href="vaccine-status/unvaccinated.php">Unvaccinated</a>
                    </li>
                </ul>
            </div>
            <table class="records">
                <thead>
                    <tr>
                        <td>Last Name</td>
                        <td>First Name</td>
                        <td>Middle Name</td>
                        <td>Contact Number</td>
                        <td>Vaccine Brand</td>
                        <td>Schedule</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rows = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $rows['lastName'] ?></td>
                                    <td><?php echo $rows['firstName'] ?></td>
                                    <td><?php echo $rows['middleName'] ?></td>
                                    <td><?php echo $rows['contactNumber'] ?></td>
                                    <td><?php echo $rows['vaccineBrand'] ?></td>
                                    <td><?php echo $rows['schedule'] ?></td>
                                </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>