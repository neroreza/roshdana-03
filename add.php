<?php
    require 'include/init.php';

    if(isPostMethod()){
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $major = $_REQUEST['major'];
        $result = addStudent($firstname,$lastname,$major);
        redirectToUrl('index.php');
    }
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="index.php">go back</a><br>
    <form method="post">
        <label>
            name :<input type="text" name="firstname">
        </label><br>
        <label>
            last name :<input type="text" name="lastname">
        </label><br>
        <label>
            major :<input type="text" name="major">
        </label><br>
        <button type="submit">add student</button>
    </form>
</body>
</html>