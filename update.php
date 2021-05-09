<?php
    $db = new mysqli('localhost' , 'root' , '' , 'univercity');

    $id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $major = $_REQUEST['major'];
        $query = "UPDATE student SET firstname='$firstname' , lastname='$lastname' , major='$major' where id='$id' ";
        $result = $db->query($query);
    }

    $query = "SELECT id , firstname , lastname , major FROM student WHERE id=$id";
    $result = $db->query($query);
    $user = $result->fetch_assoc();
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
        name :<input type="text" name="firstname" value="<?= $user['firstname'] ?>">
    </label><br>
    <label>
        last name :<input type="text" name="lastname" value="<?= $user['lastname'] ?>">
    </label><br>
    <label>
        major :<input type="text" name="major" value="<?= $user['major'] ?>">
    </label><br>
    <button type="submit">update student</button>
</form>
</body>
</html>