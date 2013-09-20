<?php
class Confirmmodel extends CI_Model {
function __construct()
    {
        parent::__construct();
    }
	function user_pnr()
    {
	$pnr=rand(10000,60000);
	$this->db->update('fbususertb', array('fustatus' => $pnr), array('fuemail' => $_GET['email'],'fuid' => $_GET['userid']));
		
	$sql = "SELECT * FROM fbususertb WHERE fuemail = ? AND fuid= ?"; 
    $query = $this->db->query($sql, array($_GET['email'], $_GET['userid']));
    return $query->result();
	}
	function seat_pnr()
    {	
	$sql = "SELECT * FROM fbususertb WHERE fuemail = ? AND fuid = ?";
	$query = $this->db->query($sql, array($_GET['email'], $_GET['userid']));	
	
foreach ($query->result() as $row):
  $cnt=0;
  foreach ($row as $item):
	$userarr[$cnt]=$item;
	$cnt++;
  endforeach;
endforeach;
	
	$b=explode(',',$userarr[10]);
	foreach ($b as $seat):
	 $c[$seat]=$userarr[12];
	endforeach;
$this->db->update('seatplan', $c, array('busid' => $userarr[6],'busdate' => $userarr[7]));


	$sql = "SELECT * FROM detailtb WHERE fbsid = ?"; 
    $querytwo = $this->db->query($sql, array($userarr[6]));
    return $querytwo->result();
	}	
	
	
	
	function support_user_pdf()
    {	
	$sql = "SELECT * FROM fbususertb WHERE fustatus = ?"; 
    $query = $this->db->query($sql, array($_POST['pnr']));
    return $query->result();
	}
	function support_bus_pdf()
    {	

	$sql = "SELECT * FROM fbususertb WHERE fustatus = ?"; 
    $query = $this->db->query($sql, array($_POST['pnr']));	
	
foreach ($query->result() as $row):
  $cnt=0;
  foreach ($row as $item):
	$userarr[$cnt]=$item;
	$cnt++;
  endforeach;
endforeach;
	$sql = "SELECT * FROM detailtb WHERE fbsid = ?"; 
    $querytwo = $this->db->query($sql, array($userarr[6]));
    return $querytwo->result();
	}			

}
?>