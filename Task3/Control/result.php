<?php
$firstname=$lastname=$email=$password="";
$fnameerr=$lnameerr=$emerr=$passerr="";

if(isset($_POST["Submit"]))
{

    $firstname=$_REQUEST["firstname"];

    if(strlen($firstname)<6)
    {
        $fnameerr="Please enter a valid firstname";
    }
    else
    {
        $fnameerr="Your first name is".$firstname;
    }

    echo "<br>";

    $lastname=$_REQUEST["lastname"];

    if(strlen($lastname)<6)
    {
        $lnameerr="Please enter a valid lastname";
    }
    else
    {
        $lnameerr="Your first name is".$lastname;
    }

    echo "<br>";

    $email=$_REQUEST["email"];

    if(empty($email))
    {
        $emerr="Please enter a valid email address";
    }
    else
    {
        $emerr="Your email is".$email;
    }

    echo "<br>";

    $password=$_REQUEST["password"];

    if(empty($password))
    {
        $passerr="Please enter a valid password";
    }
    else
    {
        $passerr="Your password is".$password;
    }

    echo "<br>";

    if(isset($_POST["designation"]))
    {
        echo "You have selected ".$_POST["designation"];
    }
    else
    {
        echo "Your have not selected anything";
    }

    echo "<br>";

    if(isset($_POST["language1"]) ||isset($_POST["language2"])||isset($_POST["language3"]) )
    {
        echo "You have selected A box";
        if(isset($_POST["language1"]))
    {
        echo "You have selected ".$_POST["language1"];
    }
    if(isset($_POST["language2"]))
    {
        echo "You have selected ".$_POST["language2"];
    }
    if(isset($_POST["language3"]))
    {
        echo "You have selected ".$_POST["language3"];
    }
    }
    else
    {
        echo "Your have not selected anything";
    }

    echo "<br>";
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Files/".$firstname.".jpg"))
    {
        echo "File Uploaded!";
        echo "<br>";
        echo $_FILES["myfile"]["tmp_name"];
    }
    else
    {
        echo "File not Uploaded!";
    }
}


?>