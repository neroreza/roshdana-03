<?php
    require 'include/init.php';
    $students = listStudent();
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
                <td><a href='detail.php?id=$student[id]'>$student[firstname] $student[lastname]</a>
                <a onclick='return confirm(\" are you sure ? \");' href='delete.php?id=$student[id]' style='color:red;'>X</a>
                <a href='update.php?id=$student[id]' style='color:green;'>+</a>
                </td>
              </tr>";
    }

    ?>
</table>

<a href="add.php">add a new student</a>

</body>
</html>