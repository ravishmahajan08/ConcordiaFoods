<?php
session_start();
$string=file_get_contents("users.json");
$users_a=json_decode($string,true);
$check=false;

foreach($users_a as $value){
    if($_POST['StudentID']==$value["StudentID"] and $_POST['Password']==$value["Password"]){

      $_SESSION['StudentID']=$_POST ['StudentID'];
        if($_SESSION['StudentID']=='Admin'){header("location: ../BackEndPages/UserList.php");}
        else{header("location: ../index.html");}
      $check=true;
    }
}if(!$check){
  $_SESSION["error"]="Username and/or Password is incorrect";
  header("Location: login.php");
}
?>
