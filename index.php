<?php 
session_start() ;
//  require_once "database.php" ;  
$_SESSION["created_db"] = true ; 
$_SESSION["name"]="oussama" ; 
$_SESSION["password"] = "azerty" ; 
echo "hello world <br>" ; 
$name="oussama" ;  
$password="oussama200" ; 
$hash = password_hash($password,PASSWORD_DEFAULT) ; 
echo $hash ; 
if (password_verify($password,$hash)) { // to check if the password is right 
    echo "your password is true " ; 

}
else {
    echo " you inputed a wrong password" ; 
}
setcookie("name",$name,time()+86400*1,"/") ; // this is an assosiative array , the key is the first arg , the value is the second , the third is the experations time in seconds
// the third is the path
// to put multiple data in an coockie , we just put them in an array and te seneralized it ( turn it into a string ) and thn when extracting it we d the reverse
// user use json_encode and json_decode
// to delete the coockie we do setcookie("name",$name,time()-0,"/") ; aya ndiro -0 
if (isset($_GET["submit"])) {
    header("location: hom.php") ; // this is like a rediraction 
    exit() ; 
}
?>
<!-- string functions in bro code vidio  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is from html</h1>
    <form action="index.php" method="GET">
        <label for="">Email</label>
        <br>
        <input type="text" name="email" placeholder="Email" >
        <br><br>
        <label for="">Password</label>
        <br>
        <input type="password" name="pass" placeholder="password">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <form action="index.php" method="post">
        <label for="c1">c1</label>
     <input type="radio" name="ch" value="c1">
     <br>
   <label for="c1">c2</label>
    <input type="radio" name="ch" value="c2">
    <br>
   <label for="c1">c3</label>
     <input type="radio" name="ch" value="c3">
     <br>
     <input type="submit" name="sub" placeholder="submit">
     <br>
   <a href="hom.php">Home</a>

   <br>
  <a href="database.php">Click here to create the table in the db</a>
    </form>
</body>
</html>

