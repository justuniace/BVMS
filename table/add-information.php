<html lang = "en">
    <head>
        <meta charset = "UTF-8">
            <title> Personal Information</title>

    </head>
    <body>
        <form action= "insert.php" method ="post">
            <p>
                <label for ="Firstname">Firstname:</label>
                <input type="text" name="Firstname" id="Firstname">
           </p>
           <p>
                <label for ="Lastname">Lastname:</label>
                <input type="text" name="Lastname" id="Lastname">
           </p>
           <p>
                <label for ="Gender">Gender:</label>
                <input type="text" name ="Gender" id="Gender">
           </p>
           <p>
                <label for ="Age"> Age:</label>
                <input type="text" name ="Age" id="Age">
           </p>

           <input type="submit" value="Add Information">
</form>
</body>
</html>