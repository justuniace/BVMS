<?php
    include_once '../../connect/fetch-data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/admin/records/vaccinated/vacicnated-page.css">
</head>
<body>
    <div class="container">

        <div class="options">
            <a class="go-back-btn" href="../../admin-page/records.php">Go back</a>
        </div>
        <table class="records">
            <thead>
                <tr>
                    <td>Last Name</td>
                    <td>First Name</td>
                    <td>Middle Name</td>
                    <td>Date vaccinated</td>
                    <td>Vaccine brand</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    static $num = 0;
                    while($rows = mysqli_fetch_assoc($result)): $num++?>
                            <tr>
                                <td><?php echo $rows['lastName'] ?></td>
                                <td><?php echo $rows['firstName'] ?></td>
                                <td><?php echo $rows['middleName'] ?></td>
                                <td><?php echo $rows['schedule'] ?></td>
                                <td><?php echo $rows['vaccineBrand'] ?></td>
                                <td class="btn">
                                    <a onclick="onMarkClick(id = <?php echo $rows['id'] ?>)" class="mark-btn" id="<?php echo $rows['id'] ?>"
                                    href="../connectDB2/mark-as-first-dose.php?mark=<?php echo $rows['id']; ?>">First Dose</a>
                                    <!-- href="../connectDB2/-->
                                </td>
                            </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>