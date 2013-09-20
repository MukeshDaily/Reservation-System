<?php
class Supportmodel extends CI_Model {
function __construct()
    {
        parent::__construct();
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

	function cancel_bus_ticket()
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
	
	$b=explode(',',$userarr[10]);
	foreach ($b as $seat):
	 $c[$seat]=1;
	endforeach;
$this->db->update('seatplan', $c, array('busid' => $userarr[6],'busdate' => $userarr[7]));

	}
}
?>