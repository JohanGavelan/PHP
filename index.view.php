<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>


    <ul>

         <?php foreach ($tasks as $topic => $task) : ?>

            <?= "<li><strong>$topic</strong> $task</li>" ?>

         <?php endforeach; ?>

    </ul>


</body>
</html>