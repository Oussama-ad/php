
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




    </form>
</body>
</html>

<?php echo "hello world <br>" ; 
$hi = 987 ; 
if ( isset($_GET["submit"])) {
if (isset($_GET["email"]) && isset($_GET["pass"]) ) {
    $email = $_GET["email"];
    $password = $_GET["pass"];
    echo "i am {$hi} years old, my email is {$email} and my password is {$password}";
} else {
    echo "please input an email and a password";
}
}
// using the get method the data is sent i nthe url 
// using the post method the data is sent in the body of the request ( it does not show in the url any data )
// rand(a,b) gives random values from a to b 
$food = array(1,2,3,4,5) ;  
// array_push($food,554)  ;
// array_pop($food) ;  
// echo count($food) ; to count the nmuber of elements in an array 
//$food=array_reverse($food) ; to reverse an aray , it returns an array 
// for assosiative arrays , array_keys($your_arr) return the keys of the array in a separate array : array_values returns the value in a new array , array_flip flips between the values and the keys 
echo "<br>" ; 
foreach($food as $x){ // for  each like in js 
echo $x . "<br>" ; 
}
 
// isset() : returns true if a variable is declared and not Null 
// empty(): return true if a variable is "" , false or null 
if  (isset($_POST["sub"])) {
 if (isset($_POST["ch"])) {
  switch ($_POST["ch"]) {
    case "c1": 
     echo "c1";
        break ; 
    case "c2": 
     echo "c2";
        break ; 
    case "c3": 
     echo "c3";
        break; 
    
  }
 }
 else {
    echo "no chosed choices please chose a choice " ; 
 }

}



?>
