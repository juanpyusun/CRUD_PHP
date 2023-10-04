<?php
    include_once('database.php');
    if(isset($_GET['id'])){
        $id     = $_GET['id'];
        $sql    = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conn->query($sql);

        if($result->num_rows==1){
            $row        = $row = $result->fetch_assoc();
            $name       = $row['name'];
            $email      = $row['email'];
            $password   = $row['password'];
        }
    }

    if(isset($_POST['update'])){
        $id         = $_GET['id'];
        $name       = $_POST['name'];
        $email      = $_POST['email']; 
        $password   = $_POST['password'];      
        $sql        = "UPDATE usuarios SET name = '$name', email = '$email', password = '$password' WHERE id = $id";
        $result     = $conn->query($sql);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="edit.php?id=<?= $_GET['id']?>" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Updating Personal Data</legend>
            <div>
                <label for="name">Name</label>
                <input name="name" type="text" value="<?= $name; ?>" placeholder="...UPDATE NAME..." required>
            </div>
            <div>
                <label for="email">Email</label>
                <input name="email" type="text" value="<?= $email; ?>" placeholder="...UPDATE EMAIL..." required>
            </div>
            <div>
                <label for="password">Password</label>
                <input name="password" type="password" value="<?= $password; ?>" placeholder="...UPDATE PASSWORD..." required>
            </div>
            <div>
                <label for="image">Image</label>
                <input name="image" type="file">
            </div>
        </fieldset>
        <button name="update">Update</button>
    </form>    
</body>
</html>