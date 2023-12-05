<?php
    include_once '../connect/fetch-data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin/records/records.css">
</head>

<body>

<div class="container">
        <div class="upper">
            <?php
                include_once 'header.php';
            ?>
        </div>
        <div class="lower">
            <div class="options">
                <a class="insert-btn" href="insert-form.php">Insert +</a>
                <a class="mark-vaccinated-btn" href="vaccinated/vaccinated-page.php">Mark as vaccinated +</a>
                <a class="mark-firstDose-btn" href="vaccinated/first-dose-page.php">Mark as first dose +</a>
            </div>

            <table class="records">
                <thead>
                    <tr>
                        <td>Last Name</td>
                        <td>First Name</td>
                        <td>Middle Name</td>
                        <td>Email</td>
                        <td>Birthday</td>
                        <td>Gender</td>
                        <td>Status</td>
                        <td>Occupation</td>
                        <td>Nationality</td>
                        <td>Religion</td>
                        <td>Contact Number</td>
                        <td>Height</td>
                        <td>Weight</td>
                        <td>Temperature</td>
                        <td>Allergies</td>
                        <td>Vaccine Brand</td>
                        <td>Schedule</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($rows = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $rows['lastName'] ?></td>
                                    <td><?php echo $rows['firstName'] ?></td>
                                    <td><?php echo $rows['middleName'] ?></td>
                                    <td><?php echo $rows['email'] ?></td>
                                    <td><?php echo $rows['date'] ?></td>
                                    <td><?php echo $rows['gender'] ?></td>
                                    <td><?php echo $rows['status'] ?></td>
                                    <td><?php echo $rows['occupation'] ?></td>
                                    <td><?php echo $rows['nationality'] ?></td>
                                    <td><?php echo $rows['religion'] ?></td>
                                    <td><?php echo $rows['contactNumber'] ?></td>
                                    <td><?php echo $rows['height'] ?></td>
                                    <td><?php echo $rows['weight'] ?></td>
                                    <td><?php echo $rows['temperature'] ?></td>
                                    <td><?php echo $rows['allergies'] ?></td>
                                    <td><?php echo $rows['vaccineBrand'] ?></td>
                                    <td><?php echo $rows['schedule'] ?></td>
                                    <td class="btn">
                                        <a href="../connect/update-data.php?update=<?php echo $rows['id'] ?>"
                                        class="update-btn">Edit</a>
                                        <a href="../connect/delete-data.php?delete=<?php echo $rows['id'] ?>"
                                        class="delete-btn">Delete</a>
                                    </td>
                                </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
</div>
</body>
</html>