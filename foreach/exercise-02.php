<?php

$countries = ['Tokyo', 'Mexico', 'New York', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];

echo implode(', ', $countries);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 02</title>
</head>
<body>
    <ul>
        <?php foreach ($countries as $country) : ?>
            <?="<li>$country</li>"?>
        <?php endforeach ?>    
    </ul>

    <?= '<hr>' ?>

    <?php array_push($countries, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing') ?>

    <ul>
    <?php foreach ($countries as $country) : ?>
        <?="<li>$country</li>"?>
    <?php endforeach ?> 
    </ul>

</body>
</html>

