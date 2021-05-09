<?php
    $db = new mysqli('localhost' , 'root' , '' , 'univercity');

    $query = "SELECT * FROM student";
    $result = $db->query($query);

    $students = $result->fetch_all(MYSQLI_ASSOC);


?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>roshdana- 02</title>
</head>
<body>
<table>
    <tr>
        <th>#</th>
        <th>name</th>
    </tr>
    <?php
    $counter = 0;
    foreach ($students as $student)
    {
        $counter+=1;
        echo "<tr>
                <td>$counter</td>
                <td><a href='detail.php?id=$student[id]'>$student[firstname] $student[lastname]</a></td>
              </tr>";
    }

    ?>
</table>

<a href="add.php">add a new student</a>

</body>
</html>