<?php 
include("../Control/RegistrationCheck.php");
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Registration Forms</h2>
    <form action="../Control/RegistrationCheck.php" method="post" onsubmit="check()">  
    <table>
    <tr>
            <td>First Name:</td>
            <td><input type="text" id="fname" name="fname"></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" id="lname"name="lname"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" id="age" name="age"></td>
        </tr>
        <tr>
            <td>Designation:</td>
            <td>
            <input type="radio" name="desig" id="desig" value="Junior Programmer">Junior Programmer
            <input type="radio" name="desig" id="desig" value="Senior Programmer">Senior Programmer
            <input type="radio" name="desig" id="desig" value="Project Lead">Project Lead
            </td>
         </tr>
         <tr>
            <td>Prefered language:</td>
            <td>
            <input type="checkbox" name="language1" >JAVA
            <input type="checkbox" name="language2" >PHP
            <input type="checkbox" name="language3" >C++
            </td>
            </tr>
            <tr>
            <td>E-mail:</td>
            <td><input type="text" id="email" name="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" id="pass" name="pass"></td>
        </tr>
        <tr>
            <td><input type="file" value="Choose File"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Submit" value="Submit">
<input type="reset" value="Reset"></td>
</tr>
       
</table></form>
<script type="text/JavaScript" src="../JS/Main.js"></script>

</body>
</html>