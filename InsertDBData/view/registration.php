<?php
include("../control/registrationcheck.php");
?>
<html>
<body>
    <form action="" methdod="post">
        <h2>Registration</h2><br>
<b>___________________________________________________________________________________________________________________</b>
    <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" placeholder="Please Enter First Name">
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="lname"  placeholder="Please Enter Last Name"> </td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age"  placeholder="Please Enter Age"> </td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="number" name="salary"  placeholder="Please Enter Salary"> </td>
            </tr>
        </table>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
</form>
</body>
</html>