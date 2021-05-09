<?php
    $db = new mysqli('localhost' , 'root' , '' , 'univercity');

    $id = $_GET['id'];
    $query = "SELECT id , firstname , lastname , major FROM student WHERE id=$id";
    $result = $db->query($query);

    $student = $result->fetch_assoc();

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>details</title>
</head>
<body>
    id : <?= $student['id']?><br>
    name : <?= $student['firstname']?><br>
    last name : <?= $student['lastname']?><br>
    major : <?= $student['major']?><br>

    <a href="index.php">go back</a>
</body>
</html>