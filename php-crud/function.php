<?php 
    $conn = mysqli_connect("localhost", "root", "", "crud");
    if(isset($_POST["submit"])) {
        if($_POST["submit"] == "add") {
            add();
        }
        else if($_POST["submit"] == "edit") {
           edit(); 
        }
        else {
            delete();
        }
    }
    function add() {
        global $conn;

        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $country = $_POST["country"];

        $query = "INSERT INTO users VALUES ('', '$name', '$gender', '$country')";
        mysqli_query($conn, $query);

        echo 
        "<script>
            alert('User Added Succesfully');
            document.location.href = 'index.php';
        </script>
        ";
    }

    function edit() {
        global $conn;

        $id = $_GET["id"];
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $country = $_POST["country"];

        $query = "UPDATE users SET name = '$name', gender = '$gender', country = '$country' WHERE id = $id";
        mysqli_query($conn, $query);

        echo 
        "<script>
            alert('User Edited Succesfully');
            document.location.href = 'index.php';
        </script>
        ";
    }

    function delete() {
        global $conn;

        $id = $_POST["submit"];

        $query = "DELETE FROM users WHERE id = $id";
        mysqli_query($conn, $query);

        echo 
        "<script>
            alert('User Deleted Succesfully');
            document.location.href = 'index.php';
        </script>
        ";
    }
?>