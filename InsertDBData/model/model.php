<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="testdb";
        
        $conn= new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
            echo "can't create connection object".$conn->connect_error;
        }
        return $conn;
    }


    function InsertData($fname,$lname,$age,$salary,$tablename,$conn)
    {
        $sqlstr="INSERT INTO $tablename (fname,lname,age,salary) VALUES ('$fname','$lname',$age,$salary)";

        if($conn->query($sqlstr)==TRUE)
        {
            echo "Data inserted";
        }
        else{
            echo "Can't Insert".$conn->error;
        }
    }


    function closecon($conn)
    {
        $conn->close();
    }
}
?>