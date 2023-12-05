<?php
    $conn = mysqli_connect('localhost', 'root', '', 'vaccination_registration');
    
    if($conn -> connect_error)
    {
        die('Connection Failed : '.$conn -> connect_error);
    }
    else
    {
        $sql = "SELECT * FROM vaccination_data;";
        $result = mysqli_query($conn, $sql);

        if(isset($_GET['delete']))
        {
            $id = $_GET['delete'];
            $conn->query("DELETE FROM vaccination_data WHERE id=$id");
        }

        header("Location: ../admin-page/records.php");
    }
?>