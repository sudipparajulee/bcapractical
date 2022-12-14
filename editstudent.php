<?php include 'header.php'; 
$server = "localhost";
$username = "root";
$password = "";
$database = "bcaDatabase";
//create connection
$con = mysqli_connect($server,$username,$password,$database);

$studentid = $_GET['studentid'];
$qry = "SELECT * FROM students where id='".$studentid."'";
$data = mysqli_query($con,$qry);
$row = $data->fetch_array();
?>
<h2>Edit Details</h2>
    <form action="updatestudent.php" method="POST">
        <br><br>
        <input type="hidden" value="<?php echo $row['id']; ?>" name="studentid">
        <input type="text" name="name" placeholder="Enter Name" value="<?php echo $row['name']; ?>">
        <br><br>
        <input type="text" name="email" placeholder="Enter Email" value="<?php echo $row['email'] ?>">
        <br><br>
        <button type="submit">Update Student</button>
    </form>
<?php include 'footer.php'; ?>

