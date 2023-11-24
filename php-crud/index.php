<?php require 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="adduser.php">Add</a>
    <table border = 1> 
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Gender</td>
            <td>Country</td>
            <td>Action</td>
        </tr>
        <?php 
            $users = mysqli_query($conn, "SELECT * FROM users");
            $i = 1;

            foreach($users as $user) :
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $user["name"]; ?></td>
            <td><?php echo $user["gender"]; ?></td>
            <td><?php echo $user["country"]; ?></td>
            <td>
                <a href="edituser.php?id=<?php echo $user['id'];?>">Edit</a>
                <form class="" action="" method="POST">
                    <button type="submit" name="submit" value="<?php echo $user['id']; ?>">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>