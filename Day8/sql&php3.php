<?php
$mysqli = new mysqli('localhost', 'root', '123456', 'my company');

if(mysqli_connect_errno()){
    print_f ("Connection Failed: %s\n", mysqli_connect_error());
}
$result = $mysqli -> query("SELECT * FROM employees");
?>

<h1> EMPLOYEE USING OOPS </h1>
<table width="500" cellpadding=5 cellspacing=5 border=1 >
<tr>
<th> ID# </th>
<th> FIRST NAME </th> <!--heading-->
<th> LAST NAME </th>
<th> DEPARTMENT </th>
<th> EMAIL</th>
</tr>

<?php while($row = $result -> fetch_object()): ?>
<tr>
<td><?php echo $row -> id; ?></td>
<td><?php echo $row -> first_name; ?></td> <!--column-->
<td><?php echo $row -> last_name; ?></td>
<td><?php echo $row -> department; ?></td>
<td><?php echo $row -> email; ?></td>
</tr>

<?php endwhile; ?>
</table>


<?php $result = $mysqli -> query("SELECT products.name, categories.name AS 'category',
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

<?php while($row= $result -> fetch_object()): ?>
<tr>
<td><?php echo $row -> prod_id; ?></td>
<td><?php echo $row -> name; ?></td> <!--column-->
<td><?php echo $row -> category; ?></td>
</tr>

<?php endwhile; ?>

</table>