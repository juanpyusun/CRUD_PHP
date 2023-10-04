<?php
    /*
    require       : requiere del otro
    include       : pegalo aqui
    include_once  : pegalo una vez
    */
    include_once('database.php');

    $sql    = 'SELECT id, name, email FROM usuarios'; //preparacion del query
    $result = $conn->query($sql); //ejecucion del query
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
</head>
<body>

    <h1>User Form</h1>

    <form action="save.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Personal Data</legend>
            <div>
                <label for="name">Name</label>
                <input name="name" type="text" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input name="email" type="text" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input name="password" type="password" required>
            </div>
            <div>
                <label for="image">Image</label>
                <input name="image" type="file">
            </div>
            <div>
                <input type="submit" value="SAVE" name="save_user">
            </div>
        </fieldset>
    </form>

    <h1>Users Table</h1>

    <table border=1px>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = $result->fetch_assoc()){
            ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['email']?></td>
                        <td>
                            <a href="edit.php?id=<?=$row['id']?>">Edit</a>
                            |
                            <a href="delete.php?id=<?=$row['id']?>">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>