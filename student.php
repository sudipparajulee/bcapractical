<?php include 'header.php'; 
$server = "localhost";
$username = "root";
$password = "";
$database = "bcaDatabase";
//create connection
$con = mysqli_connect($server,$username,$password,$database);
$query = "SELECT * FROM students";
$result = mysqli_query($con,$query);
?>
<div class="addbtn" >
<a href="addstudent.php">Add Student</a>
</div>
<div class="student-container">
    
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>

    <div class="student-div">
        <a href="editstudent.php?studentid=<?php echo $row['id'];?>">Edit</a>
        <a href="deletestudent.php?studentid=<?php echo $row['id']?>" onclick="return confirm('Are you sure to Delete?');">Delete</a>
        <h4>ID: <?php echo $row['id']; ?></h4>
        <h4>Name: <?php echo $row['name']; ?></h4>
        <h5>Email: <?php echo $row['email']; ?></h5>
    </div>
    <?php
    }
    ?>
    
</div>
<?php include 'footer.php'; ?>
