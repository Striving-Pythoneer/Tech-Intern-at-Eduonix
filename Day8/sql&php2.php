<!DOCTYPE html>
<html lang="en">
<head>
    <title> ADD EMPLOYEE </title>
    <style>
    label{display:inline-block; width:100px; margin-bottom:10px}
    </style>
</head>
<body>
<h1> Add Employee </h1>
<form action ="process.php" method ="post">
<label> First Name: </label>
<input type="text" name="first_name"/><br/>
<label> Last Name: </label>
<input type="text" name="last_name"/><br/>
<label> Department: </label>
<input type="text" name="department"/><br/>
<label> Email: </label>
<input type="email" name="email"/><br/>
<input type="submit" value="add employee"/><br/>
</form>
    
</body>
</html>