<?php
session_start();
session_destroy();

header("location:http://127.0.0.1/01bussystem/index.php/cfadmin/login");

?>