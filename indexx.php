<?php
//set connect variables 
$host = 'localhost';
$user = 'root';
$password = "";
$db = 'new2';
$db_port = 8889;
//connection to server & database 
$connection = mysqli_connect($host, $user, $password, $db );
//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;
//run
if(isset($_POST['run'])) {
$sql="INSERT INTO `motors3` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ('".$_POST['a1']."', '".$_POST['a2']."', '".$_POST['a3']."', '".$_POST['a4']."', '".$_POST['a5']."', '".$_POST['a6']."')";
$result=$connection->query($sql);
    //safe
}else if(isset($_POST['safe'])) { 
    $sql="INSERT INTO `motors3` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ('".$_POST['a1']."', '".$_POST['a2']."', '".$_POST['a3']."', '".$_POST['a4']."', '".$_POST['a5']."', '".$_POST['a6']."')";
$result=$connection->query($sql);}
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];
$a6 = $_POST['a6'];
if(isset($_POST['go'])){
 $my_query = "INSERT INTO `motors3` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ('".$_POST['a1']."', '".$_POST['a2']."', '".$_POST['a3']."', '".$_POST['a4']."', '".$_POST['a5']."', '".$_POST['a6']."')";
    $result = mysqli_query($connection, $my_query);
    if($result) {echo "Item successfuly Added!";  }
    else{ echo "ERROR: Unable to past <br>";}}




    
