<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // this tells msql to throw errors when they happen
// without it , he will thro it silently 
session_start() ; 

$db_name="test_db" ; 
$server="localhost" ; 
$password="" ; 
$username= "root"; 
$conn = new mysqli($server,$username,$password,$db_name) ; 
if($conn->connect_error) {
    die("error connecting to the data base"); 
}
else {
    echo "connected succefully to the db "."<br>" ; 
}
if ($_SESSION["created_db"]==false) {

    $sql = "CREATE TABLE users (
    id CHAR(36) NOT NULL DEFAULT (UUID()) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);" ; 

if ($conn->query($sql)==true ) {
   echo  "the table has been created succefully " ; 
    $_SESSION["created_db"]=true ; 
    }
    else {
        die("an error occured while creating thed table ") ; 
        }
 }
 $name = "Rai";
$age = "20zejfn";
$email = "o_boudjenu@esi.dz";
$password = password_hash("mnk srx hab tchof  tea ramzi  ? ", PASSWORD_DEFAULT);
try {
if (filter_var($age,FILTER_VALIDATE_INT) && filter_var($email,FILTER_VALIDATE_EMAIL)) {

    $stmt =$conn->prepare("INSERT INTO users (name, age, email, password) VALUES (?,?,?,?)"); // we send the body of the query to mysql
    $stmt->bind_param("siss", $name, $age, $email, $password) ; // here we check the values to protect from sql injection 
    $stmt->execute() ; // we execute the query 
    echo "user added succefully" ; 
    }
    else {
        throw new Exception("wsh rak hab tdiiir ? ") ; 
    }
    }
    catch (Exception  $e) {
        echo "an error occured ". $e->getMessage(); 
        }  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="index.php">return to home page</a>
</body>
</html>
