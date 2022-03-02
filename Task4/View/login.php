<?php
include('../Control/loginchecker.php');

?>
<!DOCTYPE html>
<html>
<body>

<h2>Login Page</h2>

<form action="" method="post">
<table>
    <tr>
        <td>Name: </td> 
         <td><input type="text" name="username" placeholder="Please Enter Username" ></td>
    </tr>
    <tr>
        <td>Password: </td>
        <td><input type="password" name="password" placeholder="Plesase Enter Password" ></td>
    </tr>
</table>
<input name="submit" type="submit" value="login">
</form>
</body>
</html>