<?php

session_start(); 

$username=$password=NULL;


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
}
 $error="";
// store session data
$data = file_get_contents("../Files/user.json");
$mydata = json_decode($data);

if (isset($_POST['submit'])) 
{
    //foreach($mydata as $myobject)
    //{
        for($i=0;$i<3;$i++)
        {
            if( $mydata[$i]->username==$username && $mydata[$i]->password==$password)
            {
                //$myobject as $key=>$value &&
                //echo "Your".$key. " is ".$value. "<br>";
                echo $mydata[$i]->username;
                echo $mydata[$i]->email;
            }
           // else
           // {
             //   echo "Invalid username or password";
            //}
        }
   // }





    //if (empty($_POST['username']) || empty($_POST['password'])) 
    //{
      //  $error = "Username or Password is invalid";
    //}
    //else
    //{
      //  $_SESSION["username"] = $_POST['username'];
        //$_SESSION["password"] = $_POST['password'];
    //}
 
}



?>
