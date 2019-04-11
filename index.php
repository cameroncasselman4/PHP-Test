<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>    
<body>
    <nav class="navbar">
        <a href="#" class="nav-links">Home</a>
        <a href="admin.php" class="nav-links">Admin</a>
    </nav>
    <header id = "showcase">
            <div class="content wrap">
                <h1>Basic Outfitters</h1>
                <p class="headerP">search for clothing below</p>
            </div>            
    </header>
    <section>
        <div class="section-one-header">
            <h3>Fill out form below to display available clothes</h3>
        </div>
    </section>
<!-- forms -->
<!-- drop down to select size of shirt -->
<!-- checkbox to select color of shirt -->
<!-- radio to select type of clothing -->
<form method="post">
    Enter your clothing size
    <input name="clothingSize" list="size">
    <datalist id="size">
        <option value="small">
        <option value="medium">
        <option value="large">
    </datalist> 
    <br>
    Select Clothing Style <br>
    <input type="radio" name="type" value = "hoodie"> hoodie<br>
    <input type="radio" name="type" value = "short"> short sleeve<br>
    <input type="radio" name="type" value = "long"> long sleeve<br>
    Select All Colors You're interested in <br>
    <input type="checkbox" name="color[]" value="blue"> blue<br>
    <input type="checkbox" name="color[]" value="red"> red<br>
    <input type="checkbox" name="color[]" value="pink"> pink<br>
<input type="submit" name="clothingsubmit" value="Submit"/>
</form>
<?php
include 'db.php';
?>
</body>
</html>
