<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $productName = $_POST['PName'];
    $outputType = $_POST['outputType'];
    $quantity = $_POST['quantity'];
    $rate = $_POST['rate'];
    

    function returnIndex(){ //return to the index.php file after submit is pressed
        header("Location: index.php");
        exit();
    }
    
//connecting to the database
$serveranme = "localhost";
$username = "root";
$password = "";
$database = "mill entry";

//create a connection
$conn = mysqli_connect($serveranme, $username, $password, $database);
if(!$conn){
    die("Sorry database connection failed: ".mysqli_connect_error());
}
else{
    echo"Connection was succesfull";
}
function clearDb(){  // CLears the entries on the databse
    global $conn;
    $sql = "TRUNCATE TABLE `mill entry`.`entries`";
    mysqli_query($conn, $sql);
}

if(isset($_POST['clearData'])){  // Checks if the Clear data button is pressed
    clearDb();
    returnIndex();
}

$finalAmt = $rate * $quantity;
$sql = "INSERT INTO `entries` ( `Product Name`, `Output Type`, `Quantity`, `Rate`, `Date`, `Amount`) VALUES ('$productName', '$outputType', '$quantity', '$rate', current_timestamp(), '$finalAmt')";

$result = mysqli_query($conn, $sql);

returnIndex();

}
?>