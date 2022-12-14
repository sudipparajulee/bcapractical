<?php 
    $studentid = $_POST['studentid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $qry = "UPDATE students SET name='".$name."', email = '".$email."' where id='".$studentid."'";

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "bcaDatabase";
    //create connection
    $con = mysqli_connect($server,$username,$password,$database);
    mysqli_query($con,$qry);

    echo '<script>alert("Data updated successfully");
    window.location = "student.php" ;
    </script>';
?>       