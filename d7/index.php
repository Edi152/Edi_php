<?php

$name = $_GET['name'];
$surname = $_GET['surname'];
$email = $_GET['email'];

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "index.php" method="GET">
        <input type="text" name="name" placeholder="Name"><br/>
        <input type="text" name="surname" placeholder="Surname"><br/>
        <input type="text" name="email" placeholder="Email"><br/>
        <button type="submit">
        
</body>
</html>