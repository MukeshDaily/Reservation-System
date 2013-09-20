<?php
class Loginmodel extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function check_login()
    {   
	if($_POST['filled']==1)
    {
	$sql = "SELECT * FROM bsmaliktb WHERE malikmail = ? AND malikpass = ?"; 
    $query = $this->db->query($sql, array($_POST['username'],$_POST['password']));
    //return $query->result();
	$yes=0;
foreach ($query->result() as $row):
  $yes=1;
endforeach;

if($yes)
{
session_start();
$_SESSION['valid']=1;
$_SESSION['username']=$_POST['username'];
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
	
	
    }
}
?>