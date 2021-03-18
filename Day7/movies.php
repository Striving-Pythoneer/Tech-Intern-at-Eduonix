<?php
$jsondata = file_get_contents("movies.json");
#similarly we can get data from website or api
$json = json_decode($jsondata, true);
#creating an array
?>
<!--press "!" and then tab to get tags directly-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{text-align:center;}
        h4{margin:0; padding:5px; background:#f4f4f4;}
        li{list-style:none; padding-left:5px;}
        .container{width:600px; margin:auto; overflow:hidden;}
    </style>
</head>
<body>
<div class="container">
<h1> My Favourite Movies with PHP </h1> 
<ul> 
<?php
foreach($json['movies'] as $key => $value){
    echo '<h4>' .$value['title']. '</h4>';
    echo '<li> Year:' .$value['year']. '</li>';
    echo '<li> Genre:' .$value['genre']. '</li>';
    echo '<li> Director:' .$value['director']. '</li>';

}
?>
</ul>

</div>
    
</body>
</html>