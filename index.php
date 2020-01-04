<!DOCTYPE html>
<html>
  <head>
    <title>Practice of PHP</title>
  </head>
  <body>
    <!-- first two topics syntax and concardination -->
    
    <?php echo "Hello ,I'm Gaurav Chauhan"; ?>
    <br/>
    <?php
    // $test ="I'm";
    // echo $test . ' Gaurav Chauhan';
    ?>
    
    <!-- Variables in php  -->
    
    <!-- local variable  -->
    
    <?php
    // function fruitcalc(){
    // $fruit = 'Apple';
    // $quantity = 25;
    // $unitprice = 12;
    // $totalprice = $quantity*$unitprice;
    // echo 'the price of your '.$fruit. ' is '.$totalprice.' rupees';
    
    // }
    // fruitcalc();
    ?>
    
    <!-- Global variable  -->
    
    <?php
    /* $fruit = 'orange';
    function fruitcalc(){
    GLOBAL $fruit;
    $quantity = 25;
    $unitprice = 12;
    $totalprice = $quantity*$unitprice;
    echo 'the price of your '.$fruit. ' is '.$totalprice.' rupees';
    
    }
    fruitcalc();
    */
    ?>
    <!-- Function Parameter -->
    <?php
    /*
    function fruitcalc($fruit,$quantity,$unitprice){
    $totalprice=$quantity*$unitprice;
    echo 'the price of your '.$fruit. ' is '.$totalprice.' rupees';
    }
    fruitcalc('Banana',25,15.55);
    */
    ?>
    <!-- Static Variable -->
    <?php
    /* function sayhello($username){
    STATIC $user_count =1;
    echo 'hello & welcome ' . $username. ' you are our usernumber ' .$user_count++;
    }
    sayhello("gaurav");
    sayhello("munesh");
    */
    ?>
    <!-- PHP Constants  -->
    <?php
    /*define('HOSTNAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DBNAME', 'test');
    $checkon = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME)or die('can not connect to database');
    if($checkon){
    echo 'you are connected to database';
    }
    */
    ?>
    <!-- Decision Making Statements -->
    <?php 
/*$today = date('l');
echo '<h1>'. $today. '</h1>';
if($today == 'saturday' || $today == 'sunday'){
  echo 'wow !! its weekend enjoy it ';
}else if ($today == 'friday'){
  echo 'weekend is coming';
} else{
  echo 'Its working day';
} */
 ?>
<!-- ---------------------------------------------------- -->
<?php 
/*$userlogin = 0;
if ($userlogin){
  echo 'You are login';
}else {
  echo 'You are not Login';
}*/
?>

<!-- --------------------------------------------------------------- -->
<?php
/*$userlogin = rand(0,1);
if ($userlogin){
?>
<h2>WELCOME USER</h2>
<ul>
    <li><a href="#">something</a></li>
    <li><a href="#">Account</a></li>
    <li><a href="#">logout</a></li>
    
</ul> <?php } else { ?>
  <h2> Welcome Guest </h2>
  <p>You are not login <a href="login.php">click here</a>to login</p>
<?php  }
  */ 
?>

<!-- SWITCH CASES  -->
<?php 
/*
$error_code = rand(400,500);
switch ($error_code) {
  case 404:
    // code...
    echo '404 error , page not found';
    break;
     case 503:
    // code...
    echo '503 error , survice unvailable';
    break;
   case 403:
    // code...
    echo '403 error , you are not authorized to see this page  ';
    break;
   case 500:
    // code...
    echo '500 error , Internal server error';
    break;
   case 200:
    // code...
    echo '200 error , everything is fine you can visit the site ';
    break;
  
  
  default:
    // code...
   echo 'unknown status error or code ';
    break;
}
*/
?>
<!-- ---------------------------------------------------------- -->

<!-- LOOPS  -->

<!-- ---------------------------------------------------- -->
<!-- FOR LOOP -->

<form name="dateofbith">
  <h4>Choose your birth year </h4>
  <select name="" multiple>
  <?php 
   for ($i = 2016; $i > 1970; $i--){?>
    <option value="<?php echo $i ?>"><?php echo $i ?></option>
    <?php } ?>
  ?>
  </select>
</form>
  </body>
</html>