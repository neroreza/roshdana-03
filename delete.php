<?php
    require 'include/init.php';

    $id = $_GET['id'];
    deleteStudent($id);
    redirectToUrl('index.php');
?>