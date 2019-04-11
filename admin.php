<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>    
<body>
    <nav class="navbar">
        <a href="index.php" class="nav-links">Home</a>
        <a href="admin.php" class="nav-links">Admin</a>
    </nav>
    <h1>Insert new data</h1>
<form method="post">
    insert clothing size
    <input name="clothingSize">
    <br>
    Insert clothing style
    <input name="style">
    <br>
    Insert Color
    <input name="color">
    <br>
    Insert file location for picture
    <input name="file">
<input type="submit" name="insert" value="Submit"/>
</form>
<?php
    include 'db.php';
?>
</body>
<html>