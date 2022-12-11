<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $qry = "INSERT INTO students (name,email) VALUES ('".$name."','".$email."')";

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "bcaDatabase";
    //create connection
    $con = mysqli_connect($server,$username,$password,$database);
    mysqli_query($con,$qry);

    echo '<script>alert("Data inserted successfully");
    window.location = "student.php" ;
    </script>';
?>       