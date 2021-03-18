<?php
// Craete Connection     (host, username, password, db name)
$connect = mysqli_connect('localhost', 'root', '123456', 'my company');

//check connection
if(mysqli_connect_errno()){
    echo 'Failed to connect to database: ' .mysqli_connect_error();
}
$result = mysqli_query($connect, "SELECT * FROM employees");
?>

<h1> EMPLOYEES </h1>
<table width="500" cellpadding=5 cellspacing=5 border=1 >
<tr>
<th> ID# </th>
<th> FIRST NAME </th> <!--heading-->
<th> LAST NAME </th>
<th> DEPARTMENT </th>
<th> EMAIL</th>
</tr>

<?php while($row=mysqli_fetch_array($result)): ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['first_name']; ?></td> <!--column-->
<td><?php echo $row['last_name']; ?></td>
<td><?php echo $row['department']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>

<?php endwhile; //The endif keyword is used to mark the end of an if conditional which was started with the if(...): syntax. It also applies to any variation 
//of the if conditional, such as if...elseif and if...else.?>

</table>


<?php $result = mysqli_query($connect, "SELECT products.name, categories.name AS 'category',
                                products.id as 'prod_id'
                                FROM products
                                LEFT JOIN categories
                                ON products.category = categories.id"); ?>

<h1> PRODUCTS </h1>
<table width="500" cellpadding=5 cellspacing=5 border=1 >
<tr>
<th> ID# </th>
<th> PRODUCT NAME </th> <!--heading-->
<th> CATEGORY </th>
</tr>

<?php while($row=mysqli_fetch_array($result)): ?>
<tr>
<td><?php echo $row['prod_id']; ?></td>
<td><?php echo $row['name']; ?></td> <!--column-->
<td><?php echo $row['category']; ?></td>
</tr>

<?php endwhile; //The endif keyword is used to mark the end of an if conditional which was started with the if(...): syntax. It also applies to any variation 
//of the if conditional, such as if...elseif and if...else.?>

</table>

