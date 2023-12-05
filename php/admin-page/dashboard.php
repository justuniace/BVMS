<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/admin/dashboard/dashboard.css">

</head>
<body>
    <div class="container">
        <div class="upper">
            <?php
                include_once 'header.php';
            ?>
        </div>
        <div class="lower">
            <div class="left-content">
                <div class="vaccinated">
                    <div class="left">
                        <h4>Vaccinated</h4>
                        <h1 class="vaccinatedCount">0</h1>
                    </div>
                    <div class="right">
                        <img src="../../images/vaccinated.png">
                    </div>
                </div>
                <div class="unvaccinated">
                    <div class="left">
                        <h4>Unvaccinated</h4>
                        <h1 class="unvaccinatedCount">0</h1>
                    </div>
                    <div class="right">
                        <img src="../../images/unvaccinated.png">
                    </div>
                </div>
                <div class="first-dose">
                    <div class="left">
                        <h4>First Dose</h4>
                        <h1 class="first-dose-count">0</h1>
                    </div>
                    <div class="right">
                        <img src="../../images/firstdose.png">
                    </div>
                </div>
            </div>

            <div class="right-content">
                <div class="total-population">
                    <h4>Total Schedules</h4>
                    <h1 class="totalPopulationCount">0</h1>
                    <img src="../../images/totalpopulation.png">
                </div>
                <div class="new-citizen">
                    <h4>New Citizen</h4>
                    <h1>0</h1>
                    <img src="../../images/totalpopulation.png">
                </div>
            </div>
        </div>
    </div>

    <script>
        const totalPopulation = document.querySelector(".totalPopulationCount");
        const unvaccinated = document.querySelector(".unvaccinatedCount");
        const vaccinated = document.querySelector(".vaccinatedCount");
        const firstDose = document.querySelector(".first-dose-count");

        totalPopulation.innerHTML = "<?php $conn = mysqli_connect('localhost', 'root', '', 'vaccination_registration');
                                            $sql = "SELECT * FROM vaccination_data;";
                                            $result = mysqli_query($conn, $sql);
                                            $rows = mysqli_num_rows($result);

                                            echo $rows;
                                    ?>";
        unvaccinated.innerHTML = totalPopulation.innerHTML;

        vaccinated.innerHTML = "<?php $conn = mysqli_connect('localhost', 'root', '', 'vaccination_registration');
                                            $sql = "SELECT * FROM vaccinated;";
                                            $result = mysqli_query($conn, $sql);
                                            $rows = mysqli_num_rows($result);

                                            echo $rows;
                                    ?>";
        firstDose.innerHTML = "<?php $conn = mysqli_connect('localhost', 'root', '', 'vaccination_registration');
                                            $sql = "SELECT * FROM first_dose;";
                                            $result = mysqli_query($conn, $sql);
                                            $rows = mysqli_num_rows($result);

                                            echo $rows;
                                    ?>";
    </script>
</body>
</html>