<!DOCTYPE html>
<html>
<body>
    <h2>Registration Forms</h2>
    <table>
    <tr>
            <td>First Name:</td>
            <td><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lastname"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" name="name"></td>
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
            <input type="checkbox" name="language">JAVA
            <input type="checkbox" name="language">PHP
            <input type="checkbox" name="language">C++
            </td>
            </tr>
            <tr>
            <td>E-mail:</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password"></td>
        </tr>
        <tr>
            <td>Please choose a file</td>
            <td><input type="file" value="Choose File"></td>
        </tr>

       
</table>
<input type="submit" value="Submit">
<input type="reset" value="Reset">

</body>
</html>