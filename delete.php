<?php
    $db = new mysqli('localhost' , 'root' , '' , 'univercity');

    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE id='$id'";
    $db->query($query);

    header("location: index.php");
    exit();
?>