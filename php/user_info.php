<?php
$con=mysqli_connect('localhost','root','');
if(!$con){
    echo 'Not connected to server';
}
if(!mysqli_select_db($con,'information'))
{
    echo 'Database not selected';
}

if (isset($_POST['email'])) 
{ 
    $Email=$_POST['email'];
}
if (isset($_POST['psw'])) 
{ 
    $Password=$_POST['psw'];
} 

$Email = isset($_POST['email']) ? $_POST['email'] : '';
$Password = isset($_POST['psw']) ? $_POST['psw'] : '';

$sql="INSERT INTO tab (Email,Password) VALUES('$Email','$Password')";
if(!mysqli_query($con,$sql))
{
    echo 'Not inserted';
}
else
{
    echo 'inserted';
}
?>