<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BVMS</title>
    <link rel="stylesheet" href="css/index/index.css">
    <link rel="stylesheet" href="css/schedule/form.css">
</head>
<body>
    <div class="container">
        <img class='line' src="images/Path 3.png">
        <div class="upper">
            <?php
                include_once 'php/welcome-page/header.php';
            ?>
        </div>
        <div class="lower">
            <?php
                include_once 'php/welcome-page/welcome-page.php';
            ?>
        </div>

        <?php
            include_once 'php/welcome-page/login-page.php';
            include_once 'php/schedule-page/form.php'; 
        ?>
    </div>

    <script src="js/script.js"></script>
</body>
</html>

