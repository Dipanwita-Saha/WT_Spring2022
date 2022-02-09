<?php
$firstname=$lastname=$email=$password="";
$nameerr="";
if(isset($_POST["Submit"]))
{
    $firstname=$_REQUEST["firstname"];

    if(strlen($firstname)<6)
    {
        echo "Please enter a valid firstname";
    }
    else
    {
        $nameerr="Your first name is".$firstname;
    }

    echo "<br>";

    $lastname=$_REQUEST["lastname"];

    if(strlen($lastname)<6)
    {
        $nameerr="Please enter a valid firstname";
    }
    else
    {
        $nameerr="Your first name is".$firstname;
    }

    echo "<br>";

    $email=$_REQUEST["email"];

    if(empty($email))
    {
        $nameerr="Please enter a valid email address";
    }
    else
    {
        $nameerr="Your email is".$email;
    }

    echo "<br>";

    $password=$_REQUEST["password"];

    if(empty($password))
    {
        $nameerr="Please enter a valid password";
    }
    else
    {
        $nameerr="Your password is".$password;
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
        echo "You have selected ".$_POST[language1];
    }
    if(isset($_POST["language2"]))
    {
        echo "You have selected ".$_POST[language2];
    }
    if(isset($_POST["language3"]))
    {
        echo "You have selected ".$_POST[language3];
    }
    }
    else
    {
        echo "Your have not selected anything";
    }

}


?>