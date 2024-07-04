<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_db";

    $con = mysqli_connect($server, $username, $password, $dbname);
    if (!$con) {
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    echo "hi2";

    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "hi";
    //Query
    $sql = "INSERT INTO `user_form` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    
    if(mysqli_query($con, $sql)){
        header("Location: login.php");
        exit();
    }
    else{
        echo "ERROR:" . mysqli_error($con);
    }

mysqli_close($con);
}
?>