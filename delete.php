<?php
    include_once('database.php');
    if(isset($_GET['id'])){
        $id     = $_GET['id'];
        $sql    = "DELETE FROM usuarios WHERE id=$id";
        $result = $conn->query($sql);

        if(!$result){
            die("Query failed");
        }
        header("Location: index.php");
    }
?>