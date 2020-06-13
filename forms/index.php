<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form practice PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div class="contenedor">
        <h1>Register</h1>

        <form action="register.php" method="POST">
            <label for="name">Name: </label><br>
            <input type="text" name="name"><br> 

            <label for="last-name">Last name:</label><br>
            <input type="text" name="last-name"><br>
            
            <label for="email">Email:</label><br>
            <input type="email" name="email"><br>
            
            <label for="password">Password:</label><br>
            <input type="password" name="password"><br>
        </form>
    </div>

</body>

</html>