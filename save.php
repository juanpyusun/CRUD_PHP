<?php
    include_once('database.php');
    if(isset($_POST['save_user'])){
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        //$image    = $_POST['image'];

        $sql    = "INSERT INTO usuarios (name, email, password) VALUES ('$name','$email','$password')";
        $result = $conn->query($sql);
        
        if(!$result){
            die("Fallo la conexion");
        }
        header("Location: index.php");
    }
?>