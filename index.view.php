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
       

        <h1>Task for the day</h1>

        <ul>
            
            <li>
            
                <strong>Title: </strong> <?= $task['title'] ?>

            </li>

            <li>
            
                <strong>Date: </strong> <?= $task['due'] ?>

            </li>

            <li>
            
                <strong>Responsible: </strong> <?= $task['assigned_to'] ?>

            </li>

            <li>
            
                <strong>Completed: </strong> <?= $task['completed'] ? 'Completed' : 'Incomplete' ;?>

            </li>
        
        </ul>
    

</body>
</html>