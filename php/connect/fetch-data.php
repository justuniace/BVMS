<?php
    include_once 'connect.php';

    if($conn -> connect_error)
    {
        die('Connection Failed : '.$conn -> connect_error);
    }
    else
    {
        $sql = "SELECT * FROM vaccination_data;";
        $result = mysqli_query($conn, $sql);
    }
?>