<?php 
require 'function.php';
$id = $_GET["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="" action="" method="POST">
        Name
        <input type="text" name="name" value="<?php echo $user['name']; ?>"> <br>
        Gender
        <input type="radio" name="gender" value="Male"<?php if($user["gender"] == "Male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="Female"<?php if($user["gender"] == "Female") echo "checked"; ?>> Female <br>
        Country
        <select class="" name="country">
            <option value="Brasil" <?php if($user["country"] == "Brasil") echo "selected"; ?>>Brasil</option>
            <option value="USA" <?php if($user["country"] == "USA") echo "selected"; ?>>USA</option>
            <option value="Argentina" <?php if($user["country"] == "Argentina") echo "selected"; ?>>Argentina</option>
        </select> <br>
        <button type="submit" name="submit" value="edit">Edit</button>
    </form>
    <br>
    <a href="index.php">Home</a>
</body>
</html>