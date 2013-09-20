<?php
session_start();
if($_SESSION['valid']!=1)
{
header("location:http://127.0.0.1/01bussystem/index.php/cfadmin/login");
}
else
{
print "<a href='http://127.0.0.1/01bussystem/index.php/cfadmin/logout'>Logout</a>";
}

?>