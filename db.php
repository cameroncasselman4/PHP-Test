<?php
$conn = null;

if(isset($_POST['clothingsubmit'])){
    $size = $_POST['clothingSize'];
    $type = $_POST['type'];
   // echo ("$size $type");
    openDB();
    queryClothes($_POST['clothingSize'],$_POST['type'],$_POST['color']);
    closeDB();
}

if(isset($_POST['insert'])){
    openDB();
    echo "hello";
    insertData($_POST['clothingSize'],$_POST['style'],$_POST['color'],$_POST['file']);
    closeDB();
}

// Create connection
function openDB() {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "test";
    $GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($GLOBALS['conn']->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
}

function queryClothes($size,$type,$color) {
    $sql = "SELECT * FROM clothing WHERE Size = '$size' and Type = '$type'";
    
    $string = "";
    //format string
    foreach($color as $selected){
        $string .= " and Color = '$selected';";
    }
    $sql .= $string;
    //echo ("$sql <br>");
    
    $result = $GLOBALS['conn']->query($sql);
    //echo $result;
    if ($result->num_rows > 0) {
    //      output data of each row
        $htmlString = "";
        while($row = $result->fetch_assoc()) {
            $htmlString .= "<div class='media'>
                                <img src='" . $row["picture"] ."'>
                            </div>";                 
            //echo $row["id"]." ".$row["Size"]. ": " . $row["Type"] . " with Professor " . $row["Color"]."<br/>";
        }
        echo("
                <div id='section'>
                    $htmlString
                </div>           
            ");
    } 
    else {
        echo "<br/>0 results";
    }
}

function insertData($size,$type,$color,$file) {
    $sql = "INSERT INTO `clothing` (`id`, `Type`, `Size`, `Color`, `picture`) VALUES (NULL, '$type', '$size', '$color', '$file');";
    
    if (mysqli_multi_query($GLOBALS['conn'], $sql)) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function closeDB() {
    $GLOBALS['conn']->close();
}

?>