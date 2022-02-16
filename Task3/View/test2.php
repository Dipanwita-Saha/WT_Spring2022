<?php
include "../Control/result.php";
?>

<!DOCTYPE html>
<html>
<body>
    
    <h2>Registration Forms</h2>
    <form action="process.php" method="post" enctype="multipart/form-data">

    <table>
    <tr>
            <td>First Name:</td>
            <td><input type="text" name="firstname">
           <?php
           echo $fnameerr;
           ?></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lastname">
            <?php
           echo $lnameerr;
           ?></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td>Designation:</td>
            <td>
            <input type="radio" name="designation">Junior Programmer
            <input type="radio" name="designation">Senior Programmer
            <input type="radio" name="designation">Project Lead
            </td>
         </tr>
         <tr>
            <td>Prefered language:</td>
            <td>
            <input type="checkbox" name="language1">JAVA
            <input type="checkbox" name="language2">PHP
            <input type="checkbox" name="language3">C++
            </td>
            </tr>
            <tr>
            <td>E-mail:</td>
            <td><input type="text" name="email">
            <?php
           echo $emerr;
           ?></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password">
            <?php
           echo $passerr;
           ?></td>
        </tr>
        <tr>
            <td>Please choose a file</td>
            <td><input type="file" name="myfile"></td>
        </tr>

       
</table>
<input type="submit" name="Submit" value="Submit">
<input type="reset" value="Reset">
</form>
</body>
</html>