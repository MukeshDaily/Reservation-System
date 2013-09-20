<?php
if($_POST[filled]==1)
{
include("connect.php");
$q="Select * from nitians where members='$_POST[username]' and securitycode='$_POST[password]'";

$data=mysql_query($q, $con);

if($row=mysql_fetch_row($data))
{
session_start();
$_SESSION[valid]=1;
$_SESSION[username]=$_POST[username];
header("location:http://127.0.0.1/01bussystem/index.php/cfadmin/");
}
else
{
header("location:http://127.0.0.1/01bussystem/index.php/cfadmin/login");
}
}
else
{
header("Location:http://127.0.0.1/01bussystem/index.php/cfadmin/login");
}
?>