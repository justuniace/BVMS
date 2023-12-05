<!DOCTYPE html>
<html>
    <head>
       <title> Personal Information </title>

        <style type ="text/css">
            table  {
                 text-align: center;
                 border-collapse:collapse;
                 width: 100%;
            }
            td{
                font-size: 20px;
                text-align: center;
                 padding: 6px;
                 background-color: #EDD2F3;
                 border: 1px solid #dddddd;
            }
            th{
                padding: 15px;
                background-color: #84DFFF;
                font-size: 15px;
                 font-family: Bodoni MT Condensed;
                border-top: 1px solid #630000;
            }
                
            
           .container{
               display:flex;
               height:20vh;
               justify-content: center;
               align-items: center;
              background-color:
           }
            </style>
</head>
<body>

<center> <h2>  Personal Information </h2>

<div class = "container">
<table >
    
    <tr>
        
        <th> Firstname </th>
        <th> Lastname </th>
        <th> Gender </th>
        <th> Age </th>
        <th> Edit </th>
        <th>Delete </th>
</tr>
        </div>

<?php 
$link =mysqli_connect("localhost","root","", "family registration");

if($link === false)
{
    die("ERROR:Could not connect." .mysqli_connect_error());
}

$records = mysqli_query ($link,"select*from information");

while($data = mysqli_fetch_array($records))
{
    ?>
    <tr>
        
        <td><?php echo $data['Firstname']; ?></td>
        <td><?php echo $data['Lastname']; ?> </td>
        <td><?php echo $data['Gender'];?></td>
        <td><?php echo $data['Age']; ?></td>

        <td><a href ="edit.php?id = <?php echo $data["Firstname"];?>"> Edit </a></td>
        <td><a href ="delete.php?id =<?php echo $data["Firstname"];?>">Delete </a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
