<?php 
include("../Model/model.php");
if(isset($_POST["Submit"])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
if(isset($_POST["desig"]))
{
  $desig=$_POST['desig'];
}
else
$desig=null;

$email=$_POST['email'];
$pass=$_POST['pass'];
if(empty($fname) || empty($lname) || empty($age) ||  empty($desig) ||empty($email) || empty($pass) ){

    echo "please insert all field";
}
else{
  $mydb=new DB();
  $conobj=$mydb->opencon();
  $mydb->InsertData($fname,$lname,$age, $desig,$email,$pass,"person",$conobj);
  $mydb->closecon($conobj);

}





}



?>