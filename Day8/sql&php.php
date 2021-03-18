<?php
// Craete Connection     (host, username, password, db name)
$connect = mysqli_connect('localhost', 'root', '123456', 'my company');

//check connection
if(mysqli_connect_errno()){
    echo 'Failed to connect to database: ' .mysqli_connect_error();
}

/*mysqli_query($connect, "INSERT INTO employees (first_name, last_name, department, email)
VALUES ('Shahrukh', 'Khan', 'Technology', 'sk@skype.com')");*/

$result = mysqli_query($connect, "SELECT * FROM employees");
while($row=mysqli_fetch_array($result)) {
    echo $row['first_name']. ' ' .$row['last_name'] .'<br/>';
}
?>