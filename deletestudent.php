<?php 
    $studentid = $_GET['studentid'];
    $qry = "DELETE FROM students where id='".$studentid."'";

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "bcaDatabase";
    //create connection
    $con = mysqli_connect($server,$username,$password,$database);
    mysqli_query($con,$qry);

    echo '<script>alert("Data Deleted successfully");
    window.location = "student.php" ;
    </script>';
?>       