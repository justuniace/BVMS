<?php $link = mysqli_connect("localhost", "root", "", "family registration");
                                               
if($link === false)
{
    die("ERROR: Could not connect. " .mysqli_connect_error());
}


$Firstname =mysqli_real_escape_string($link, $_REQUEST['Firstname']);
$Lastname = mysqli_real_escape_string($link, $_REQUEST['Lastname']);
$Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
$Age =mysqli_real_escape_string($link, $_REQUEST['Age']);

$sql = "INSERT INTO information (Firstname, Lastname, Gender, Age) VALUES('$Firstname','$Lastname','$Gender','$Age')";

if(mysqli_query($link, $sql))
{
    echo"Records added successfully.";

}
else{
    echo "ERROR:Could not able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);
header("location:Display.php");
?>


