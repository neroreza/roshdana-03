<?php
    function isPostMethod(){
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }

    function redirectToUrl($url){
        header("location: $url");
        exit;
    }

    function getStudent($id){
        global $db;
        $query = "SELECT id , firstname , lastname , major FROM student WHERE id=$id";
        $result = $db->query($query);
        if(false === $result){
            echo $query. '<br>';
            echo $db->error;
            exit;
        }
        return $result->fetch_assoc();
    }

    function updateStudent($id , $firstname , $lastname , $major){
        global $db;
        $query = "UPDATE student SET firstname='$firstname' , lastname='$lastname' , major='$major' where id='$id' ";
        $result = $db->query($query);
        if(false === $result){
            echo $query. '<br>';
            echo $db->error;
            exit;
        }
    }

    function deleteStudent($id){
        global $db;
        $query = "DELETE FROM student WHERE id='$id'";
        $db->query($query);
    }

    function listStudent(){
        global $db;
        $query = "SELECT * FROM student";
        $result = $db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function addStudent($firstname,$lastname,$major){
        global $db;
        $query = "INSERT INTO student SET firstname='$firstname' , lastname='$lastname' , major='$major' ";
        return $db->query($query);
    }