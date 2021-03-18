<?php
// Craete Connection     (host, username, password, db name)
$connect = mysqli_connect('localhost', 'root', '123456', 'my company');

//check connection
if(mysqli_connect_errno()){
    echo 'Failed to connect to database: ' .mysqli_connect_error();
}
?>
<?php
print_r($_POST); #post what you have typed
echo '<br/>';
//create variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$department = $_POST['department'];
$email = $_POST['email'];

mysqli_query($connect, "INSERT INTO employees (first_name, last_name, department, email)
VALUES ('$first_name', '$last_name', '$department', '$email')");

if(mysqli_affected_rows($connect)>0){
    echo '<p> Employee Added </p>';
    echo '<a href="sql&php2.php"> Go Back </a>';
}else{
    echo "Employee not added";
    echo mysqli_error();
}
?>