<?php
class DB{
    function opencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="testdb";
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error){
            echo "can't create connection object".$conn->connect_error;

        }
        return $conn;

    }

    function InsertData($fname,$lname,$age,$des,$email,$pass,$tablename,$conn){
        $sqlstr="INSERT INTO $tablename (fname,lname,age,des,email,pass) VALUES ('$fname','$lname',$age,'$des','$email','$pass')";
        if($conn->query($sqlstr)===TRUE){
        
        echo "Data Inserted";
        
        
        }
        else{
            echo "cant insert".$conn->error;
        }

    }

   function closecon($conn){
    $conn->close();
   }

}
?>