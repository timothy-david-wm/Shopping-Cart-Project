
<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=newproject", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

mysql_select_db($conn);

$stmt = "SELECT * FROM newproject.Orders";


$result = mysql_query($stmt);

session_start();

if(isset($_POST['T1qty'])){$_SESSION["table1"] = $_POST['T1qty'];}

if(isset($_POST['T2qty'])){$_SESSION["table2"] = $_POST['T2qty'];}

if(isset($_POST['T3qty'])){$_SESSION["table3"] = $_POST['T3qty'];}

if(isset($_POST['T4qty'])){$_SESSION["table4"] = $_POST['T4qty'];}

if(isset($_POST['T5qty'])){$_SESSION["table5"] = $_POST['T5qty'];}

if(isset($_POST['T6qty'])){$_SESSION["table6"] = $_POST['T6qty'];}

if(isset($_POST['T7qty'])){$_SESSION["table7"] = $_POST['T7qty'];}

if(isset($_POST['T8qty'])){$_SESSION["table8"] = $_POST['T8qty'];}

if(isset($_POST['T9qty'])){$_SESSION["table9"] = $_POST['T9qty'];}
